<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
include './blogic.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <table width='100%'>
            <tr>
                <td valign='top'>
                    <table width='100%'>
                        <tr>
                            <td valign='top'>
                                <?php include("./header.php"); ?>
                            </td>
                        </tr>
                    </table>
                    <table border='1' width='100%' >
                        <tr>
                             <td valign='top'>
                                 <?php
                                 
                                 $res=  ExecuteQuery("select * from student where stu_id=$_SESSION[id]");
                                if(mysql_affected_rows()>0)
                                {
                                    echo "<table width='100%' border='1'>";
                                    echo "<tr><th>ID</th><th>Name</th><th>Father Name</th><th>Email</th><th>DOB</th><th>Gender</th><th>Mobile</th><th>Address</th><th>College</th><th>Course</th><th>university</th> <th>Delete</th><th></th></tr>";
                                    while($row=  mysql_fetch_array($res))
                                    {
                                        echo "<tr>";
                                        echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[5]</td><td>$row[4]</td><td>$row[6]</td><td>$row[8]</td><td>$row[11]</td><td>$row[12]</td><td>$row[9]</td> <td><a href='delete.php'>Delete</a></td><td><a href='register.php'>Edit</a></td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                }
                                else
                                {
                                    echo "<h3>No record Found...</h3>";
                                }
                                 ?>
                             </td>
                        </tr>
                    </table>
                    <table width='100%'>
                        <tr>
                            <td valign='top'>
                    <?php include("./footer.php"); ?>
                            </td>
                        </tr>
                </table>
                </td>
            </tr>
        </table>
    </body>
</html>


