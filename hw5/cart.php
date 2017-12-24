<?php
session_start();
include("pdo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cart</title>
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

<a href="products.php">Products</a><br/><br/><br/>

<?php } 
  

if(isset($_COOKIE["cart"]))
{
$result = json_decode($_COOKIE["cart"], true);
$sql = "SELECT * FROM products";
$resultQuery = $pdo->query($sql);
	
echo "<table border='6' align='center'>";
echo "<th>Product Name</th><th>Quantity</th><th>Price</th>";

$i=1;
$totalcost =0;
while($row=$resultQuery->fetch())
{
	
if(!isset($result[$i])){
$result[$i] = 0;
}
echo "<tr><td>".$row['name']."</td> <td>".$result[$i]."</td><td> $".$result[$i]*$row['price']."</td></tr>";
$totalcost = $totalcost+$result[$i]*$row['price'];
$i++;

}

echo "<tr><td></td><td>Total</td><td> $".$totalcost."</td></tr>";
echo "</table>";
	
}
else
{
	echo "cart is empty";
}

?>

</body>
</html>