<?php
  require_once('ProductInformation.php');

  class Cart extends ProductInformation {
    protected $totalCost;
    protected $milkShakeDiscount;
    protected $floatDiscount;

    function __construct() {
      $milkShakeDiscount = 0.85;
      $floatDiscount = 0.5;
      $totalCost = 0.0;
    }

    public function addToCart($itemCost) {
      $totalCost += $itemCost;
    }

    public function removeFromCart($itemCost) {
      if($itemCost > $totalCost) {
        $totalCost = 0;
      } else {
      $totalCost = $totalCost - $itemCost;
      }
    }


  };

?>
