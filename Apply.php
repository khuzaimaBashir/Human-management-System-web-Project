<?php 
session_start();
include("database.php");
include("EMPsidebar.php");
$d=$_SESSION["rainbow_uid"];
$id = $_POST['id'];

$app = "INSERT INTO Applications (EMPid,Vacancy,App_Status)
VALUES ('$d' , '$id','Waiting');";
mysqli_multi_query($conn, $app);
header("Location:Career.php");
?>