<?php
session_start();
include("database.php");
include("sidebar.php");
$query= "select * from Applications";
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
    <th colspan="4"><h2>Current Applications </h2></th>
    </tr>
    <tr>
    <th><?php echo 'Id'; ?></th>
<th><?php echo 'Eomployee Id'; ?></th>
<th><?php echo 'Job Vacancy ID'; ?></th>
<th><?php echo 'Application Status'; ?></th>
<th><?php echo 'Date Posted'; ?></th>
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
<td><?php echo $rows["reg_date"]; ?></td>
</tr>
<?php
}
?>
</table>
<br>
<div class ="btn">
    <form action="Accept.php" method="POST">
    <p>Enter EMP Id of Application to Accept</p>
    <input type="text" name="Accept">
        <input type="Submit" value="Accept Application">
</form>
<br>
<form action="Reject.php" method="POST">
<p>Enter EMPId of Application to Reject</p>
<input type="text" name="Reject"> 
        <input type="Submit" value="Reject Application">
</form>
<br>
<form action="AI.php" method="POST">
<p>Enter EMP Id of Application to change to Awaiting Interview</p>
<input type="text" name="AI">
        <input type="Submit" value="Update Job">
</form>
</div>
</div>
</body>
</html>