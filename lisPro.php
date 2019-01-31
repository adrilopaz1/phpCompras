<?php

include('session.php');
//sacar el numero de pedidos que a realizado el cliente

 $resultadoBusqueda="select productName, quantityInStock from products order by quantityInStock desc";

$sentenciasql= mysqli_query($db,  $resultadoBusqueda);

if(mysqli_num_rows($sentenciasql) > 0) {
    // output data of each row
	echo "<TABLE border=1>";
	echo "<tr>";
		echo "<td>Nombre Producto</td>";
		echo "<td>Stock del prducto</td>";
		
	echo "</tr>";
	
    while($row = mysqli_fetch_assoc($sentenciasql)) {
		
		echo "<tr>";
			echo "<td>".$row["productName"]."</td>";
			echo "<td>".$row["quantityInStock"]."</td>";
		echo "</tr>";

    }
	 // S12_4675
	echo "</TABLE>";
}

?>