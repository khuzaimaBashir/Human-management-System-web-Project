<?php
session_start();
include ('database.php');
$id=$_SESSION['rainbow_uid'];
$ts = "INSERT INTO TimeSheet (EMPid,LOGGED)
VALUES ('$id','LOG OUT');";
mysqli_multi_query($conn, $ts);
unset($_SESSION['rainbow_name']);
unset($_SESSION['rainbow_uid']);
unset($_SESSION['rainbow_username']);
header('Location:index.php');
// Add the main page where u select to select u are admin or employee
?>