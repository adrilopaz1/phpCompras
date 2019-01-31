
<?php

include('session.php');

$idUser=$_SESSION['login_user'];


$fecha1=$_REQUEST['fecha1'];
$fecha2=$_REQUEST['fecha2'];

if($fecha1==null || $fecha2==null){
	trigger_error("El campo fecha no puede estar vacio");
}


$consultaProducto="select requiredDate from orders where requiredDate between '$fecha1' and '$fecha2'";

$sentenciasql1= mysqli_query($db,  $consultaProducto);

if(mysqli_num_rows($sentenciasql1) == 0){

	echo "No hay ventas en dichos fechas "."<br>";
}


 $resultadoBusqueda="select orderNumber, orderDate, status from orders where customerNumber=(select id from admin where username='$idUser') and orderDate between '$fecha1' and '$fecha2'";

 
$sentenciasql= mysqli_query($db,  $resultadoBusqueda);

if(mysqli_num_rows($sentenciasql) > 0) {
    // output data of each row
	echo "<TABLE border=1>";
	echo "<tr>";
		echo "<td>Numero de Pedidos</td>";
		echo "<td>Fecha</td>";
		echo "<td>Estado </td>";
	echo "</tr>";
	
    while($row = mysqli_fetch_assoc($sentenciasql)) {
		
		echo "<tr>";
			echo "<td>".$row["orderNumber"]."</td>";
			echo "<td>".$row["orderDate"]."</td>";
			echo "<td>".$row["status"]."</td>";
		echo "</tr>";

    }
	 // S12_4675
	echo "</TABLE>";
}else {
    echo "No hay ventas en las fechas: '$fecha1'"." y "."'$fecha2'";
}

?>


