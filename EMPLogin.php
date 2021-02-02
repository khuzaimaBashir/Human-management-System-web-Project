<?php
session_start();
include('database.php');
// Create connection

$username =  $_GET['username'];
$password =  $_GET['password'];
$result= mysqli_query($conn,"SELECT * from EMPLog WHERE Username = '$username' and Pass = '$password'");
$row = mysqli_fetch_assoc($result);
if ( $username == '' || $password == ''){
    header('Location:EMPWrongLogin.html');
} elseif ($row['Username'] == $username && $row['Pass'] == $password){
    $_SESSION['rainbow_username']=$row['Username'];
    $_SESSION['rainbow_uid']=$row['id'];
    $_SESSION['rainbow_name']=$row['EMPNAME'];
    $id=$row['id'];
    $ts = "INSERT INTO TimeSheet (EMPid,LOGGED)
    VALUES ('$id','LOG IN');";
    mysqli_multi_query($conn, $ts);
    header('Location: EMPHome.php'); }//intead of this link of next page

else {
    header('Location:EMPWrongLogin.html');//use this error in html for display rather than showing a blank page
}

?>
