<?php 
include('db_connect.php');
$d_id=$_POST['d_id'];

$query= "DELETE FROM product WHERE (product_id='$d_id')";
$result = mysqli_query($query) or die('Query failed: ' .mysqli_error());
$message = "Product Deleted Successfully";
echo "<script type='text/javascript'>alert('$message')</script>";
echo "<script type='text/javascript'>window.location='delete_product.html'</script>";
?>
