<?php
session_start();
include('database.php');
// Create connection
$error = '';

$username =  mysqli_real_escape_string($conn,trim($_GET['username']));
$password =  mysqli_real_escape_string($conn,$_GET['password']);
$result= mysqli_query($conn,"SELECT * from AdminLog WHERE Username = '$username' and Pass = '$password' ");
$row = mysqli_fetch_assoc($result);
if($username == '' && $ $password == ''){
    header('Location: WrongLogin.html');
}
elseif ($row['Username'] == $username && $row['Pass'] == $password){
    $_SESSION['rainbow_username']=$row['Username'];
    $_SESSION['rainbow_uid']=$row['id'];
    $_SESSION['rainbow_name']=$row['AdminName'];
    header('Location: home.php'); }//intead of this link of next page

else {
    header('Location: WrongLogin.html');//use this error in html for display rather than showing a blank page
}

?>
