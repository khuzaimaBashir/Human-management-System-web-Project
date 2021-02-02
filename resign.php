<?php
include('database.php');
$id=$_SESSION['rainbow_uid'];

$sql = "DELETE FROM EMPLog WHERE id='$id'";
mysqli_query($conn, $sql);
$sqll = "DELETE FROM TimeSheet WHERE EMPid='$id'";
mysqli_query($conn, $sqll);
$sqlll = "DELETE FROM EmployeeReviews WHERE EMPid='$id'";
mysqli_query($conn, $sqlll);
$sqlllL = "DELETE FROM ASSET WHERE EMPid='$id'";
mysqli_query($conn, $sqlllL);
$sqlllr = "DELETE FROM Applications WHERE EMPid='$id'";
mysqli_query($conn, $sqlllr);
$sqlllv = "DELETE FROM Task WHERE EMPid='$id'";
mysqli_query($conn, $sqlllv);
$sqllla = "DELETE FROM Payroll WHERE EMPid='$id'";
mysqli_query($conn, $sqllla);
$sqlllk = "DELETE FROM Claim WHERE EMPid='$id'";
mysqli_query($conn, $sqlllk);
header('Location: Home.php');
?>