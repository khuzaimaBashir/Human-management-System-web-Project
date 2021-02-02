<?php 
include ("database.php");
$query= "select * from JOBVACANCY";  //After where empid add $_variable for server side use
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <title>
        Fetch Data From Database
    </title>
<body>

<table class="displayTable">
    <tr>
    <th colspan="3"><h2>Employees TimeSheet Log </h2></th>
    </tr>
<tr>
    <th>id </th>
    <th> JOB NAME </th>
    <th>JOB DESCRIPTION </th>
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["JobName"]; ?></td>
<td><?php echo $rows["JobDescription"]; ?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>