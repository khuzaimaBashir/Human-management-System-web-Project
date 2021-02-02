<?php
include('database.php');
$id=$_POST['id'];

$sql = "DELETE FROM ASSET WHERE id='$id'";
mysqli_query($conn, $sql);
header('Location:Asset.php');

?>