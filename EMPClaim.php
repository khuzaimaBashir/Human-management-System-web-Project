<?php
include('database.php');
session_start();
$id=$_SESSION['rainbow_uid'];
$review=$_POST['claim'];

$ER = "INSERT INTO EmployeeReviews (Query,EMPid)
VALUES ('$review','$id');";
mysqli_query($conn, $ER);

?>