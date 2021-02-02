<?php 
include ("database.php");
session_start();
$id= $_SESSION['rainbow_EMPid'];
$query= "select * from ASSET WHERE EMPid =  '$id'";  //After where empid add $_variable for server side use
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
    <th colspan="2"><h2>Interview Status </h2></th>
    </tr>
<tr>
    <th>Employee id </th>
    <th>Asset </th>
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["ASSET"]; ?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>