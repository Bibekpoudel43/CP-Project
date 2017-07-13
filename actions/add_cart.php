<?php 
	session_start();
	include '../functions/cart.php';
	
	//getting cart id and checking session 
	if(isset($_GET['id']) && isset($_SESSION['id'])) {

		//initializing the CArt class
		$cart = new Cart();

		//passing an id to the addCart funtion of a Cart class
		$cart->addCart($_GET['id']+0);
		header('Location: ../view_cart.php');
	}
	else{
		?>
	<script type="text/javascript">
		window.alert('You must login first');
		window.location.href = "../actions/login.php";
	</script>
	<?php
	}
	?>