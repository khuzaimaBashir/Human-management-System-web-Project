<?php 
include ("database.php");
include ("sidebar.php");
session_start();
$query= "select * from Task";  //After where empid add $_variable for server side use
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <title>
        Fetch Data From Database
    </title>
<body>
<link rel="stylesheet" href="btn.css">
<div >
<table class="btn" >
    <tr>
    <th colspan="4"><h2>Employees Task Assigned </h2></th>
    </tr>
<tr>
    <th>id </th>
    <th> EMP ID </th>
    <th> Task Assigning Date and Time </th>
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
<div class="btn">
        <form action="AssignTask.html">
    <button type='submit'>Add Task </button>
    </form>
</div>
<br>
<div class="btn">
<form action="TaskDelete.html">
    <button type='submit'>Delete Task </button>
    </form>
<br>
    <form action="TaskUpdate.html">
    <button type='submit'>Update Task </button>
    </form>
</div>
</div>
</body>
</html>