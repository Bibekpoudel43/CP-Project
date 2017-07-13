<?php 
if(!isset($_SESSION)){
session_start();
 }
 ?>
<html lang="en">
<head>
 <?php include('includes/head.php'); ?>
 </head>
<body>

  <nav class="awe-navbar navbar navbar-default" style="margin-bottom:0">
    <div class="container-fluid">
    <?php include('includes/header.php'); ?>
    </div> 
  </nav>

  <div class="awe-slider">
    <div class="container">
      <?php include('includes/slider.php') ?>
    </div>
  </div>
  <div class="awe-content" style="padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
      <div class="row">
      <div class="col-md-4">
      <?php include('includes/leftmenu.php') ?>
      </div>
      <div class="col-md-8">

    <?php
    include('admin/functions/book.php');
    $bid = $_GET['id'];
    $bk = new Book();
    $getBook = $bk->viewDetails($bid);    
      while($row = $getBook -> fetch_assoc()):  
     echo "<div class='col-md-12'>

          <div class='product col-md-3 service-image-left'>        
            <center>
              <img id='item-display' src='admin/BookCover/".$row['image']."' alt='' width='270px' height='300px'></img>
            </center>
          </div>
        </div>
            <!-- end col 12 -->
        <div class='col-md-9' style='margin:0'>
          <hr>
         <div style='font-size:28px'>".$row['bname']."</div> <p>by <strong>".$row['author']."</strong></p>
          <div style='font-size:16px ' >".$row['description']."</div><hr>
          <div style='font-size:17px'><h4> ISBN : </h4>".$row['isbn']."</div>
          <div style='font-size:17px'><h4> Edition : </h4>".$row['edition']."</div>
          <div style='font-size:18px'><h4> Publisher : </h4>".$row['publisher']."</div><br>
          <div style='font-size:19px' ><mark><b>RS. ".$row['price']."</mark></b></div>
          <hr>
          <div class='btn-group cart'>
            <a href='actions/add_cart.php?id=".$row['id']."><button type='button' class='btn btn-success'>
              Add to cart
            </button></a>
          </div>
        </div>";
      endwhile;
        ?>
        

      </div>
      </div>
  </div>
  </div>

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
