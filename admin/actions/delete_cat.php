<?php 
	if(isset($_GET['delete_cat'])){

	//getting category id through url
	$id = $_GET['delete_cat'];
	include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/category.php');
	$cat = new Category();
	$catch = $cat->delCat($id);
	if($catch){
		    ?> 
         	<script type="text/javascript">
      		window.alert('Removed Successfully!');     		
      		window.location = 'http://localhost/BookStore/admin/index.php?view_cat';
      		</script>
      		<?php
	}
}
 ?>