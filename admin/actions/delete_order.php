<?php 

//getting cart id
$id = $_GET['id'];
include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/admin.php');
$ad = new Admin();
$store = $ad->delOrder($id);
	if($store){
?> 
         	<script type="text/javascript">
      		window.alert('Removed Successfully!');
      		window.location = 'http://localhost/BookStore/admin/index.php?view_orders';
      		</script>
      <?php
		}
	else{
  	 ?> 
         	<script type="text/javascript">
      		window.alert('Could not delete this user');
      		</script>
      <?php
		}
	  ?>