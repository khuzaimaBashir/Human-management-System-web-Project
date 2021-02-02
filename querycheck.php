<?php 
include ("database.php");
$query= "select * from Claim";  //After where empid add $_variable for server side use
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
    <th colspan="4"><h2>Claim and Query table </h2></th>
    </tr>
<tr>
    <th> EMP ID </th>
    <th>Query</th>
    
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["Query"]; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>