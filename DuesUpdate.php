<?php
include ('database.php');
$id = $_POST["id"];
$Description=$_POST['dues'];

$sql = "UPDATE Payroll SET Dues='$Description' WHERE EMPid= '$id'";
mysqli_query($conn, $sql);
header("Location:AdminSalaryCheck");
?>