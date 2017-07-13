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
          <?php 
          include('actions/process_update_profile.php')
          ?>
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
