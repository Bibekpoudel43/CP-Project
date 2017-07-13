<!-- right division -->
<div id="bodyright">
<h3>Categories</h3>
	<form method="post" name="cat">
		<table>
			<tr>
				<th>S.N.</th>
				<th>Category Name</th>
				<th>Delete</th>
			</tr>
				<?php 
				include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/category.php');
				$cat = new Category();
				$store = $cat->viewCat();
				$i = 1;
				while($row = $store -> fetch_assoc()):
				echo "<tr>
					<td>".$i++."</td>
					<td>".$row['name']."</td>
					<td><a href = 'actions/delete_cat.php?delete_cat=".$row['id']."'> <img src='icons/drop.png'></a>
					</td>
					</tr>";
			endwhile;
				?>
		</table>
		</form>
</div>