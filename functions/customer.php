<?php
include ('../actions/dbConnector.php');
/**
* 
*/
class Customer 
{
	
	function __construct()
	{
		 $id;
		 $name;
		 $password;
		 $address;
		 $email;
		 $phoneNo;
		 $db;

		    $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            if(mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;

            }

	}

	public function register($name,$password,$address,$email,$phoneNo){
		$password = md5($password);
		$sql="SELECT * FROM customer WHERE email='$email' OR password='$password'";

		//checking if the username or email is available in db
		$check = $this->db->query($sql);
		$count_row = $check->num_rows;

		//if the username is not in db then insert to the table
		if ($count_row == 0){
		$sql1="INSERT INTO customer SET name='$name', password='$password', address='$address', email='$email', phone_no='$phoneNo'";
		$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
		return $result;
		}
		else { 
			return false;
		}
	}
	public function login($email,$password){
		$password = md5($password);
		$sql2="SELECT * from customer WHERE email='$email' and password='$password'";

		//checking if the username is available in the table
		$result = mysqli_query($this->db,$sql2) ;
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;

		if ($count_row == 1) {
		// this login varification will use for the session 
		$_SESSION['login'] = true;
		$_SESSION['id'] = $user_data['id'];
		return true;
		}
		else{
		return false;
		}
		}
		/*** for showing the username or fullname ***/
		public function get_fullname($id){
		$sql3="SELECT name FROM customer WHERE id = $id";
		$result = mysqli_query($this->db,$sql3);
		$user_data = mysqli_fetch_array($result);
		echo $user_data['name'];
		}

		/*** starting the session ***/
		public function get_session(){
		return $_SESSION['login'];
		}

		public function user_logout() {
		$_SESSION['login'] = FALSE;
		session_destroy();
		}


}