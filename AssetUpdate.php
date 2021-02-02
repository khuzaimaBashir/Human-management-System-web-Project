<?php
include ('database.php');
$id = $_POST["id"];
$Description=$_POST['ASSET'];

$sql = "UPDATE ASSET SET ASSET='$Description' WHERE id= '$id'";
mysqli_query($conn, $sql);
header("Location:Asset.php");
?>