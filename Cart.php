<?php
  require_once('ProductInformation.php');

  class Cart {
    protected $totalCost;
    protected $milkShakeDiscount;
    protected $floatDiscount;

    function __construct() {
      $this->milkShakeDiscount = 0.85;
      $this->floatDiscount = 0.5;
      $this->totalCost = 0.0;
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
