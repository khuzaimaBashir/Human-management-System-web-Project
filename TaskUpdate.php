<?php
include ('database.php');
$id = $_POST["id"];
$Description=$_POST['Task'];

$sql = "UPDATE Task SET Task='$Description' WHERE EMPid= '$id'";
mysqli_query($conn, $sql);
header("Location:taskassigned.php")
?>