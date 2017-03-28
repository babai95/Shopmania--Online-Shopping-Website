<?php
session_start();
$msg="";
    if(isset($_REQUEST['login']))
    {
        include './blogic.php';
        $res=ExecuteQuery("select * from student where"
. " stu_email='$_REQUEST[txt_username]' and stu_pwd='$_REQUEST[txt_password]'");
        if(mysql_affected_rows()>0)
        {
            $r= mysql_fetch_assoc($res);
            $_SESSION['id']=$r['stu_id'];
            $_SESSION['name']=$r['stu_name'];
            if($_REQUEST['rem'])
            {
                setcookie("uid",$_REQUEST['txt_username'],time()+60);
                setcookie("pwd",$_REQUEST['txt_password'],time()+60);
            }
            header("location:front.php");
            
        }
        else 
        {
            $msg="<font color=red>Invalid Username and Password...</font>";
        }
    }
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
        <form method="post">
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
                                    <table width="60%">
                        <caption><h1>User Login</h1></caption>
                        <tr><td colspan="2"><?php echo $msg; ?></td></tr>
                        <tr><td colspan="3"></td></tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" id="uid" class="mystye" name="txt_username" value="<?php if(isset($_COOKIE['uid'])) echo $_COOKIE['uid']; ?>" /></td>
                            <td><div id="txtuid" style="color:red"></div></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="pwd" class="mystye" name="txt_password" value="<?php if(isset($_COOKIE['pwd'])) echo $_COOKIE['pwd']; ?>" /></td>
                            <td><div id="txtpwd" style="color:red"></div></td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="checkbox" name="rem" value="ON" />Remember Me.</td>
                          
                        </tr>
                        <tr>
                            <td></td>
                          
                            <td colspan="2"><input id="aa" type="submit" value="Login" name="login" /></td>
                        </tr>
                    </table>
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
            </form>
    </body>
</html>
