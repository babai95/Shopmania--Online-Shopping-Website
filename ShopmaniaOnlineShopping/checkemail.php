<?php
include'./blogic.php';
ExecuteQuery("select * from student where stu_email='$_REQUEST[eid]'");
if(mysql_affected_rows()>0)
    echo "not available";
else 
 echo "exist";   




?>