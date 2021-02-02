<?php 
session_start();
include("database.php");
include("sidebar.php");
$query= "select * from EMPLog";
$result=mysqli_query($conn,$query);
 ?>
<DOCTYPE html>
    <html>
        <head>
            <title>CompanyPage</title>
            <link rel='stylesheet' href='btn.css'>
</head>
<body>
<div>
<table class="btn" class="tabledisplay">
    <tr>
    <th colspan="3"><h2>Current Employees </h2></th>
    </tr>
    <tr>
    <th><?php echo 'EMP Id'; ?></th>
<th><?php echo 'EMP Name'; ?></th>
<th><?php echo 'EMP Designation'; ?></th>

</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["EMPNAME"]; ?></td>
<td><?php echo $rows["EMP_DESIGNATION"]; ?></td>
</tr>
<?php
}
?>
</table>
</div>
<br>

    <div class="btn">
        <form action="EMPCreate.html">
    <button type='submit'>Add Employees </button>
    </form>
</div>
<br>
<div class="btn">
<form action="EMPDelete.html">
    <button type='submit'>Delete Employees </button>
    </form>
<br>
<form action="EMPUpdate.html">
    <button type='submit'>Update Employees </button>
    </form>
</div>
</body>
</html>