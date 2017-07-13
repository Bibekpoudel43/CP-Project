<div id="bodyleft">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?add_cat">Add Category</a></li>
			<li><a href="index.php?view_cat">View Categories</a></li>
			<li><a href="index.php?add_book">Add Books</a></li>
			<li><a href="index.php?view_book">View Books</a></li>
			<li><a href="index.php?view_member">View Users</a></li>
			<li><a href="index.php?view_orders">View Orders</a></li>
			<li><a href="index.php?logout">Logout</a></li>

		</ul>	

</div>
	<!-- end of bodyleft -->

	<?php 
		if(isset($_GET['add_cat'])){
			include ("actions/add_cat.php");
		}
		if(isset($_GET['view_cat'])){
			include ("actions/view_cat.php");
		}
		if(isset($_GET['view_book'])){
			include ("actions/view_book.php");
		}
		if(isset($_GET['add_book'])){
			include ("actions/add_book.php");
		}
		if(isset($_GET['view_member'])){
			include ("actions/view_member.php");
		}
		if(isset($_GET['view_orders'])){
			include ("actions/view_orders.php");
		}
		if(isset($_GET['logout'])){
			include ("../actions/logout.php");
		}
	 ?>