<?php
include('db_connect.php');

session_start();

	 	$price=$_POST['price'];
	 	$order_name=$_POST['order_name'];
	 	$order_email=$_POST['order_email'];
	 	$country= $_POST['country'];
	 	$address=$_POST['address'];
	 	$city=$_POST['city'];
	 	$phone=$_POST['phone'];
	 	$type=$_POST['type'];
	 	$card_name=$_POST['card_name'];
	 	$card_number=$_POST['card_number'];
	 	$cvv=$_POST['cvv'];
	 	$exp_month=$_POST['exp_month'];
	 	$exp_year=$_POST['exp_year'];

	 	$query= "INSERT INTO `order`(name,country,address,city,phone_number,email,price) VALUES ('$order_name','$country','$address','$city','$phone','$order_email','$price')";
		$result=mysqli_query($conn, $query) or die('Query failed: ' .mysqli_error($conn));
		
		$query2= "INSERT INTO card(name_on_card,card_number,cvv,exp_month,exp_year,type) VALUES ('$card_name','$card_number','$cvv','$exp_month','$exp_year','$type')";
		$result2=mysqli_query($conn, $query2) or die ('Query failed: '.mysqli_error($conn)); 	

		
		unset($_SESSION["shopping_cart"]);

		$message = "Thank your for your order. We will revert back to you by email as soon as your order is processed.";
		echo "<script type='text/javascript'>alert('$message')</script>";
		echo "<script type='text/javascript'>window.location='index.php'</script>";

		

?>
