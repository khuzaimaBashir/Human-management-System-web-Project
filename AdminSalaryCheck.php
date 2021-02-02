<?php 
include ("database.php");
include ("sidebar.php");
session_start();
$query= "select * from Payroll";  //After where empid add $_variable for server side use
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
<table  class="displayTable">
    <tr>
    <th colspan="4"><h2>Employee Salary </h2></th>
    </tr>
<tr>
    <th> EMP ID </th>
    <th>Salary</th>
    <th>Dues</th>
    <th>Bonus</th>
</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["Salary"]; ?></td>
<td><?php echo $rows["Dues"]; ?></td>
<td><?php echo $rows["Bonus"]; ?></td>
</tr>
<?php
}
?>
</table>
<br>
<div>
        <form action="AddSalary.html">
    <button type='submit'>Add Salary </button>
    </form>
</div>
<br>
<div>
<form action="DeleteSalary.html">
    <button type='submit'>Delete Salary </button>
    </form>
</div>
<div>
<form action="SalaryUpdate.html">
    <button type='submit'>Update All </button>
    </form>
</div>
</body>
</html>