<?php
  class Cart {
    protected $totalCost;
    protected $milkShakeDiscount;
    protected $floatDiscount;

    // Initialize object.
    function __construct() {
      $this->milkShakeDiscount = 0.85;
      $this->floatDiscount = 0.5;
      $this->totalCost = 0.0;
    }

    // Get total cost of all items in cart.
    public function getTotal() {
      return $this->totalCost;
    }

    // Add item to cart.
    public function addToCart($itemCost) {
      $this->totalCost += $itemCost;
    }

    // Remove item from cart.
    public function removeFromCart($itemCost) {
      if($itemCost > $this->totalCost) {
        $this->totalCost = 0;
      } else {
      $this->totalCost = $this->totalCost - $itemCost;
      }
    }

    // Function that applies discount. Only float or milkshakes. No cones.
    public function applyDiscount($className, $cost) {
        if($className == "Float") {
          $cost = round($cost * $this->floatDiscount, 2);
          return $cost;
        } else if ($className == "Milkshake") {
          $cost = round($cost * $this->milkShakeDiscount, 2);
          return $cost;
        } else {
          echo "Discount not available.";
        }
    }


  };

?>
