<?php 
include ("database.php");
include ("sidebar.php");
$query= "select * from Vacations";  //After where empid add $_variable for server side use
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <title>
        Fetch Data From Database
    </title>
<body>
    <link rel="stylesheet" href="btn.css">
<div class="btn">
<table class="displayTable">
    <tr>
    <th colspan="2"><h2>Vacation Check </h2></th>
    </tr>
<tr>
    <th> id </th>
    <th>Vacations</th>
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["Vacation_Date"]; ?></td>

</tr>
<?php
}
?>
</table>
<div class="btn">
        <form action="AddVacation.html">
    <button type='submit'>Add Vacation </button>
    </form>
</div>
<br>
<div class="btn">
<form action="DeleteVacations.html">
    <button type='submit'>Delete Vacation </button>
    </form>
</div>
</div>
</body>
</html>