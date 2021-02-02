<?php
session_start();
include('database.php');
// Create connection
$error = '';

$username =  mysqli_real_escape_string($conn,trim($_GET['username']));
$password =  mysqli_real_escape_string($conn,$_GET['password']);
$result= mysqli_query($conn,"SELECT * from EMPLog WHERE Username = '$username' and Pass = '$password' ");
$row = mysqli_fetch_assoc($result);
if ($row['Username'] == $username && $row['Pass'] == $password){
    $_SESSION['rainbow_username']=$row['Username'];
    $_SESSION['rainbow_uid']=$row['id'];
    $_SESSION['rainbow_name']=$row['EMPNAME'];
    header('Location: EMPHome.php'); }//intead of this link of next page

if ($row['Username'] != $username || $row['Pass'] != $password) {
    header('Location:EMPWrongLogin.php');//use this error in html for display rather than showing a blank page
}

echo"Kindly Enter Correct UserName and Password";
?>
