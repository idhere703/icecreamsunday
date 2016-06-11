<?php
  require_once 'ProductInformation.php';
  require_once 'Cart.php';
  require_once 'Cone.php';
  require_once 'Float.php';
  require_once 'Milkshake.php';

  // Shopping cart.
  $shoppingCart = new Cart();

  // Cones.
  $vanillaCone = new Cone('waffle', 'vanilla', "Plain Vanilla");
  $superSweetCone = new Cone('sugar', ['strawberry', 'vanilla'], "Super Sweet");

  // Milkshakes.
  $bubblegumMilkshake = new Milkshake('whole', 'bubblegum', "Bubblegum Milkshake");

  // Floats.
  $mixedFloat = new Float('coke', ['vanilla', 'chocolate'], "Mixed Coke");
  $pepFloat = new Float('pepsi', 'butterPecan', "Peppie Pecan");
  $ewwFloat = new Float('sprite', 'licorice', "Braveheart");

  // Add the rest of the cart items.
  $shoppingCart->addToCart($bubblegumMilkshake);
  $shoppingCart->addToCart($vanillaCone);
  $shoppingCart->addToCart($superSweetCone);
  $shoppingCart->addToCart($mixedFloat);
  $shoppingCart->addToCart($pepFloat);
  $shoppingCart->addToCart($ewwFloat);

  // Checkout.
  $shoppingCart->checkout();
