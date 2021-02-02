<?php 
session_start();
include("database.php");
include("sidebar.php");
$query= "select * from ASSET";
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
    <th colspan="4"><h2>Current Given Assets </h2></th>
    </tr>
    <tr>
    <th><?php echo 'Id'; ?></th>
    <th><?php echo 'EMP Id'; ?></th>
<th><?php echo 'EMP Assets'; ?></th>

</tr>

<tr>
<?php
while($rows=mysqli_fetch_assoc($result)){
?>
<td><?php echo $rows["id"]; ?></td>
<td><?php echo $rows["EMPid"]; ?></td>
<td><?php echo $rows["ASSET"]; ?></td>
</tr>
<?php
}
?>
</table>
</div>
<br>

    <div class="btn">
        <form action="Assignasset.html">
    <button type='submit'>Add Asset </button>
    </form>
</div>
<br>
<div class="btn">
<form action="AssetDelete.html">
    <button type='submit'>Delete Asset </button>
    </form>
    <br>
    <form action="AssetUpdate.html">
    <button type='submit'>Update Asset </button>
    </form>
</div>
</body>
</html>