<?php 
include ("database.php");
include ("EMPsidebar.php");
session_start();
$id = $_SESSION["rainbow_uid"];
$query= "select * from Task WHERE EMPid = '$id'";  //After where empid add $_variable for server side use
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <title>
        Fetch Data From Database
    </title>
<body>
<link rel="stylesheet" href="btn.css">
<div class="btn">
<table>
    <tr>
    <th colspan="4"><h2>Your current tasks </h2></th>
    </tr>
<tr>
    <th>id </th>
    <th> EMP ID </th>
    <th>Task Assigned Date and Time</th>
    <th>Task</th>
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["reg_date"]; ?></td>
<td><?php echo $rows["Task"]; ?></td>

</tr>
<?php } ?>
</table>
</div>
</body>
</html>