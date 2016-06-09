<?php
  require_once('ProductInformation.php');

  class Cart extends ProductInformation {
    protected $totalCost;
    protected $milkShakeDiscount;
    protected $floatDiscount;

    function __construct() {
      $milkShakeDiscount = 0.85;
      $floatDiscount = 0.5;
      $totalCost = 100.0;
    }

    function getTotal() {
      return $this->totalCost;
    }

    function addToCart($itemCost) {
      $this->totalCost += $itemCost;
    }

    function removeFromCart($itemCost) {
      if($itemCost > $this->totalCost) {
        $this->totalCost = 0;
      } else {
      $this->totalCost = $this->totalCost - $itemCost;
      }
    }


  };

?>
