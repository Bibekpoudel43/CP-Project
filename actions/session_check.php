<?php

//to display the username of a logged in user
if(isset($_SESSION['name'])){
	echo "<h1 class='text-center'>Welcome  ".$_SESSION['name']."</h1>";
}
else{
	?>
	<div class='text-center'>
	<h1>Welcome</h1>
	<p>new User?</p>
	<p><button><a href="actions/register.php" style="text-decoration: none">Sign up</a></button> for best experience</p>
	</div>
<?php
}
?>