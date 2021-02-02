<?php
include('database.php');
$NewAsset=$_POST['asset'];
$id=$_POST['id'];

$JV = "INSERT INTO ASSET (EMPid,ASSET)
VALUES ('$id','$NewAsset');";
mysqli_query($conn, $JV);
header('Location:Asset.php');
?>