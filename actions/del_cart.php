<?php 
if(isset($_GET['delete_cart'])){
	$id = $_GET['delete_cart'];

	//including full path 
	include($_SERVER['DOCUMENT_ROOT'].'/BookStore/functions/cart.php');
	$cart = new Cart();
	$catch = $cart->delCart($id);
	if($catch){
		    ?> 
         	<script type="text/javascript">
      		window.alert('Removed Successfully!');     		
      		window.location = '../view_cart.php';
      		</script>
      		<?php
	}
}
?>