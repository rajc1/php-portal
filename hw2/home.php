<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<style>
   h1 {
      color: #ff9900;
    font-family: verdana;
    font-size: 400%;
   }
   h2{
    color: #7D89AE;
    font-family: verdana;
    font-size: medium;
    display: inline;
    padding-left:8em;
    align-content: center ;
   }
   h5{
    color: #ff9900;
    font-family: verdana;
    font-size: small;
   }
   body {
    
    color: #ff9900;
   }
   p.indent{ padding-left: 1.8em }
</style> 
</head>
<body  >
<center>
<div id="mainmenu">
 <?php if($_GET["username"] != ""){ ?>
  
<a href="logout.php" target="_self">Logout</a>
<?php } ?>
  
  
</ul></div></center>
<br>
<br>
<center>
<div id="part1"><ul>
  <h3>Home</h2>
  <hr>
  
  <?php

if($_GET["username"])
{
echo "<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>";
echo "<h1>Hi ,$_GET[username]</h1>";


}
else
{
echo "<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>";
echo "User name is not found!<br>";
echo "Please enter your username properly.<br>";
echo "<a href=\"login.php\">Login Page</a>";
}
?>
  </center>
</body>
</html>


