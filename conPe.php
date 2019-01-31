<?php

include('session.php');

// $consultaCliente="select customerName from customers where customerNumber=$_SESSION['login_user']";

// $sentenciasql1= mysqli_query($conn,  $consultaCliente);

// if(mysqli_num_rows($sentenciasql1) == 0){

	// echo "El cliente  no existe"."<br>";
// }


// //sacar el numero de pedidos que a realizado el cliente







$idUser = $_SESSION['login_user'];
 
 $resultadoBusqueda="select orderNumber, orderDate, status from orders where customerNumber=(select id from admin where username='$idUser')";

$sentenciasql= mysqli_query($db,  $resultadoBusqueda);

if(mysqli_num_rows($sentenciasql) > 0) {
    // output data of each row
	echo "<TABLE border=1>";
	echo "<tr>";

		echo "<td>Numero</td>";
		echo "<td>Fecha</td>";
		echo "<td>Estado</td>";
	
		
	echo "</tr>";
	
    while($row = mysqli_fetch_assoc($sentenciasql)) {
		
		echo "<tr>";
				echo "<td>".$row["orderNumber"]."</td>";
				echo "<td>".$row["orderDate"]."</td>";
				echo "<td>".$row["status"]."</td>";
			
			
			
		echo "</tr>";

    }
	
	echo "</TABLE>";
} else {
    echo "El cliente $numCliente No a realizado pedidos ";
}

?>