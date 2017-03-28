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
    </head>
    <body>
        <form>
        <input type="submit" name="show" value="SHOW"/>
        <input type="submit" name="showc" value="SHOWCOURSE"/>
        
        <?php
        // put your code here
                              include './blogic.php';
                                $res="";
                                $res1="";
                                 $res=ExecuteQuery("select * from location");
                                 $res1=  ExecuteQuery("select * from course where l_id=");
                                  echo" <select> "; 
                                 echo" <option>Select location</option>";
                                 if(isset($_GET['show']))
                                 {
                                  if(mysql_affected_rows()>0)
                                  {
                                while( $r=  mysql_fetch_assoc($res))
                                {
                                  echo"<option>$r[l_name]</option>";
                                }
                          
                        echo"</select>";
                                  }
          }
          echo"<br>";
          echo" <select> "; 
                                 echo" <option>Select course</option>";
                                 if(isset($_GET['showc']))
                                 {
                                  if(mysql_affected_rows()>0)
                                  {
                                while( $r=  mysql_fetch_assoc($res1))
                                {
                                  echo"<option>$r[c_name]</option>";
                                }
                          
                        echo"</select>";
                                  }
          }
          
          
       ?> 
        </form>
    </body>
</html>
