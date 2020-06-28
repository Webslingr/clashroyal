<?php
include("db_connect.php");

$uname=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$password=$_POST['password'];
$gender=$_POST['gender'];


$query= "INSERT INTO registration(username,name,email,age,password,gender) VALUES ('$uname','$name','$email','$age','$password','$gender')";
$result = mysqli_query($conn, $query) or die('Query failed: ' .mysqli_error($conn));

session_start();
$_SESSION["logged"] = true;
$_SESSION['username'] = $uname;
$_SESSION['password'] = $password;
header ("Location: index.php?view=$uname");

?>
