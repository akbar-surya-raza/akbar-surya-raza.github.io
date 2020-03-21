<?php
	session_start();
	
include"koneksi.php";

$username = $_POST["username"];

$password = $_POST["password"];

$query = mysql_query("SELECT * FROM admin WHERE username='$username' and password='$password'");
if(isset($_SESSION['username']) ) {

	echo "<h1>Welcome ".$_SESSION['username']."</h1>";
	echo "<a href='product.php'>Product</a><br>";
	echo "<br><a href='logout.php'><input type=button value=logout name=logout</a>";
}
else{
	if($_POST['username']==$username && $password['password']==$password){
		$_SESSION['username']=$username;
		header("location:welcome.php");
	}else{
	header("location:index.php");
}
}