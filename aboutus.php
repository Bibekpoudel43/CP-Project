<?php 
//session start
session_start(); 
?>

<html lang="en">
<head>
<!-- heading of a page. Contains bootstrap and other CSS and JS file -->
 <?php include('includes/head.php') ?>
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
  <div class="awe-content" style="padding-top: 40px; padding-bottom: 40px;">
      <div class="container">
      <div class="row">
      <div class="col-md-4">
      <?php include('includes/leftmenu.php') ?>
      </div>
      <div class="col-md-8">
              <h1 class="title">About Us</h1>
              
              <p class="text-muted" >We are proud to announce the launch of the our Online Bookstore.</b>.<br><br> 

              The Bookstore caters to orders for online books, online reference works and journal backfiles via perpetual access purchase only.<br><br>

              Designed to handle orders that your institution needs quickly - the new online bookstore can handle your institution's needs simply and efficiently.<br>

              <h3 >Save time</h3>
              <ul >
              <li class="text-muted" >With our new online bookstore you can order what you need, when you need nad wherever you need.</li>

              <li class="text-muted" >We have streamlined the ordering process to make sure it is easy to use, without any unnecessary complications.</li>
                </ul>
                <h3 >Faster delivery</h3>
                <p >The bookstore</p>
                <ul >
                <li class="text-muted" >can process your order efficiently in our systems, with no manual delays, the content you ordered is delivered more quickly and efficiently to your institution.</li>

                <li class="text-muted" > allows you to browse books, online reference works and journal backfiles, and you can easily purchase perpetual access for your institution's account via  purchase order.</li>
                </ul>
                <p class="display-4">Contact Us - if you have any problems or questions you can still easily contact our online support team at: brotherRocks@gmail.com</p> 

      </div>
      </div>
  </div>
  </div>

<div class="container-fluid" style="padding-left:0; padding-right:0;">
    <div class="row" style="margin-left:0; margin-right:0"></div>
      <div class="col-md-12" style="padding-left:0; padding-right:0;">
        <?php 
        //footer
        include('includes/footer.php') 
        ?>
      </div>
    </div>
  </div>
</body>
</html>
