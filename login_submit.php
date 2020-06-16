<?php
require "include/common.php";

$email = $_POST['email'];
$password = $_POST['password'];
$enc_password = md5($password);

$query = "SELECT email,id FROM users WHERE email='$email' && password ='$enc_password'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){
    echo "Invalid User";
}else{
    $row = mysqli_fetch_array($result) or die(mysqli_error($con));
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];

    header('location: products.php');
}

?>