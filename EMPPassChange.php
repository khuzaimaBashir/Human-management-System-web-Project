<?php
session_start();
include('database.php');
$id = $_SESSION["rainbow_uid"];
$Description=$_POST['pass'];

$sql = "UPDATE emplog SET Pass = '$Description' WHERE id = '$id';";
mysqli_query($conn, $sql);
header('Location:Logout.php');
?>