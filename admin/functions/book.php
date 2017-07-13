<?php
/**
* 
*/
class Book 
{
	function __construct()
	{
		$id;
		$name;
		$isbn;
		$price;
		$publisher;
		$edition;
		$des;
		$catid;
		$this->db = new mysqli("localhost", "root", "", "bookstore");
            if(mysqli_connect_errno()) {
                echo "Error: Could not connect to database.";
                    exit;
            }
	}

	//add book
	public function addBook($bname, $isbn, $price, $publisher, $author, $edition, $des, $img, $catid){
		//inserting new book
		$sql1="INSERT INTO book (bname,isbn,price,publisher,author,edition,description,image,categoryid)
				VALUES ('$bname','$isbn','$price','$publisher','$author','$edition','$des','$img','$catid')";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}

	//view books
	public function viewBook(){ 
		$sql1 = "SELECT * from book";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}

	//delete book
	public function delBook($id){
		$sql1 = "DELETE from book where id=$id";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}

	//view book according to book category
	public function viewCatBook($catid)
	{
		$sql1 = "SELECT * from book where categoryid=$catid";
		$result = mysqli_query( $this->db,$sql1);
		return $result;	
	}

	//count book on each category
	public function countBook($catid){
		$sql1 = "SELECT count(*) AS num from book where categoryid=$catid";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}

	//view book details
	public function viewDetails($bid){
		$sql1 = "SELECT * from book where id=$bid";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}
	
	//update the book
	public function updateBook($name,$isbn,$price,$publisher,$author,$edition,$des,$img,$catid){
		$sql1="UPDATE book SET name='$name', isbn='$isbn', price='$price', publisher='$publisher', 
		author='$author', edition='$edition', description= '$des', image= '$img', categoryid= '$catid'";
		$result = mysqli_query( $this->db,$sql1);
		return $result;
	}

}
?>