<?php
  class Cart
  {
      protected $totalCost;
      protected $items = array();
      protected $milkShakeDiscount;
      protected $floatDiscount;

    // Initialize object.
    public function __construct()
    {
        $this->milkShakeDiscount = 0.85;
        $this->floatDiscount = 0.5;
        $this->totalCost = 0.0;
    }

    // Get total cost of all items in cart.
    public function getTotal()
    {
        return $this->totalCost;
    }

    // Add item to cart.
    public function addToCart($item)
    {
        array_push($this->items, $item);
    }

    // Remove item from cart.
    public function removeFromCart($item)
    {
        unset($this->items[$item]);
    }

    // List all the items in your cart.
    public function listCartItems() {
      echo "======================================\n";
      echo "=========Items In Cart================\n\n";
      foreach ($this->items as $item) {
        echo "Item Name: " . $item->getItemName() . "\n";
        echo "Item Price: " . $item->getItemCost() . "\n\n";
      }

      echo "======================================\n";

    }

    // Apply all discounts, and list prices/names for everything. Then print
    // out the total cost.
    public function checkout() {

    }

    // Function that applies discount. Only float or milkshakes. No cones.
    public function applyDiscount($className, $cost)
    {
        if ($className == 'Float') {
            $cost = round($cost * $this->floatDiscount, 2);

            return $cost;
        } elseif ($className == 'Milkshake') {
            $cost = round($cost * $this->milkShakeDiscount, 2);

            return $cost;
        } else {
            echo "Discount not available.\n\n";

            return $cost;
        }
    }
  };
