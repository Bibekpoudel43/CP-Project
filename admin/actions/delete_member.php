<?php
	if(isset($_GET['id'])){

	//getting user id
	$id = $_GET['id'];
	include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/admin.php');
	//initializing the object of class Admin
	$cat = new Admin();
	$catch = $cat->delMember($id);
	if($catch){
		    ?> 
         	<script type="text/javascript">
      		window.alert('Removed Successfully!');     		
      		window.location = 'http://localhost/BookStore/admin/index.php?view_member';
      		</script>
      		<?php
	}
}
?>