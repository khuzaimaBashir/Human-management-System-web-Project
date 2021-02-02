<?php
session_start();
include('sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
    <title> Home </title>
    <link rel='stylesheet' href='body.css'>
    <link rel='stylesheet' href='btn.css'>
</head>
<body>
    <div class="btn">
    <?php echo "Welcome  " .$_SESSION['rainbow_name']; ?>
    </div>
</body>
</html>
