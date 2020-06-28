<?php 
include('db_connect.php');
$a_id=$_POST['a_id'];
$a_name=$_POST['a_name'];
$a_desc=$_POST['a_desc'];
$a_price=$_POST['a_price'];
$type=$_POST['type'];
$a_image=$_POST['a_image'];

$query= "INSERT INTO product(product_id,product_name,product_des,price,type,product_image) VALUES ('$a_id','$a_name','$a_desc','$a_price','$type','$a_image')";
$result = mysqli_query($query) or die('Query failed: ' .mysqli_error());
$message = "New Product Added Successfully";
	echo "<script type='text/javascript'>alert('$message')</script>";
	echo "<script type='text/javascript'>window.location='add_product.html'</script>";
?>
