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
                
                <li class='li1'> <a align="center" id='menu' href='front.php'>Home</a></li>
                <li class='li2'> <?php if(isset($_SESSION['id'])) echo"<a id='menu' href='logout.php'>logout</a>";else echo"<a id='menu' href='login.php'>login</a>";?></li>
                <li class='li1'> <a align="center" id='menu' href='product.php'>products</a></li>
                 <li class='li1'> <a align="center" id='menu' href='contact.php'>contact us</a></li>
                 <li class='li1'> <a align="center" id='menu' href='showrecord.php'>showrecord</a></li>
                  <li class='li1'> <a align="center" id='menu' href='product3.php'>Add to Cart</a></li>
                  <li class='li2'> <?php if(isset($_SESSION['id'])) echo"<a id='menu' href='buy.php'>buy</a>"; ?></li>
                  
           </ul>
        <br>
        <br>
        <br>
    
      <table width='100%'>
    <tr>
        <td valign="top">
             <h1 style="color: black;text-align: center">SHOPMANIA</h1>
    <marquee><h2> shop online, buy online, live online</h2> </marquee>
              <h2>welcome <?php if(isset($_SESSION['id'])) echo $_SESSION['name']; else echo"guest"?></h2>
            
              <img id="img" src="images/banner1.jpg" width="100%" height="400">



           
           
           
        </td>
    </tr>
    
</table>
    </body>
</html>

  