<?php
if(!isset($_SESSION)){
session_start();
 }
include('functions/customer.php');
$cus = new Customer();
//getting the user id
$id = $_SESSION['id'];

//storing the data provided by the user to the datbase
if(isset($_POST['submit'])){
$name = $_POST['name'];
$pass = $_POST['pass'];
$add = $_POST['add'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$store = $cus->updateProfile($id,$name,$pass,$add,$email,$phone);

  if($store){
    ?>
    <script type="text/javascript">
      window.alert('Updated Successfuly!!');
    </script>
    <?php
  }
  else{
       ?>
    <script type="text/javascript">
      window.alert('Cannot update profile at this time!');
    </script>
    <?php
  }
}

//passing user id to the viewProfile function of class Customer 
$store = $cus->viewProfile($id);
while($row = $store -> fetch_assoc()):
  	$pass = md5($row['password']);
  	echo "<form method='POST' action=''>
    <div class='form-group'>
      <label>Update Name</label>
      <input type='text' class='form-control' value='".$row['name']."' name='name'>
    <div class='form-group'>
      <label>New Password</label>
      <input type='password' class='form-control' value='".$row['password']."' name='pass'>
    </div>
        <label>Update address</label>
      <input type='text' class='form-control' value='".$row['address']."' name='add'>
          <label>Update Email</label>
      <input type='text' class='form-control' value='".$row['email']."' name='email'>
          <label>Update PhoneNo</label>
      <input type='text' class='form-control' value='".$row['phone_no']."' name='phone'><br>
      <button type='submit' class='btn btn-primary' name='submit'>Update</button>
  </form>";
endwhile;
?>