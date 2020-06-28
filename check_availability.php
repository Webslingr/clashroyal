<?php
include("db_connect.php");


if(!empty($_POST["username"])) {
  $result = mysqli_query($conn, "SELECT count(*) FROM registration WHERE username='" . $_POST["username"] . "'");
  if(mysqli_num_rows($result) > 0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>