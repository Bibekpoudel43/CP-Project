<?php
class Customer 
{
	public $db;

	function __construct()
	{
		 $id;
		 $name;
		 $password;
		 $address;
		 $email;
		 $phoneNo;
		   	$this->db = new mysqli("localhost", "root", "", "bookstore");
            if(mysqli_connect_errno()) {

                echo "Error: Could not connect to database.";

                    exit;
            }

	}

	//reister a  new user
	public function register($name,$password,$address,$email,$phoneNo,$as){

		$sql="SELECT * FROM customer WHERE email='$email' -- OR password='$password'";

		//checking if the username or email is available in db
		$check = $this->db->query($sql);
		$count_row = $check->num_rows;

		//if the username is not in db then insert to the table
		if ($count_row == 0){
		$sql1="INSERT INTO customer SET name='$name', password='$password', address='$address', email='$email', phone_no='$phoneNo', usertype=".$as;
		$result = mysqli_query( $this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
		return $result;
		}
		else { 
			return false;
		}
	}

	//login to a system
	public function login($email,$password){
		$sql2="SELECT * from customer WHERE email='$email' and password='$password'";

		//checking if the username is available in the table
		$result = mysqli_query($this->db,$sql2) ;
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;

		if ($count_row == 1) {
		// this login varification will use for the session 
		$_SESSION['login'] = true;
		$_SESSION['id'] = $user_data['id'];
		$_SESSION['name'] = $user_data['name'];
		$_SESSION['utype'] = $user_data['usertype'];
		return true;
		}
		else{
		return false;
		}

		}

	//to view a user's profile
	public function viewProfile($id){
		$sql2="SELECT * from customer WHERE id=".$id;
		$result = mysqli_query( $this->db,$sql2);
		return $result;
	}

	//tp update a profile
	public function updateProfile($id,$name,$pass,$add,$email,$phone){
		$sql2="UPDATE customer SET name='$name', password='$pass', address='$add', email='$email', phone_no='$phone', usertype='0' WHERE id=".$id;
		$result = mysqli_query( $this->db,$sql2);
		return $result;
	}
}

?>