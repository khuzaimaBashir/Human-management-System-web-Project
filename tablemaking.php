<?php
include "database.php";
/*
$sql = "CREATE TABLE AdminLog (
id NVARCHAR(10)  PRIMARY KEY,
Username NVARCHAR(50) NOT NULL,
Pass NVARCHAR(50) NOT NULL,
AdminName NVARCHAR(99) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table AdminLogin created successfully";
} else {
    echo "Error creating AdminLogin table: " . mysqli_error($conn);
}
$sqll = "CREATE TABLE EMPLog (
id NVARCHAR(10) PRIMARY KEY,
Username NVARCHAR(50) NOT NULL,
Pass NVARCHAR(50) NOT NULL,
EMPNAME NVARCHAR(99) NOT NULL,
EMP_DESIGNATION NVARCHAR(99) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sqll)) {
    echo "Table EMPLogin created successfully";
} else {
    echo "Error creating EMPLogin table: " . mysqli_error($conn);
}
$sqlll = "CREATE TABLE JOBVACANCY (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    JobName VARCHAR(50) NOT NULL,
    JobDescription VARCHAR(999) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sqlll)) {
        echo "Table JOBVACANCY created successfully";
    } else {
        echo "Error creating JOBVACANCY table: " . mysqli_error($conn);
    }
$sqllll = "CREATE TABLE TimeSheet (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        EMPid NVARCHAR(10) NOT NULL,
        foreign key(EMPid) references EMPLog(id),  /*set foreign key 
        Logged NVARCHAR(99) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
        if (mysqli_query($conn, $sqllll)) {
            echo "Table TimeSheet created successfully";
        } else {
            echo "Error creating TimeSheet table: " . mysqli_error($conn);
        }

$sqlllll = "CREATE TABLE EmployeeReviews (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            EMPreview NVARCHAR(999) NOT NULL,
            EMPid NVARCHAR(10) NOT NULL,
            foreign key(EMPid) references EMPLog(id), /*set foreign key 
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            
            if (mysqli_query($conn, $sqlllll)) {
                echo "Table EmployeeReview created successfully";
            } else {
                echo "Error creating EmployeeReview table: " . mysqli_error($conn);
            }

$asset = "CREATE TABLE ASSET(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        EMPid NVARCHAR(10) NOT NULL,
        foreign key(EMPid) references EMPLog(id), /*set foreign key 
        ASSET NVARCHAR(99) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
        if (mysqli_query($conn, $asset)) {
            echo "Table Asset created successfully";
        } else {
            echo "Error creating Asset table: " . mysqli_error($conn);
        }

$task = "CREATE TABLE Task(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        EMPid NVARCHAR(10) NOT NULL,
        foreign key(EMPid) references EMPLog(id), /*set foreign key 
        Task NVARCHAR(999) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            if (mysqli_query($conn, $task)) {
                echo "Table Task created successfully";
            } else {
                echo "Error creating Task table: " . mysqli_error($conn);
            } 
$apply = "CREATE TABLE Applications(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    EMPid NVARCHAR(10) NOT NULL,
    foreign key(EMPid) references EMPLog(id), /*set foreign key 
    Vacancy INT(6) NOT NULL,
    foreign key(Vacancy) references JOBVACANCY(id),
    App_Status NVARCHAR(999) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
        if (mysqli_query($conn, $apply)) {
            echo "Table Task created successfully";
        } else {
            echo "Error creating Task table: " . mysqli_error($conn);}

 
$Payroll = "CREATE TABLE Payroll(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    EMPid NVARCHAR(10) NOT NULL,
    foreign key(EMPid) references EMPLog(id), /*set foreign key 
    Salary NVARCHAR(999) NOT NULL,
    Dues NVARCHAR(999),
    Bonus NVARCHAR(999),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    if (mysqli_query($conn, $Payroll)) {
        echo "Table Payroll created successfully";
    } else {
        echo "Error creating Payroll table: " . mysqli_error($conn);}

$Claim =  "CREATE TABLE Claim(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    EMPid NVARCHAR(10) NOT NULL,
    foreign key(EMPid) references EMPLog(id), /*set foreign key 
    Query NVARCHAR(999) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    if (mysqli_query($conn, $Claim)) {
        echo "Table Claim created successfully";
    } else {
        echo "Error creating Claim table: " . mysqli_error($conn);}

$Vacation = "CREATE TABLE Vacations(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Vacation_Date DATE NOT NULL ,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    if (mysqli_query($conn, $Vacation)) {
        echo "Table Vacation created successfully";
    } else {
        echo "Error creating Vacation table: " . mysqli_error($conn);}

$Company = "CREATE TABLE COMPANY(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Company_info NVARCHAR(999),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $Company)) {
    echo "Table Vacation created successfully";
} else {
    echo "Error creating Vacation table: " . mysqli_error($conn);}
*/

