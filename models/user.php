<?php
class User{
	public $uid;
	public $username;
	public $contact;
	public $email;
	public $password;
	public $repassword;

	private $conn="";

	/*public function setUsername($username){
		$this->username=$username;
	}*/

	function __construct(){
		require_once "services/Config.php";
		$this->conn=Config::getConnection();
	}

	function RegisterUser(){
		$sql="INSERT INTO user (username,contact,email,password,repassword)VALUES('$this->username', '$this->contact', '$this->email', '$this->password','$this->repassword')";
		$result=$this->conn->query($sql);
		return $result;

	}

	function CheckUser(){
        //query
        //username or password matched or not.
        //check.
        $sql="SELECT * FROM user WHERE username= '$this->username' AND password= '$this->password'";
        $result=$this->conn->query($sql);
        return $result;
	}

	function username(){
		$sql="SELECT  username FROM user WHERE  uid =MAX(uid)";
		$result=$this->conn->query($sql);
		return $result;
	}




}

?>
