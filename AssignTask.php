<?php
include('database.php');
$EMPID= $_POST["id"];
$TASK= $_POST["Task"];
$task = "INSERT INTO Task (EMPid,Task)
VALUES ('$EMPID' , '$TASK');";
mysqli_query($conn, $task);
// make a form for this 
//after this query runs link back to main admin page
header('Location:taskassigned.php');
?>