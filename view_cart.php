<?php session_start();
 ?>
<html lang="en">
<head>
 <?php include('includes/head.php') ?>
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
      <h2>View Items</h2><br><br>
     <table class="table table-hover">
    <thead>
      <tr>
        <th>S.N.</th>
        <th>ProductName</th>
        <th>Image</th>
        <th>Price</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php 
        include('functions/cart.php');
        $cat = new Cart();
        $uid = $_SESSION['id'];
        $store = $cat->viewCart();
        $i = 1;
        while($row = $store -> fetch_assoc()):
        echo "<tr>
          <td>".$i++."</td>
          <td>".$row['name']."</td>
          <td><img src = admin/BookCover/".$row['image']." width='80' height='85'/></td>
          <td>".$row['totalprice']."</td>
          <td><a href = 'actions/del_cart.php?delete_cart=".$row['id']."'>
           <button type='button' class='btn btn-default btn-sm'>
          <span class='glyphicon glyphicon-trash'></span>Delete 
        </button></a></td>
          </tr>";
      endwhile;
        ?>
    </tbody>
  </table>
      </div>
      </div>
  </div>
  </div>

  <div class="container-fluid" style="padding-left:0; padding-right:0;">
    <div class="row" style="margin-left:0; margin-right:0"></div>
      <div class="col-md-12" style="padding-left:0; padding-right:0;">
        <?php include('includes/footer.php') ?>
      </div>
    </div>
  </div>
</body>
</html>
