<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();
header("location:../");
exit;
?>
<?php
session_start();

if(isset($_SESSION['username'])){

	session_destroy();
	header("location:../login");
}else{

	header("location:../login");
}
?>