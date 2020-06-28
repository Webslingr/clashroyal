<?php
include("db_connect.php");

if(isset($_POST['username']) && isset($_POST['password'])){
$uname=$_POST['username'];
$password=$_POST['password'];
if ($uname == 'admin' && $password == 'root'){
	session_start();
	$_SESSION['username'] = $uname;
	echo "<script type='text/javascript'>window.location='root.php'</script>";
	}
}


else {
	$message = "Wrong username or password";
	echo "<script type='text/javascript'>alert('$message')</script>";
	echo "<script type='text/javascript'>window.location='admin.html'</script>";
}
?>