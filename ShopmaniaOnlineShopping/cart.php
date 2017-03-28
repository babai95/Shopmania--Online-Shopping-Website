<?php
include './blogic.php';
if(isset($_COOKIE['mycookie1']))
{
    //echo $_COOKIE['mycookie'];
$res=  executeQuery("select * from product where product_id in ($_COOKIE[mycookie1])");
if(mysql_affected_rows()>0)
{
    while($r=  mysql_fetch_assoc($res))
    {
          echo "<table width='25%'>";
                                      echo "<tr>";
                                      echo "<td valign='top'><a href=''><img src=$r[product_image] width='150' height='150'></a></td>"; 
                                      echo "</tr>";
                                      echo "<tr>";
                                      echo "<td>Name: $r[product_name]</td>"; 
                                      echo "</tr>";
                                      echo "<tr>";
                                      echo "<td>Price: $r[product_price]</td>"; 
                                      echo "</tr>";
                                      echo "</table>";
    }
}
}
else
{
    echo "No Product Found";
}
?>