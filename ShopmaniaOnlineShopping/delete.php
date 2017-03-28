<?php
session_start();
$h=@mysql_connect("localhost","root","")or die('Error in Connecting the Database');
mysql_select_db("online_shop");
mysql_query("delete from student where stu_id=$_SESSION[id]");
header("location:showrecord.php");
?>

