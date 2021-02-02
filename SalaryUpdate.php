<?php
include ('database.php');
$id = $_POST["id"];
$Description=$_POST['salary'];

$sql = "UPDATE Payroll SET Salary='$Description' WHERE EMPid= '$id'";
mysqli_query($conn, $sql);
header("Location:AdminSalaryCheck");
?>