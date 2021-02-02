<?php
include ('database.php');
$id = $_POST["EMPid"];
$Description=$_POST['name'];

$sql = "UPDATE emplog SET EMPNAME='$Description' WHERE id= '$id'";
mysqli_query($conn, $sql);
header('Location:Employee.php');
?>