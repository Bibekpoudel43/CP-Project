<?php session_start();
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
  <div class="awe-content" style="padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
        <?php include('includes/leftmenu.php') ?>
        </div>
      <div class="col-md-8">
      <?php 
      include('functions/search.php');

      //submitting the data provided by user
    if (isset($_REQUEST['submit'])){
		 $iname = $_REQUEST['iname'];
     //initialzing the object
		 $search = new Search();
     //using the function of Search class
		 $store = $search->searchItems($iname);

		 $rowCount = $store->num_rows;
		if($rowCount==0) {
			echo "<div class='alert alert-info alert-dismissable fade in'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <strong>Info!</strong> Product Not Found. Please try again with correct product name.
            </div>";
		    }
		else{
      //fetching the data from database
        while($row = $store -> fetch_assoc()):
               echo "<div class='col-md-4'>
          <div class='thumbnail'>
          <img src='admin/BookCover/".$row['image']."' alt='BookImage'' style='width:100%; height:40%;'>
          <div class='caption'>";     
        echo "<h4>".$row['bname']."</h4>
          <p>by <strong>".$row['author']."</strong></p>
          <p class='text-center'><strong> RS. ".$row['price']."</strong></p>
          <p><a href = 'actions/add_cart.php?id=".$row['id']."' class='btn btn-primary' role='button''>Add</a> <a href='details.php?id=".$row['id']."' class='btn btn-default' role='button'>Details</a></p>
               </div> 
               </div>
         </div>";
      endwhile;
      }
    }
      ?>
      </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="padding-left:0; padding-right:0;">
    <div class="row" style="margin-left:0; margin-right:0">
    </div>
      <div class="col-md-12" style="padding-left:0; padding-right:0;">
      <!-- footer -->
        <?php include('includes/footer.php') ?>
      </div>
  </div>
</div>
</body>
</html>
