<?php
include ('database.php');
$id = $_POST["EMPid"];
$Description=$_POST['designation'];

$sql = "UPDATE EMPLog SET EMP_DESIGNATION='$Description' WHERE id= '$id'";
mysqli_query($conn, $sql);
header('Location:Employee.php');
?>