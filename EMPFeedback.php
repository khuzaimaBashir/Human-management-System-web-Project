<?php
include('database.php');
$id=$_SESSION['rainbow_uid'];
$review=$_POST['review'];

$ER = "INSERT INTO EmployeeReviews (EMPreview,EMPid)
VALUES ('$review','$id');";
mysqli_query($conn, $ER);

?>