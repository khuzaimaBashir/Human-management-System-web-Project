<?php
include('database.php');
$date=$_POST['date'];

$JV = "INSERT INTO Vacations (Vacation_date)
VALUES ('$date');";
mysqli_query($conn, $JV);
header("Location:AdminVacation.php");
?>