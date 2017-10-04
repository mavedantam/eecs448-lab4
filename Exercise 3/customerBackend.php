<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
$user = $_POST["name"];
$password = $_POST["password"];
$cupcakes = $_POST["cupcakes"];
$cookies = $_POST["cookies"];
$brownies = $_POST["brownies"];
$shipping = $_POST["shipping"];
$cupcakesTotal = $cupcakes * 5;
$cookiesTotal = $cookies * 1;
$browniesTotal = $brownies * 3;
$shippingTotal = 0;
if($shipping == "free")
{
  $shippingTotal = 0;
}
elseif($shipping == "overnight")
{
  $shippingTotal = 50;
}
elseif($shipping == "threeDay")
{
  $shippingTotal = 5;
}
$totalPrice = $cupcakesTotal + $cookiesTotal + $browniesTotal +$shippingTotal;
echo "Hello, ". $user. ".<br>";
echo "Your password is: ". $password. "<br>";
echo "You purchased ". $cupcakes . " cupcakes for $5.00 each, so the cupcake sub total is $". $cupcakesTotal. ".00<br>";
echo "You purchased ". $cookies . " cookies for $1.00 each, so the cookie sub total is $". $cookiesTotal. ".00<br>";
echo "You purchased ". $brownies . " brownies for $3.00 each, so the brownie sub total is $". $browniesTotal. ".00<br>";
echo "Your shipping selection was ". $shipping . "which was priced at $". $shippingTotal. ".00<br>";
echo "The total cost of your purchase is $". $totalPrice. ".00<br>";
?>
