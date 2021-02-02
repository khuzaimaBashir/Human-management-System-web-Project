<?php
session_start();
include("database.php");
include("EMPsidebar.php");
$id=$_SESSION['rainbow_uid'];
$query= "select * from Applications WHERE EMPid ='$id'" ;
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<head>
<link rel='stylesheet' href='btn.css'>
</head>
<body>
    <div>
<table class="btn" class="tabledisplay">
    <tr>
    <th colspan="4"><h2>Current Job Applied </h2></th>
    </tr>
    <tr>
    <th><?php echo 'Id'; ?></th>
<th><?php echo 'Employee Id'; ?></th>
<th><?php echo 'Job ID'; ?></th>
<th><?php echo 'Application Status'; ?></th>
</tr>
   
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["Vacancy"]; ?></td>
<td><?php echo $rows["App_Status"]; ?></td>
</tr>
<?php
}
?>
</table>
</div>
</body>
</html>