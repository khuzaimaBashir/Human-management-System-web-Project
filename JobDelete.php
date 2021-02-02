<?php
include('database.php');
$id=$_POST['id'];

$sql = "DELETE FROM JOBVACANCY WHERE id='$id'";
mysqli_query($conn, $sql);
header('Location:JobPage.php');

?>