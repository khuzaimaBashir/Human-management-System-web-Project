<?php
include('database.php');
$id = $_POST["id"];
$Salary=$_POST['salary'];

$sql = "UPDATE Payroll SET Salary='$Salary' WHERE id= '$id'";
mysqli_query($conn, $sql);
?>