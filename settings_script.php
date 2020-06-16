<?php
require "include/common.php";
if(!isset($_SESSION['email'])){
    header('location: index.php');
}

$oldpassword=md5($_POST['oldpwd']);
$newpassword=$_POST['newpwd'];
$retypenewpwd=$_POST['Retypenewpwd'];


if(strlen($newpassword)!=strlen($retypenewpwd)){
    header('location: settings.php?password_error=length not match');
}
$user_id=$_SESSION['user_id'];
$query="SELECT password FROM users WHERE id='$user_id'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$oldpassworddb= $row['password'];
if($oldpassword==$oldpassworddb){
    $query2 ="UPDATE users SET password='$newpassword' WHERE id='$user_id'";
    $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
    header("location: settings.php?success=Your password is updated");
}else{
    header("location: settings.php?error=password doesn't match");
}
?>