<?php 
include ("database.php");
include ("sidebar.php");
session_start();
$query= "select * from TimeSheet";  //After where empid add $_variable for server side use
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <title>
        Fetch Data From Database
    </title>
<body>
<link rel="stylesheet" href="btn.css">
<table class = "btn" class="displayTable">
    <tr>
    <th colspan="4"><h2>Employees TimeSheet Log </h2></th>
    </tr>
<tr>
    <th>id </th>
    <th> EMP ID </th>
    <th> Log In / Log Out </th>
    <th>Time and Date </th>
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["Logged"]; ?></td>
<td><?php echo $rows["reg_date"]; ?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>