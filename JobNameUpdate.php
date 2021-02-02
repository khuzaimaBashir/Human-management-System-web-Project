<?php
include ('database.php');
$id = $_POST["id"];
$NewJob=$_POST['new'];

$sql = "UPDATE JOBVACANCY SET JobName='$NewJob' WHERE id= '$id'";
mysqli_query($conn, $sql);

header('Location:JobPage.php');
?>