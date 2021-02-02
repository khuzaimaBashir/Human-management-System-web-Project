<?php
session_start();
include("database.php");
include("sidebar.php");
$query= "select * from Company";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<head>
<link rel='stylesheet' href='btn.css'>
</head>
<body>
<table class="btn">
    <tr>
    <th colspan="1"><h2>Company Information </h2></th>
    </tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["Company_info"]; ?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>