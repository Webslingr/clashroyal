<?php 
include('db_connect.php');
$u_id_old=$_POST['u_id_old'];
$u_id_new=$_POST['u_id_new'];
$u_name=$_POST['u_name'];
$u_desc=$_POST['u_desc'];
$u_price=$_POST['u_price'];
$type=$_POST['type'];
$u_image=$_POST['u_image'];

$query= "UPDATE product SET product_id='$u_id_new', product_name='$u_name', product_des='$u_desc',price = '$u_price',type ='$type',product_image='$u_image' WHERE product_id='$u_id_old'";
$result = mysqli_query($query) or die('Query failed: ' .mysqli_error());
$message = "Product Updated Successfully";
echo "<script type='text/javascript'>alert('$message')</script>";
echo "<script type='text/javascript'>window.location='update_product.html'</script>";
?>
