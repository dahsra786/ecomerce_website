<?php
require "include/common.php";

$name = $_POST['name'];
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email)){
    header('location: signup.php?email_error=incorrect email format');
}

$password = md5($_POST['password']);
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$query = "SELECT id FROM users WHERE email='$email'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>0){
    header("location: signup.php?error=email already exists");
}else{
    $query2="INSERT INTO users ( name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
    $result2=mysqli_query($con,$query2) or die(mysqli_error($con));

    $_SESSION['email']=$email;
    $_SESSION['user_id']=mysqli_insert_id($con);

    header('location: products.php');
}

?>