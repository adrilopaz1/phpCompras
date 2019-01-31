<?php

	// include('session.php');
	$pedido1 = $_SESSION['login_user'];
	$prod1=$_REQUIRE['uno'];
	$prod2=$_REQUIRE['dos'];
	$prod3=$_REQUIRE['tres'];
	$prod4=$_REQUIRE['cuatro'];
	$prod5=$_REQUIRE['cinco'];

	
	$cant1=$_REQUIRE['uno'];
	$cant2=$_REQUIRE['dos'];
	$cant3=$_REQUIRE['tres'];
	$cant4=$_REQUIRE['cuatro'];
	$cant5=$_REQUIRE['cinco'];
	
	
	
?>

<?php

	function funOrdernumber($pedido,$cantidad){
	
		
		$sql= "select max(orderNumber) from orders";
		
	
	
	}

	
	
	
?>