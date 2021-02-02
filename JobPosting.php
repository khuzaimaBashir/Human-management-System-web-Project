<?php
include('database.php');
$NewJob=$_POST['new'];
$Description=$_POST['Description'];

$JV = "INSERT INTO JOBVACANCY (JobName,JobDescription)
VALUES ('$NewJob','$Description');";
mysqli_query($conn, $JV);
header('Location:JobPage.php');
?>