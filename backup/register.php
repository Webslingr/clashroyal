<?php
include("db_connect.php");

$uname=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$password=$_POST['password'];
$gender=$_POST['gender'];

/* $sql = "SELECT * FROM registration WHERE username = '$uname';";
$qresult = mysqli_query($conn, $sql);
if(mysqli_num_rows($qresult) > 0) {
	echo "Username already exist, pick another one!";
}
else { */
$query= "INSERT INTO registration(username,name,email,age,password,gender) VALUES ('$uname','$name','$email','$age','$password','$gender')";
$result = mysqli_query($conn, $query) or die('Query failed: ' .mysqli_error());
echo "Successfully added";

?>