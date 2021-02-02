<?php
include("database.php"); 

?>
<DOCTYPE HTML PUBLIC>
<html>
<head>
<title> Human Resource Management System </title>
<link rel="stylesheet" type="text/css" href="index.css">
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1">
</head>


<body style="background-color:powderblue;">

        <div class="logo">
                <h1> Human Resource Management System</h1>
                <img src="logo.png" alt="LOGO" height="200 " width="300"; >
              </div>  
        <div>
                <table>
                        <tr>
                                <th> Group Members </th>
                                <th> Roll No </th>
</tr>
<tr>
<td> Muhammad Khuzaima Bashir</td>
<td>21-10361</td>
</tr>
<tr>
        <td>Faizan Azhar</td>
        <td>20-10654</td>
</tr>
<tr>
        <td>Muhammad Ezzan Khan</td>
        <td>20-10700</td>
</tr>
</div>
        
        <div class="account">
            <h1> Please Pick An Account Type</h1>
            <table>
                    <tr>
                            <th><img src="employee.png" alt="Employee" height="200  " width="250"; ></th>
                            <th class="admin"><img src="admin.png" alt="Admin" height="200  " width="250"; ></th>
                     </tr>
                     <tr>
                            <th class="btn"> <form name = "form1" action="EMPLogin.html" method="post">
                            <input type="submit" name="submit1" value="Employee">
                            </form></th>
                            <th class="btn"> <form name = "form1" action="login.html" method="post">
                            <input type="submit" name="submit1" value="Admin">
                            </form></th>


            </table>
        </div>
        
           

       
</body>