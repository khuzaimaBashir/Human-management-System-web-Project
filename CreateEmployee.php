<?php
include('database.php');
$EMPid=$_POST['id'];
$Login=$_POST['login'];
$Pass =$_POST['password'];
$Name=$_POST['name'];
$Designation=$_POST['designation'];
$emp = "INSERT INTO EMPLog (id, Username, Pass,EMPNAME ,EMP_DESIGNATION)
VALUES ('$EMPid', '$Login', '$Pass', '$Name','$Designation');";
mysqli_query($conn, $emp);

header('Location:Employee.php');
?>