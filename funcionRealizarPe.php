<?php
	 include('session.php');
	
	function altaPedido($cont){
	
		
	
		$sql="select productName  from products";

		$resultado1 = mysqli_query($db, $sql);

	if (mysqli_num_rows($resultado1) > 0) {

		echo "producto 1"; 

		echo "<select name='lista+$cont'>";
		while ($fila = mysqli_fetch_assoc($resultado1)) {

			echo "<option>".$fila["productName"]."</option>";	

		}
		echo "</select>";
		}
	}
?>