<?php session_start(); ?>
<h1>Login form</h1>
<form action="" method="post">
	<p>Username:<input type="text" name="username"></p>
	<p>Password:<input type="password" name="password"></p>
	<p><input type="submit" name="login" value="Login"></p>
</form>
<?php 
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE username == '$username' AND password == '$password'";
	$result = mysql_query($conn, $sql);
	//result->num_rows => 0

	if($username == 'apple.luong1905' && $password == '123456'){
		$last_login = Date('Y-m-d');
		//Update thoi gian login vao database
		$_SESSION['userInfo']   = $result;
		$_SESSION['last_login'] = $last_login;
		header("Location: login_success.php");
	}
}
?>