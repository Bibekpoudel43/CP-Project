<?php
require ($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/category.php');
$cat = new Category();

//storing data provided by the user
if(isset($_POST['submit'])){
	$name = $_POST['cat_name'];
	// extract($_POST);
 	$reg = $cat->addCat($name);  
      if($reg ){ 
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
      		window.alert('Category name already exist');
      	</script>
       <?php 
      }  
}
?>
<div id="bodyright">
   <h3>Add New Category</h3>

   <!-- form to add category -->
   <form method="POST" action="">
      <table >
         <tr>
            <td>Enter Category Name : </td>
            <td><input type="text" name="cat_name" required="required" /></td>
         </tr>
      </table>
      <br><br>
      <center><input type="submit" name="submit" value="Add"></center>
   </form>
</div>
