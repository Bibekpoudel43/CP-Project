<?php
session_start(); 
include('../functions/customer.php');
$customer = new Customer();

//storing the data provided by the user to the database
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];
 $login = $customer->login($email,$pass);  
      if($login){  
         if($_SESSION['utype'] == 1){
         	header('Location: ../admin/index.php');
         }
         else{
         	header('Location: ../index.php');
         }
      }
      else
      {  
       ?>
      	<script type="text/javascript" >
      		window.alert('Invalid email / password');
      		window.location.href = 'login.php';
      	</script>
       <?php 
      }  
}
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<script type="text/javascript" language="javascript">

	//validation the form
	 function submitlogin() {
            var email = document.forms["lgn"]["email"].value;
			var password = document.forms["lgn"]["password"].value;

			//check if username field is empty
			if (email == "") {
				alert ("Please enter email");
				//place cursor to the texbox by recognising the its id
				document.getElementById("mail").focus();
				return false;
			}

			//check if password field is empty
			if (password == "") {
				alert ("Please enter password");
				document.getElementById("pass").focus();
				return false;
			}

            }
</script>

<!-- main content  -->
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Online<span>BookStore</span></div>
		</div>
		<br>
		<div class="login">
		<!-- form for login -->
		<form action="" method="POST" name="lgn">
				<input type="text" placeholder="Email" name="email" id="mail"><br>
				<input type="password" placeholder="password" name="password" id="pass"><br>
				<input type="submit" value="Login" onclick="return(submitlogin());" name="submit">
				<br/>
				<p>New User??</p><a href="register.php">Register here!!</a>
		</form>
		</div>
  
</body>
</html>
