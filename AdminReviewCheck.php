<?php 
include ("database.php");
include ("sidebar.php");
session_start();
$query= "select * from EmployeeReviews";  //After where empid add $_variable for server side use
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
    <th colspan="3"><h2>Employees Reviews </h2></th>
    </tr>
<tr>
    <th>id </th>
    <th> EMP ID </th>
    <th> Reviews </th>
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["EMPreview"]; ?></td>


</tr>
<?php
}
?>
</table>
</body>
</html>