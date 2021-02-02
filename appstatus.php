<?php 
include ("database.php");
$query= "select * from Applications";  //After where empid add $_variable for server side use
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
    <th colspan="3"><h2>Application Status </h2></th>
    </tr>
<tr>
    <th>id </th>
    <th> EMP ID </th>
    <th> Vacancy </th>
    <th> Application Status>
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
</body>
</html>