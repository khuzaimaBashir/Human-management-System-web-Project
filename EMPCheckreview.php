<?php 
session_start();
include ("database.php");
include ("EMPsidebar.php");
$id= $_SESSION['rainbow_uid'];
$query= "select * from EmployeeReviews WHERE EMPid =  '$id'";  //After where empid add $_variable for server side use
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <title>
        Fetch Data From Database
    </title>
<body>
    <link rel="stylesheet" href="btn.css">
<div class = "btn">
<table  class="displayTable">
    <tr>
    <th colspan="3"><h2>Employees Reviews Log </h2></th>
    </tr>
<tr>
    <th>id </th>
    <th> EMP ID </th>
    <th>Reviews </th>
    <th> Posted On </th>
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["EMPreview"] ?>
<td><?php echo $rows["reg_date"]; ?></td>

</tr>
<?php
}
?>
</table>
<div>
    <form action="AddReview.html">
        <input type="submit" value="Add Review">
</form>
</div>
</div>
</body>
</html>