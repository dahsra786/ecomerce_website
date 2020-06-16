<?php
require "include/common.php";
$id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$query="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$id'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));

header('location: cart.php');
?>