<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td colspan='3' align='center'> Welcome To Shopmania</td>
            </tr>
            <tr>
                <td colspan='3' align='center'>Products</td>
            </tr>
            <tr>
                <td>
              <?php
              $flag=0;
              include('./blogic.php');
              $res= executeQuery("select * from product");
              echo "<center>";
              echo "<form>";
               if(mysql_affected_rows()>0)
                                {
                                 echo "<table>";
                                 echo "<tr>";
                                  while($r=  mysql_fetch_assoc($res))
                                  {
                                       $flag++;
                                       if($flag<=3)
                                       {
                                            echo "<td>";
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
                                      echo "<tr>";
                                      echo "<td>";
                                      echo "<a href='addcart.php?id=$r[product_id]'><input type='button' name='cart' value='Add To cart'/></a>";
                                      echo "</td>";
                                      echo "</tr>";
                                      echo "</table>";
                                      echo "</td>";
                                  }
                                }
                                echo "</tr>";
                                echo "</table>";
                              
                                }
                                echo "</center>";
                                $flag=0;
                                  $res= executeQuery("select * from product");
                                   if(mysql_affected_rows()>0)
                                 {
                                 echo "<center>";
                                 echo "<table>";
                                 echo "<table>";
                                 echo "<tr>";
                                  while($r=  mysql_fetch_assoc($res))
                                  {
                                                                                 echo "<td>";
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
                                      echo "<tr>";
                                      echo "<td>";
                                      echo "<a href='addcart.php?id=$r[product_id]'><input type='button' name='cart' value='Add To cart'></a>";
                                      echo "</td>";
                                      echo "</tr>";
                                      echo "</table>";
                                      echo "</td>";
                                  
                                }
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td colspan=3 align='center'><input type='submit' name='sub' value='View Cart'></td>";
                                echo "</tr>";
                                echo "</table>";
                                echo "</form>";
                                echo "</center>";
                                 }
                                 if(isset($_REQUEST['sub']))
                                 {
                                     header("location:cart.php");
                                 }
              ?>
                </td>
            </tr>
        </table>
    </body>
</html>
