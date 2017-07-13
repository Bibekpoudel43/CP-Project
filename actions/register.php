<?php
include('../functions/customer.php');
$Customer = new Customer();

//storing the data provided by the user to the datbase
if(isset($_POST['submit'])){
	$name = $_POST['user'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$as = $_POST['as'];
	extract($_POST);
 	$register = $Customer->register($name,$password,$address,$email,$phone,$as);
      if($register){  
         header('Location: login.php');
         return;
      }
      else
      {  
        ?>
      	<script type="text/javascript">
      		window.alert('Entered email already exist!');
      	</script>
       <?php 
      }  
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register Form</title>
  <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
<script type="text/javascript">
		//sign-up form validation
		function register_form(){
			var name = document.forms["reg"]["user"].value;
			var address = document.forms["reg"]["address"].value;
			var email = document.forms["reg"]["email"].value;
			var phone = document.forms["reg"]["phone"].value;
			var password = document.forms["reg"]["password"].value;
			if (name == "") {
				alert ("Please enter Name");
				document.getElementById("usr").focus();
				return false;
			}

			if (email == "") {
				alert ("Please enter Email Address");
				document.getElementById("em").focus();
				return false;
			}
			if (password == "") {
				alert ("Please enter Password");
				document.getElementById("pwd").focus();
				return false;
			}
			if (address == "") {
				alert ("Please enter Address");
				document.getElementById("add").focus();
				return false;
			}
			if (phone == "") {
				alert ("Please enter Phone number");
				document.getElementById("phn").focus();
				return false;
			}
		
		}
</script>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Online<span>BookStore</span></div>
		</div>
		<br>
		<div class="register">

		<!-- form for registration -->
		<form action="" method="POST" name="reg">

     			<input type="text" placeholder="username" name="user" id="usr"><br>
				<input type="text" placeholder="email" name="email" id="em"><br>
				<input type="password" placeholder="password" name="password" id="pwd"><br>
				<input type="text" placeholder="address" name="address" id="add"><br>
				<input type="text" placeholder="phone number" name="phone" id="phn"><br>
				<select id="soflow" name="as">
				  <option value="0" >User</option>
				  <option value="1" >Admin</option>
				</select>
				<input type="submit" value="Register" name='submit' onclick="return(register_form());">
		</form>
		</div>
  
</body>
</html>
