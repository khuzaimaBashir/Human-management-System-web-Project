<?php
include('database.php');
$id = $_POST["Reject"];
$Description="Reject";

$sql = "UPDATE Applications SET App_Status='$Description' WHERE EMPid= '$id'";
mysqli_query($conn, $sql);
header("Location:Application.php");
?>