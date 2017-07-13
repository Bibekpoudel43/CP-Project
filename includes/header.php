
  <!-- importing logo on navigation bar -->
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="images/bookstoreLogo.png" alt="BookStore" width="270px" height="60px" style="padding-bottom: 20px"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <?php 

      //Session check if user is logged in or not
      if(!isset($_SESSION['id'])){
     ?>
      <li><a href="actions/register.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
      <li><a href="actions/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="helpfile/User Guide.pdf"><span class="glyphicon glyphicon-flag"></span>Help</a></li>
      <?php 
    }
    else{
      ?>
      <li><a href="userProfile.php"><span class="glyphicon glyphicon-user">Profile</span></a></li>
      <li><a href="actions/logout.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
      <li><a href="helpfile/User Guide.pdf"><span class="glyphicon glyphicon-flag"></span>Help</a></li>
      <?php
      }
       ?>
    </ul>

    <!-- form for search bar -->
    <form class="navbar-form navbar-right" method="POST" action="search_items.php" >
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="iname">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" name="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="nav navbar-nav navbar-right ">
      <li class="active" ><a href="index.php" class="glyphicon glyphicon-home">.Home</a></li>
      <li><a href="aboutus.php">About Us <span class="care"></span></a></li>
      <li><a href="view_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
    </ul>