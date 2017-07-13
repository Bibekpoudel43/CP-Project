<?php
/**
* 
*/
class Admin
{
	
	function __construct()
	{
		$id;
		$name;
		$pass;
		$email;
		$phone;
		$add;
		$this->db = new mysqli("localhost", "root", "", "bookstore");
            if(mysqli_connect_errno()) {
                echo "Error: Could not connect to database.";
                    exit;
            }
	}

	//to view order made by user
	public function viewOrders(){
		$sql="SELECT * FROM book b, customer cu, cart ca WHERE ca.bookid = b.id AND ca.cusid = cu.id";
		$result = mysqli_query($this->db,$sql);
		return $result;
	}
	//delete order made by user
	public function delOrder($id){
		$sql1 = "DELETE from cart where id=$id";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}

	//view members 
	public function viewMember(){
		$sql="SELECT * FROM customer";
		$result = mysqli_query($this->db,$sql);
		return $result;
	}

	// delete members
	public function delMember($id){
		$sql1 = "DELETE from customer where id=$id";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}
}
?>