<?php
include'./blogic.php';
$res=  ExecuteQuery("select * from state where country_id=$_REQUEST[sid]");
while($r=  mysql_fetch_array($res))
{
    echo "<option value=$r[0]>$r[2]</option>";
       
}
?>

