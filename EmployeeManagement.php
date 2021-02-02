<?php 
include ("database.php");
include ("EMPsidebar.php");
session_start();
$id = $_SESSION["rainbow_uid"];
$query= "select * from Task WHERE EMPid = '$id'";
?>
<!DOCTYPE html>
<html>
    <title>
        Fetch Data From Database
    </title>
<body>
    <link rel="stylesheet" href="btn.css">

<div class="btn">
<tr>
    <th><h2>Employees Current Information </h2></th>
</tr>
<?php
$id=$_SESSION["rainbow_name"];
?>
<div>
<tr>
<?php echo "Your Name is " .$id ;
?>
</tr>
</div>
<div>
    <p>To Change the Password click below</p>
<form action="EMPPassChange.php" method="POST">
    <input type = "text" name="pass">
<input type="submit" value="Change Password">
</form>
</div>
</div>

?>