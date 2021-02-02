<?php
include ('database.php');
$id = $_POST["id"];
$Description=$_POST['bonus'];

$sql = "UPDATE Payroll SET Bonus='$Description' WHERE EMPid= '$id'";
mysqli_query($conn, $sql);
header("Location:AdminSalaryCheck");
?>