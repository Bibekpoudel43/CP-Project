<?php
/**
* 
*/
if (!isset($_SESSION)) {
	session_start();
}
class Cart
{
	
	function __construct()
	{
		$id;
		$qty;
		$tprice;
		$bookid;
		$userid = $_SESSION['id'];
		$this->db = new mysqli("localhost", "root", "", "bookstore");
            if(mysqli_connect_errno()) {
                echo "Error: Could not connect to database.";
                    exit;
            }
	}

	public function viewCart(){
	$sql1 = "SELECT b.name, b.image, b.price, c.totalprice, c.id from book b, cart c where b.id = c.bookid and c.cusid=".$_SESSION['id'];
		$result = mysqli_query( $this->db,$sql1);
		return $result;	
	}

	public function delCart($id){
		$sql1 = "DELETE FROM cart where id='$id'";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}

	public function addCart($bookid){

	$bp = "SELECT price FROM book WHERE id=".$bookid;
	$result = mysqli_query( $this->db,$bp);
	
	$bp = $result->fetch_assoc();
	$bp = $bp['price'];
	$sql1="INSERT INTO cart SET totalprice=$bp, bookid=$bookid, cusid=".$_SESSION['id'];
	$result = mysqli_query( $this->db,$sql1);
	return $result;
	}
}
?>