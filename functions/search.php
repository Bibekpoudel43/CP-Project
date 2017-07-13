<?php
/**
* 
*/
class Search
{
	function __construct()
	{
		$iname;
			$this->db = new mysqli("localhost", "root", "", "bookstore");
            if(mysqli_connect_errno()) {

                echo "Error: Could not connect to database.";

                    exit;
            }

	}

	// function to search a book
	public function searchItems($iname){
		$query = "SELECT * FROM book WHERE bname LIKE '%".$iname."%' OR author LIKE '%".$iname."%'";
		$result = mysqli_query( $this->db,$query);	
		return $result;

	}
}
?>