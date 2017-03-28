<?php
include("db.php");
$h="";
    function OpenConnection()
    {
        global $h;
        $h=mysql_connect(SERVER,USERNAME,PASSWORD);
        mysql_select_db(DATABASE);
    }
    function CloseConnection()
    {
      global $h;
      mysql_close($h);
    }
    function executeNonQuery($query) //insert update and delete
    {
        OpenConnection();
        mysql_query($query);
        return mysql_affected_rows();
        CloseConnection();
    }
    function executeQuery($query) //select
    {
        OpenConnection();
        $res=mysql_query($query);
        return $res;
        CloseConnection();  
    }
?>
