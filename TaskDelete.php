<?php
include('database.php');
$id=$_POST['id'];

$sql = "DELETE FROM Task WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location:taskassigned.php");
?>