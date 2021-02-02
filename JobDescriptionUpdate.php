<?php
include ('database.php');
$id = $_POST["id"];
$Description=$_POST['Description'];

$sql = "UPDATE JOBVACANCY SET JobName='$Description' WHERE id= '$id'";
mysqli_query($conn, $sql);
header('Location:JobPage.php');
?>