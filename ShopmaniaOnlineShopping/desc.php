<?php
include'./blogic.php';
$res="";
                                if(isset($_REQUEST['id']))
                                {
                                    $x=$_REQUEST['id'];
                                    if($x==1)
                                    {
                                         $res=ExecuteQuery("select * from product where product_type='watch'");
                                       $r=  mysql_fetch_assoc($res);
                                       echo"<table width='25%'>";
                                         echo "<tr>";
                                          echo "<td valign=top><img src=$r[product_image] width=150 height=150></td>";
                                        echo"<h1>The Ultimate Watch</h1>";
                                        echo"<p>this is rolex 3700 series</p>";
                                    }
                                    
                                           
                                                
                                      if($x==2)
                                      {
                                      $res=ExecuteQuery("select * from product where product_type='laptops'");
                                       $r=  mysql_fetch_assoc($res);
                                       echo"<table width='25%'>";
                                         echo "<tr>";
                                          echo "<td valign=top><img src=$r[product_image] width=150 height=150></td>";
                                        echo"<h1>The Ultimate laptop</h1>";
                                        echo"<p>this is dell 3700 series</p>";
                                    
                                    
                                }
                                }
?>
