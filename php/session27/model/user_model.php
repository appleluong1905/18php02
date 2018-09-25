<?php 
require_once './config/database.php';
class UserModel extends ConnectDB{
	function addUser($username, $password, $role){
		$sql = "INSERT INTO users(role, username, password) VALUES ('$role', 
		'$username', '$password')";
		return mysqli_query($this->conn,$sql);
	}
}
?>