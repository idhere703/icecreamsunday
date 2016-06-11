<?php
  require_once('ProductInformation.php');
  require_once("Cart.php");
  require_once('Cone.php');
  require_once('Float.php');
  require_once('Milkshake.php');

  $shoppingCart = new Cart();

  // $vanillaCone = new Cone("waffle", "vanilla");
  // $bubblegumMilkshake = new Milkshake("whole", "bubblegum");

  $mixedFloat = new Float("coke", ["vanilla", "chocolate"]);
  // $pepFloat = new Float("pepsi", "butterPecan");
  // $ewwFloat = new Float("sprite", "licorice");

  // We qualify for a discount so lets apply it and add to the cart.
  $shoppingCart->addToCart($shoppingCart->applyDiscount(get_class($mixedFloat), $mixedFloat->getItemCost()));

  echo $shoppingCart->getTotal() . "\n";

?>
