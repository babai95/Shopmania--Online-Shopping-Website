<?php
session_start();
$msg="";
if(isset($_REQUEST['text4']))
{
include './blogic.php';
$res=executeQuery("select * from student where email='$_REQUEST[text1]' and pass='$_REQUEST[text2]'");
if(mysql_affected_rows()>0)
{
    $r=  mysql_fetch_array($res);
    $_SESSION['id']=$r['id'];
    $_SESSION['name']=$r['f_name'];
    
}
else
{
    $msg="<font colour=red>invalid username and password</font>";
}

}
?>
<?php
if(isset($SESSION['rem']))
{
    setcookie("uid",$_REQUEST['text1'],time()+60);
    setcookie("pwd",$_REQUEST['text2'],time()+60);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="Style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>   
    <table width="100%">
        <tr>
            <td valign="top">
                <table width="100%">
                    <tr>
                        <td valign="top">
                          <?php 
                          include("./header.php");
                        ?>
                        </td>
                    </tr>
                </table>
                <table width="100%" border="1">
                    <tr>
                        <td style="background-image: url(''); " width='25%' valign='top'>
                        </td>
                        <td valign='top'>
                            <form>
    <table width="100%" align="center" >
    <h2 align="center">Login Form For User</h2>
       <tr>
           <td valign='top'>
               Your Email
               
           </td>
           <td width="30%" valign='top'>
               <input class="mystyle1" type="text" name="text1" value="<?php
               if(isset($_COOKIE['uid']))
               {
                   echo $_COOKIE['uid'];
               }
               ?>"/>
           </td>
           <td width="30%" valign='top'>
           </td>
       <tr>
           <td valign='top'>
               Password
           </td>
           <td width="30%" valign='top'>
               <input class="mystyle1" type="password" name="text2" value="<?php 
               if(isset($_COOKIE['pwd']))
               {
                   echo $_COOKIE['pwd'];
               }?>"/>
           </td>
           <td valign='top'>
           </td>
       </tr>
       <tr>
           <td width="30%" valign='top'>
                <input class="mystyle1" type=reset name="text3" value="RESET"/>
           </td>
           <td width="30%" valign='top'>
               <input class="mystyle1" type="submit" name="text4" value="SUBMIT"/>
               
</td>
           <td  valign='top'>
           </td>
       </tr>
       <tr>
           <td>
               <input type="checkbox" name="rem"/>Remember Me 
           </td>
           <td>
           </td>
           <td></td>
       </tr>
       <tr>
			<td colspan=3>
			<?php if(isset($_REQUEST['text4']))
				echo $msg;
			?>
			</td>
			</tr>
    
   </table>
                            </form>
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