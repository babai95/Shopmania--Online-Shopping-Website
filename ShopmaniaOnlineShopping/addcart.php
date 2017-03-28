<?php
if(isset($_COOKIE['mycookie1']))
{
    //echo "old ".$_COOKIE['mycookie'];
    $_COOKIE['mycookie1']=$_COOKIE['mycookie1'].",".$_REQUEST['id'];
    setcookie("mycookie1",$_COOKIE['mycookie1']);
  //  echo "latest ".$_COOKIE['mycookie'];
}
else
{
    setcookie("mycookie1",$_REQUEST['id']);
   // echo "first ".$_COOKIE['mycookie'];
}
header("location:product3.php");

?>