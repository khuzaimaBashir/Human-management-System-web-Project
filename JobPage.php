<?php
session_start();
include("database.php");
include("sidebar.php");
$query= "select * from JOBVACANcY";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<head>
</head>
<body>
<link rel='stylesheet' href='btn.css'>
    <div>
<table class="btn" class="tabledisplay">
    <tr>
    <th colspan="4"><h2>Current Job Posting </h2></th>
    </tr>
    <tr>
    <th><?php echo 'Id'; ?></th>
<th><?php echo 'Job Name'; ?></th>
<th><?php echo 'Job Description'; ?></th>
<th><?php echo 'Date Posted'; ?></th>
</tr>
   
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["JobName"]; ?></td>
<td><?php echo $rows["JobDescription"]; ?></td>
<td><?php echo $rows["reg_date"]; ?></td>
</tr>
<?php
}
?>
</table>
<br>
<div class ="btn">
    <form action="JobAdd.html">
        <input type="Submit" value="Add Job">
</form>
<br>
<form action="JobDelete.html">
        <input type="Submit" value="Delete Job">
</form>
<br>
<form action="JobUpdate.html">
        <input type="Submit" value="Update Job">
</form>
</div>
</div>
</body>
</html>