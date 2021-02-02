<?php
include ("database.php");
include ("sidebar.php");
$id = $_POST['id'];


$sqllla = "DELETE FROM Payroll WHERE EMPid='$id'";
mysqli_query($conn, $sqllla);

header('Location:AdminSalaryCheck.php');
?>
