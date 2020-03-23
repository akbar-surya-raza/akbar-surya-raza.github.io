<?php 
session_start();
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("SELECT * FROM admin WHERE username='$username' and password='$password'");
$cek = mysql_num_rows($query);
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:welcome.php");
}else{
	header("location:index.php?pesan=gagal");
}
echo $cek;

?>