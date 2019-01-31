<?php

	include('session.php');
	// $pedido1 = $_SESSION['login_user'];


	echo "<form name='formu1' action='insertarOrden.php' method='get'>";
		
		$sql="select productName  from products";

		$resultado1 = mysqli_query($db, $sql);

	if (mysqli_num_rows($resultado1) > 0) {

		echo "producto 1 "; 

		echo "<select name='uno'>";
		while ($fila = mysqli_fetch_assoc($resultado1)) {

			echo "<option>".$fila["productName"]."</option>";	

		}
		echo "</select>";
		echo "cantidad <input type='text' name='uno' size='4'/>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		}
		$sql="select productName  from products";

		$resultado1 = mysqli_query($db, $sql);

	if (mysqli_num_rows($resultado1) > 0) {

		echo "producto 2 "; 

		echo "<select name='dos'>";
		while ($fila = mysqli_fetch_assoc($resultado1)) {

			echo "<option>".$fila["productName"]."</option>";	

		}
		echo "</select>";
		echo "cantidad <input type='text' name='uno' size='4'/>";
		echo "<br>";
		
	echo "<br>";
	echo "<br>";
	}
	
		$sql="select productName  from products";

		$resultado1 = mysqli_query($db, $sql);

	if (mysqli_num_rows($resultado1) > 0) {

		echo "producto 3
		"; 

		echo "<select name='tres'>";
		while ($fila = mysqli_fetch_assoc($resultado1)) {

			echo "<option>".$fila["productName"]."</option>";	

		}
		echo "</select>";
		echo "cantidad <input type='text' name='uno' size='4'/>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
	}
		$sql="select productName  from products";

		$resultado1 = mysqli_query($db, $sql);

	if (mysqli_num_rows($resultado1) > 0) {

		echo "producto 4 "; 

		echo "<select name='cuatro'>";
		while ($fila = mysqli_fetch_assoc($resultado1)) {

			echo "<option>".$fila["productName"]."</option>";	

		}
		echo "</select>";
		echo "cantidad <input type='text' name='uno' size='4'/>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
	}
		$sql="select productName  from products";

		$resultado1 = mysqli_query($db, $sql);

	if (mysqli_num_rows($resultado1) > 0) {

		echo "producto 5 "; 

		echo "<select name='cinco'>";
		while ($fila = mysqli_fetch_assoc($resultado1)) {

			echo "<option>".$fila["productName"]."</option>";	

		}
		echo "</select>";
		echo "cantidad <input type='text' name='uno' size='4'/>";
		echo "<br>";
		echo "<br>";
	}

	else {

		echo "No existen productos";

	}				

	echo "<input type='submit' value='Enviar'>";

	echo "</form>";

	
	
	
?>