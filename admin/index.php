<?php 
	 session_start();
	 // session check
	if(isset($_SESSION['utype'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<!-- main content of a page-->
	<?php 
		include ($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/includes/header.php');
		include ($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/includes/leftPanel.php');
		include ($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/includes/rightPanel.php');
}
		 else {
	 		header('Location: ../actions/login.php');
	 }
	 ?>

</body>
</html>