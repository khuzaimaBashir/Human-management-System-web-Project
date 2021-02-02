<?php 
session_start();
include ("database.php");
include ('EMPsidebar.php');
$id=$_SESSION['rainbow_uid'];
$query= "select * from asset WHERE EMPid= '$id'";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <title>
        <head> Fetch Data From Database </head>
    </title>
<body>
    <link rel="stylesheet" href="btn.css">
<div class="btn">
<table>
    <tr>
    <th colspan="4"><h2>Employees Log </h2></th>
    </tr>
<tr>
    <th>id </th>
    <th>Asset</th>
    <th>Time Assigned </th>
</tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["ASSET"]; ?></td>
<td><?php echo $rows["reg_date"]; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
