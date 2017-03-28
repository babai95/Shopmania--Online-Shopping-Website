<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
include './blogic.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="menu.css" rel="stylesheet" type="text/css"/>
        <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li {
    display: inline;
}
</style>
<script src='imageslide.js'></script>
    </head>
    <body onload="startTimer()">
        <ul class="ul1">
                
             
                <li class='li1'> <a align="center" id='menu' href='product2.php'>products</a></li>
                 
           </ul>
       
    
    </body>
</html>

  