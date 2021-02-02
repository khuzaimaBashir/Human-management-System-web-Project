<?php 
include "database.php";
/*
$sql = "INSERT INTO AdminLog (id, Username, Pass,AdminName)
VALUES ('AD101', 'Ali', 'admin', 'Ali Abbas');";
$sql .= "INSERT INTO AdminLog (id, Username, Pass, AdminName)
VALUES ('AD102', 'Ahmed', 'admin','Ahmed Amin');";
$sql .= "INSERT INTO AdminLog (id, Username, Pass,AdminName)
VALUES ('AD103', 'Aladin', 'admin','Aladin kamal');";
$sql .= "INSERT INTO AdminLog (id, Username, Pass,AdminName)
VALUES ('AD104', 'Akmal', 'admin','Akmal Kamran');";
if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$emp = "INSERT INTO EMPLog (id, Username, Pass,EMPNAME ,EMP_DESIGNATION)
VALUES ('EMP101', 'MKB', 'admin', 'KHUZAIMA','GM');";
$emp .= "INSERT INTO EMPLog (id, Username, Pass,EMPNAME ,EMP_DESIGNATION)
VALUES ('EMP102', 'MTT', 'admin', 'TARIQ','RGM');";
$emp .= "INSERT INTO EMPLog (id, Username, Pass,EMPNAME ,EMP_DESIGNATION)
VALUES ('EMP103', 'TA', 'admin', 'TALHA','RGM');";
$emp .= "INSERT INTO EMPLog (id, Username, Pass,EMPNAME ,EMP_DESIGNATION)
VALUES ('EMP104', 'TAY', 'admin', 'TAYYAB','RGM');";
if (mysqli_multi_query($conn, $emp)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $emp . "<br>" . mysqli_error($conn);
}

$JV = "INSERT INTO JOBVACANCY (JobName,JobDescription)
VALUES ('Janitor','Cleaning of offices');";
$JV .= "INSERT INTO JOBVACANCY (JobName,JobDescription)
VALUES ('Driver','Driving and Maintainence of cars');";
$JV .= "INSERT INTO JOBVACANCY (JobName,JobDescription)
VALUES ('CFO','Financial assitance');";
$JV .= "INSERT INTO JOBVACANCY (JobName,JobDescription)
VALUES ('Accounts','Maintainence of accounts');";

if (mysqli_multi_query($conn, $JV)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $JV . "<br>" . mysqli_error($conn);
}

$ts = "INSERT INTO TimeSheet (EMPid,LOGGED)
VALUES ('EMP101','LOG IN');";
$ts .= "INSERT INTO TimeSheet (EMPid,LOGGED)
VALUES ('EMP103','LOG IN');";
$ts .= "INSERT INTO TimeSheet (EMPid,LOGGED)
VALUES ('EMP104','LOG IN');";
$ts .= "INSERT INTO TimeSheet (EMPid,LOGGED)
VALUES ('EMP101','LOG OUT');";
$ts .= "INSERT INTO TimeSheet (EMPid,LOGGED)
VALUES ('EMP103','LOG out');";
$ts .= "INSERT INTO TimeSheet (EMPid,LOGGED)
VALUES ('EMP104','LOG out');";

if (mysqli_multi_query($conn, $ts)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $ts . "<br>" . mysqli_error($conn);
}

$ER = "INSERT INTO EmployeeReviews (EMPreview,EMPid)
VALUES ('JOB IS DIFFICULT','EMP101');";
$ER .= "INSERT INTO EmployeeReviews (EMPreview,EMPid)
VALUES ('JOB IS EASY','EMP102');";
$ER .= "INSERT INTO EmployeeReviews (EMPreview,EMPid)
VALUES ('JOB IS NOT RELAXING','EMP104');";
$ER .= "INSERT INTO EmployeeReviews (EMPreview,EMPid)
VALUES ('JOB IS NOT DIFFICULT','EMP103');";
if (mysqli_multi_query($conn, $ER)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $ER . "<br>" . mysqli_error($conn);
}

$AS  = "INSERT INTO ASSET (EMPid,ASSET)
VALUES ('EMP101' , 'I DONT KNOW WHAT IS THIS');";
$AS  .= "INSERT INTO ASSET (EMPid,ASSET)
VALUES ('EMP104' , 'I DONT KNOW WHAT IS THIS');";
$AS  .= "INSERT INTO ASSET (EMPid,ASSET)
VALUES ('EMP102' , 'I DONT KNOW WHAT IS THIS');";
$AS  .= "INSERT INTO ASSET (EMPid,ASSET)
VALUES ('EMP103' , 'I DONT KNOW WHAT IS THIS');";

if (mysqli_multi_query($conn, $AS)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $AS . "<br>" . mysqli_error($conn);
}

$task = "INSERT INTO Task (EMPid,Task)
VALUES ('EMP101' , 'ACHIEVE THE SALE TARGET');";
$task .= "INSERT INTO Task (EMPid,Task)
VALUES ('EMP102' , 'ACHIEVE THE SALE TARGET');";
$task .= "INSERT INTO Task (EMPid,Task)
VALUES ('EMP103' , 'ACHIEVE THE SALE TARGET');";
$task .= "INSERT INTO Task (EMPid,Task)
VALUES ('EMP104' , 'ACHIEVE THE SALE TARGET');";
if (mysqli_multi_query($conn, $task)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $task . "<br>" . mysqli_error($conn);
}

$app = "INSERT INTO Applications (EMPid,Vacancy,App_Status)
VALUES ('EMP101' , '1','Waiting');";
$app .= "INSERT INTO Applications (EMPid,Vacancy,App_Status)
VALUES ('EMP104' , '3','Approve');";
$app .= "INSERT INTO Applications (EMPid,Vacancy,App_Status)
VALUES ('EMP102' , '3','Rejected');";
$app .= "INSERT INTO Applications (EMPid,Vacancy,App_Status)
VALUES ('EMP103' , '2','Waiting');";

if (mysqli_multi_query($conn, $app)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $app . "<br>" . mysqli_error($conn);
}

$pay = "INSERT INTO Payroll (EMPid,Salary)
VALUES ('EMP103' , '20');";
$pay .= "INSERT INTO Payroll (EMPid,Salary)
VALUES ('EMP104' , '10');";
$pay .= "INSERT INTO Payroll (EMPid,Salary)
VALUES ('EMP102' , '5');";
$pay .= "INSERT INTO Payroll (EMPid,Salary)
VALUES ('EMP101' , '50');";
if (mysqli_multi_query($conn, $pay)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $pay . "<br>" . mysqli_error($conn);
}



$claim = "INSERT INTO Claim (EMPid,Query)
VALUES ('EMP103' , 'Well Last month my Gasoline bill was 12200 dollars which is to be covered by company but company didnt cover it');";
$claim .= "INSERT INTO Claim (EMPid,Query)
VALUES ('EMP101' , 'My tour expenditure were supposed to be covered by comapany kindly add them to my next salary . P.S the expenditure was 2000 dollars');";
$claim .= "INSERT INTO Claim (EMPid,Query)
VALUES ('EMP102' , 'My dues of gasoline worth 200Dollars need to be cleared');";
if (mysqli_multi_query($conn, $claim)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $claim . "<br>" . mysqli_error($conn);
}




$vacation = "INSERT INTO Vacations (Vacation_Date)
VALUES ('2000-12-02');";
$vacation .= "INSERT INTO Vacations (Vacation_Date)
VALUES ('2012-02-24');";
$vacation .= "INSERT INTO Vacations (Vacation_Date)
VALUES ('2001-02-24');";
$vacation .= "INSERT INTO Vacations (Vacation_Date)
VALUES ('2009-10-30');";
if (mysqli_multi_query($conn, $vacation)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $vacation . "<br>" . mysqli_error($conn);
}

$company = "INSERT INTO Company(Company_info)
VALUES ('This Company was established in 2019');";
$company .= "INSERT INTO Company(Company_info)
VALUES ('The Work done by this Company over last few year includes over thousand of projects');";
$company .= "INSERT INTO Company(Company_info)
VALUES ('The Most surprizing are it employee's Consisting over only 4 Employees who work hard to complete the projects');";
if (mysqli_multi_query($conn, $company)) {
    echo "New records created successfully <br>";
} else {
    echo "Error: " . $company . "<br>" . mysqli_error($conn);
}
*/