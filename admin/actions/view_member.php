<!-- right panel -->
<div id="bodyright">
<h3>Customers</h3>
	<form>
		<table>
			<tr>
				<th>S.N.</th>
				<th>Name</th>
				<th>address</th>
				<th>email</th>
				<th>PhoneNumber</th>
				<th>Delete</th>
			</tr>
<?php
if(!isset($_SESSION)){
	// session start
session_start();
}

// including full path of file
include($_SERVER['DOCUMENT_ROOT'].'/BookStore/admin/functions/admin.php');
$ad = new Admin();
$i = 1;
$fetch = $ad->viewMember();
while($row = $fetch-> fetch_assoc()):
				echo "<tr>
					<td>".$i++."</td>
					<td>".$row['name']."</td>
					<td>".$row['address']."</td>
					<td>".$row['email']."</td>
					<td>".$row['phone_no']."</td>
					<td><a href = 'actions/delete_member.php?id=".$row['id']."'> <img src='icons/drop.png'></a>
					</td>
					</tr>";
			endwhile;
?>
		</table>
	</form>
</div>