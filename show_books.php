<?php session_start(); ?>

<html lang="en">
<head>
<!-- heading of a page-->
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
      <?php include('includes/slider.php'); ?>
    </div>
  </div>

  <!-- main content  -->
  <div class="awe-content" style="padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
        <?php
         include('includes/leftmenu.php');
          ?>
        </div>
      <div class="col-md-8">
      <?php
  		include('admin/functions/book.php');
  		$id = $_GET['catid'];
  		$bk = new Book();
  		$getBook = $bk->viewCatBook($id);    
  			while($row = $getBook -> fetch_assoc()):  
       echo "<div class='col-md-4'>
            <div class='thumbnail'>
            <img src='admin/BookCover/".$row['image']."' alt='BookImage'' style='width:100%; height:40%;'>
            <div class='caption'>";     
  				echo "<h4>".$row['bname']."</h4>
          <p>by <strong>".$row['author']."</strong></p>
  					<p class='text-center'><strong> RS.".$row['price']."</strong></p>
  					<p><a href = 'actions/add_cart.php?id=".$row['id']."' class='btn btn-primary' role='button''>Add</a> <a href='details.php?id=".$row['id']."'' class='btn btn-default' role='button'>Details</a></p>
                 </div> 
                 </div>
           </div>";
  			endwhile;
        ?>
      </div>

      <!-- centering the icons -->
         <nav class="text-center">
          <ul class="pager" class="text-center">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>
        </nav>
         </div>
        </div>
      </div>

 <div class="container-fluid" style="padding-left:0; padding-right:0;">
    <div class="row" style="margin-left:0; margin-right:0"></div>
      <div class="col-md-12" style="padding-left:0; padding-right:0;">
        <?php 
        //footer
       include('includes/footer.php');
         ?>
      </div>
  </div>
  </div>
</body>
</html>



















