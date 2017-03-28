<?php
session_start();
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
    <body style="background-image: url('images/bg1.jpg')">
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
                            <td style="background-image: url('images/top-rept.jpg'); " width='25%' valign='top'>
                                <?php include("./right.php"); ?>
                             </td>
                             <td valign='top'>
                                 <?php
                                    include './blogic.php';
                                    $res="";
                                    if(isset($_REQUEST['id']))
                                    {
                                        $x=$_REQUEST['id'];
                                        if($x==1)
                                            $res=ExecuteQuery("select * from product where product_type='laptops'");
                                        if($x==3)
                                            $res=ExecuteQuery("select * from product where product_type='watch'");
                                        
                                    }
                                    else
                                        $res=ExecuteQuery("select * from product");
                                    if(mysql_affected_rows()>0)
                                    {
                                        while($r=  mysql_fetch_assoc($res))
                                        {
                                            echo "<table width='25%'>";
                                            echo "<tr>";
                                            echo "<td valign=top><a href='desc.php?id=$r[product_id]'><img src=$r[product_image] width=150 height=150 /></a></td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                            echo "<td>Name  : $r[product_name]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                            echo "<td>Price : $r[product_price]</td>";
                                            echo "</tr>";
                                            echo "</table>";
                                        }
                                    }
                                    else 
                                    {
                                        echo "<h2>No Product</h2>";
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
