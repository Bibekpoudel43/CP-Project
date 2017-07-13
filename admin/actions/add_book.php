<?php
include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/book.php'); 
$cat = new Book();

// storing the data provided by user into a database
if(isset($_POST['submit'])){
	$bname = $_POST['name'];
	$isbn = $_POST['isbn'];
	$price = $_POST['price'];
	$publisher = $_POST['publisher'];
	$author = $_POST['author'];
	$edition = $_POST['edition'];
	$des = $_POST['description'];
	
	//image upload
	$img = $_FILES['image']['name'];
	$img_tmp= $_FILES['image']['tmp_name'];
	move_uploaded_file($img_tmp, "BookCover/$img");


	$catid = $_POST['cat_name'];

	//PASSING data to the addBook function
	$store = $cat->addBook($bname, $isbn, $price, $publisher, $author, $edition, $des, $img, $catid);	

		//checking if the above funtions works or not
	   if($store == true){ 
      ?> 
         	<script type="text/javascript">
      		window.alert('Added Successfully!');
      		</script>
      <?php
      }
      else
      {  
      ?>
      	<script type="text/javascript">
      		window.alert('Book name already exist');
      	</script>
       <?php 
      }
}


?>
<script type="text/javascript">
		// form validation
		function form_val(){
			var name = document.forms["sub"]["name"].value;
			var isbn = document.forms["sub"]["isbn"].value;
			var image = document.forms["sub"]["img"].value;
			var des = document.forms["sub"]["des"].value;
			var price = document.forms["sub"]["price"].value;
			var pub = document.forms["sub"]["pub"].value;
			var author = document.forms["sub"]["author"].value;
			var edition = document.forms["sub"]["edition"].value;
			if (name == "") {
				alert ("Please enter Book Name");
				document.getElementById("name").focus();
				return false;
			}

			if (isbn == "") {
				alert ("Please enter ISBN number");
				document.getElementById("isbn").focus();
				return false;
			}
			if (image == "") {
				alert ("Please enter Image");
				document.getElementById("img").focus();
				return false;
			}
			if (des == "") {
				alert ("Please enter Description");
				document.getElementById("des").focus();
				return false;
			}
			if (price == "") {
				alert ("Please enter Price");
				document.getElementById("price").focus();
				return false;
			}
			if (pub == "") {
				alert ("Please enter Publisher");
				document.getElementById("pub").focus();
				return false;
			}
			if (author == "") {
				alert ("Please enter Author");
				document.getElementById("author").focus();
				return false;
			}
			if (edition == "") {
				alert ("Please enter Edition");
				document.getElementById("edition").focus();
				return false;
			}
		
		}
</script>

<!-- right panel -->
<div id="bodyright">
	<h3>Add New Book</h3>
	<form method="post" action="" enctype="multipart/form-data" name="sub">
		<table>
			<tr>
				<td>Select Category : </td>
				<td> 
					<select name="cat_name">
						<?php 
						include("functions/category.php"); 
						$cat = new Category();
						$catch = $cat->getCat();
						while($row=mysqli_fetch_assoc($catch))
						{
						echo "<option value ='".$row['id']."'>".$row['name']."</option>";
						}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Enter Name : </td>
				<td><input type="text" name="name" id="name"/></td>
			</tr>
				<tr>
				<td>Enter ISBN number : </td>
				<td><input type="text" name="isbn" id="isbn"/></td>
			</tr>
			<tr>
				<td>Upload a Cover : </td>
				<td><input type="file" name="image" id="img"/></td>
			</tr>
			<tr>
				<td>Enter Description : </td>
				<td><textarea name="description" rows="4" cols="50" id="des" ></textarea>
			</tr>
			<tr>
				<td>Enter Price : </td>
				<td><input type="text" name="price" id="price"/></td>
			</tr>		
			<tr>
				<td>Enter Publisher : </td>
				<td><input type="text" name="publisher" id="pub"/></td>
			</tr>	
			<tr>
				<td>Enter Author's Name : </td>
				<td><input type="text" name="author" id="author"/></td>
			</tr>
			<tr>
				<td>Enter Edition : </td>
				<td><input type="text" name="edition" id="edition"/></td>
			</tr>	
		</table>
		<br><br>
		<center><input type="submit" name="submit" id="sub" onclick="return(form_val());" /></center>
	</form>
</div>
