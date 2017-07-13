<?php
/**
* 
*/
class Category
{
	
	function __construct()
	{
		$id;
		$name;
		$this->db = new mysqli("localhost", "root", "", "bookstore");
          if(mysqli_connect_errno()) {
          echo "Error: Could not connect to database.";
           exit;
           }
	}

	//add category
	public function addCat($name){
		$sql="SELECT * FROM category WHERE name='$name'";

		//checking if the username or email is available in db
		$check = $this->db->query($sql);
		$count_row = $check->num_rows;

		//if the username is not in db then insert to the table
		if ($count_row == 0){
		$sql1 = "INSERT into category set name='$name'";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}
	else{
		return false;
	}
}
	//view category
	public function viewCat(){
		$sql1 = "SELECT * from category ORDER BY name ASC";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}

	//delete category
	public function delCat($id){
		$sql1 = "DELETE from category where id='$id'";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}


	public function getCat(){
		$sql1 = "SELECT * from category";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}
}
?>