<?php
session_start();
unset($_SESSION['rainbow_name']);
unset($_SESSION['rainbow_uid']);
unset($_SESSION['rainbow_username']);
header('Location:index.php');
// Add the main page where u select to select u are admin or employee
?>