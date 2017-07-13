<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/book.php');
	if(isset($_GET['id'])){

	// getting book id through url
	$id = $_GET['id'];
	$bk = new Book();
	$catch = $bk->delBook($id);
	if($catch){
		    ?> 
         	<script type="text/javascript">
      		window.alert('Removed Successfully!');
      		window.location = 'http://localhost/BookStore/admin/index.php?view_book';
      		</script>
      <?php
	}
}
 ?>