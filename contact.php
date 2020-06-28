<?php 
    include('db_connect.php');
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_subject=$_POST['c_subject'];
    $c_platform=$_POST['c_platform'];
    $c_message=$_POST['c_message'];

    $query= "INSERT INTO contact(name,email,subject,platform,message) VALUES ('$c_name','$c_email','$c_subject','$c_platform','$c_message')";
    $result = mysqli_query($conn, $query) or die('Query failed: ' .mysqli_error($conn));
    $message = "Message successfuly sent";
    echo "<script type='text/javascript'>alert('$message')</script>";
    echo "<script type='text/javascript'>window.location='index.php'</script>";
?>

