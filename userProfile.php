<?php 
if(!isset($_SESSION)){
session_start();
 }
 ?>
<html lang="en">
<head>
<!-- heading of a page -->
 <?php include('includes/head.php'); ?>
 </head>
<body>

<!-- navigation bar -->
<nav class="awe-navbar navbar navbar-default" style="margin-bottom:0">
    <div class="container-fluid">
    <?php include('includes/header.php'); ?>
    </div> 
</nav>

<!-- JS slider -->
<div class="awe-slider">
    <div class="container">
      <?php include('includes/slider.php') ?>
    </div>
</div>

<!-- main content  -->
<div class="awe-content" style="padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
        <?php include('includes/leftmenu.php') ?>
        </div>

 <div class="col-md-8">
   	      <div class="col-md-5 toppad  pull-right col-md-offset-3 ">
             <A href="update_profile.php" >Edit Profile</A>
            <br>
           </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-7 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-2 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              
              <?php
              include('functions/customer.php');
              $cus = new Customer();

              //getting the id of a user through url
              $id = $_SESSION['id'];

              //calling the function of Customer class
              $store = $cus->viewProfile($id);

              //fetching the data
              while($row = $store -> fetch_assoc()):
                  echo "<h3 class='panel-title'>".$row['name']."</h3>
                  </div>
                  <div class='panel-body>
                    <div class='row'>
                      <div class='col-md-12'> 
                        <table class='table table-user-information'>
                          <tbody>
                            <tr>
                              <td>Address:</td>
                              <td>".$row['address']."</td>
                            </tr>
                            <tr>
                              <td>Email:</td>
                              <td>".$row['email']."</td>
                            </tr>
                            <tr>
                              <td>Phone Number</td>
                              <td>".$row['phone_no']."</td>
                            </tr>";
                      endwhile;
                ?>
                    </tbody>
                  </table>   
          </div>
        </div>
      </div>
    </div>
      </div>
      </div>
  </div>
  </div>


<!-- footer -->
  <div class="awe-footer">
    <div class="container-fluid" style="padding-left:0; padding-right:0;">
    <div class="row" style="margin-left:0; margin-right:0"></div>
      <div class="col-md-12" style="padding-left:0; padding-right:0;">
        <?php include('includes/footer.php') ?>
      </div>
      </div>
    </div>
  </div>
</body>
</html>




