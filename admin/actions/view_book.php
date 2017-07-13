<div class="scroll" id="bodyright">
	<h3>View Products</h3>
	<form method="post" enctype="multipart/form-data">

		<!-- table design -->
		<table>
			<tr>
				<th>S.N.</th>			
				<th>Book Name</th>
				<th>ISBN</th>
				<th>Book Cover</th>
				<th>Edition</th>
				<th>Publisher</th>
				<th>Author</th>
				<th>Price</th>
				<th>Description</th>
				<th>Delete</th>
			</tr>
			<?php 
			include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/book.php');
				$cat = new Book();
				$store = $cat->viewBook();
				$i = 1;

				// fetching the data from database
				while($row = $store->fetch_assoc()):
				echo "<tr>
					<td>".$i++."</td>
					<td>".$row['bname']."</td>
					<td>".$row['isbn']."</td>
					<td style='min-width:200px' ><img src = BookCover/".$row['image']." width='154' height='244'/></td>	
					<td>".$row['edition']."</td>
					<td>".$row['publisher']."</td>
					<td>".$row['author']."</td>
					<td>".$row['price']."</td>
					<td style='margin-right:150px'>".$row['description']."</td>
					<td><a href = 'actions/delete_book.php?id=".$row['id']."'> <img src='icons/drop.png'></a>
					</td>
					</tr>";
			endwhile;
 			?>
		</table>
	</form>
</div>

