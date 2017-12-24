<?php
session_start();
include("price_class.php");
include("pdo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Products</title>
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
 <?php if($_SESSION["username"] != ""){ ?>
  
<a href="logout.php" tarSESSION="_self">Logout</a>
<?php } ?>
    
<center>
<div id="part1">
  
<?php
if(!isset($_SESSION["username"])){
		$_SESSION["username"] = "";
}
if($_SESSION["username"] != ""){ ?>

<a href="home.php">Main Page</a>

<?php } ?>
  

<?php
if($_SESSION["username"])
{
$sql = "SELECT * FROM products";
$result = $pdo->query($sql);

$leastPrice = new LeastPrice();

while($row=$result->fetch())
{
$leastPrice->id=$row['id'];
$leastPrice->name=$row['name'];
$leastPrice->logo=$row['logo'];
$leastPrice->noOfQty=$row['noOfQty'];
$leastPrice->price=$row['price'];
display($leastPrice);

}

}
else
{
echo "User name is not found!<br>";
echo "Please enter your username properly.<br>";
echo "<a href=\"login.php\">Login Page</a>";
}

function display($leastPrice)
{

echo "<form method='post'><table border='4'><tr><td>". $leastPrice->name."</td>";
echo "<td><img src='".$leastPrice->logo."' width='175' height='200' /></td>";
echo "<td><input type='text' name='noOfQty' value='$leastPrice->noOfQty'></td>";
echo "<td>".$leastPrice->price."</td>";
echo "<input type='hidden' name='hid' value='$leastPrice->id'>";
echo "<td><input type='submit' name='Buy' value='Buy'></td></tr></table></form>";

}
if(isset($_POST['Buy']))
{
	
	if(isset($_COOKIE["cart"]))
	{
			
			$result = json_decode($_COOKIE["cart"], true);
			
			$result[$_POST['hid']]=$_POST['noOfQty'];
			setcookie("cart",json_encode($result),time()+60*30);
			header("Location:cart.php");
	}
	else
	{
			$item_array=array(
			$_POST['hid']=>$_POST['noOfQty']);
			setcookie("cart",json_encode($item_array),time()+60*30);
			header("Location:cart.php");
			
	}
	
}
?>
</body>
</html>
