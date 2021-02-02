<?php
include ("database.php");
include ("sidebar.php");
$id = $_POST['id'];
$s = $_POST['salary'];
$b = $_POST['bonus'];
$d = $_POST['dues'];
if (($b && $d)!=''){
$pay = "INSERT INTO Payroll (EMPid,Salary,Bonus,Dues)
VALUES ('$id' , '$s' , '$b','$d');";
mysqli_multi_query($conn, $pay);}
elseif ( $b == '' && $d != ''){
    $pay = "INSERT INTO Payroll (EMPid,Salary,Dues)
    VALUES ('$id' , '$s' ,'$d');";
    mysqli_multi_query($conn, $pay);
}
elseif ( $d == '' && $b != ''){
    $pay = "INSERT INTO Payroll (EMPid,Salary,Bonus)
    VALUES ('$id' , '$s' , '$b');";
    mysqli_multi_query($conn, $pay);
}
else{
    
        $pay = "INSERT INTO Payroll (EMPid,Salary)
        VALUES ('$id' , '$s' );";
        mysqli_multi_query($conn, $pay);
    }

header('Location:AdminSalaryCheck.php');
?>
