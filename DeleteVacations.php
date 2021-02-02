<?php
include('database.php');
$id=$_POST['id'];

$sql = "DELETE FROM Vacations WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location:AdminVacation.php");

?>