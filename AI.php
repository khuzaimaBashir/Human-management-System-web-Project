<?php
include('database.php');
$id = $_POST["AI"];
$Description="Awaiting Interview";

$sql = "UPDATE Applications SET App_Status='$Description' WHERE EMPid= '$id'";
mysqli_query($conn, $sql);
header("Location:Application.php");
?>