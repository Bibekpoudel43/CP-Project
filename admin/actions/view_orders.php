<div id="bodyright">
<h3>Items Order By Users</h3>
	<form>
	<!-- table to view the order made by user -->
		<table>
			<tr>
				<th>S.N.</th>
				<th>User Name</th>
				<th>Adress</th>
				<th>PhoneNumber</th>
				<th>BoughtItems</th>
				<th>Price</th>
				<th>Delete</th>
			</tr>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/admin.php');
$ad =new Admin();
$i = 1;
$store = $ad->viewOrders();
while($row = $store->fetch_assoc()):
				echo "<tr>
					<td>".$i++."</td>
					<td>".$row['name']."</td>
					<td>".$row['address']."</td>
					<td>".$row['phone_no']."</td>
					<td>".$row['bname']."</td>
					<td>".$row['totalprice']."</td>
					<td><a href = 'actions/delete_order.php?id=".$row['id']."'> <img src='icons/drop.png'></a>
					</td>
					</tr>";
			endwhile;
?>
		</table>
	</form>
</div>