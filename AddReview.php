<?php
session_start();
include ("database.php");
$r=$_POST["review"];
$id=$_SESSION["rainbow_uid"];
$ER = "INSERT INTO EmployeeReviews (EMPreview,EMPid)
VALUES ('$r','$id');";
mysqli_multi_query($conn, $ER);
header("Location:EMPCheckReview.php");
?>