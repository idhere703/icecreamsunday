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
        $this->milkShakeDiscount = 0.5;
        $this->floatDiscount = 0.85;
        $this->totalCost = 0.0;
    }

    // Get total cost of all items in cart.
    public function getTotal()
    {
        return $this->totalCost;
    }

    // Update the total cost of the purchase.
    public function updateTotal()
    {

      // Blank out the value.
      $this->totalCost = 0;

        foreach ($this->items as $item) {
            // Update the total cost of purchase
        // Then update.
        $this->totalCost += $item->getItemCost();
        }
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

    // Apply all discounts, and list prices/names for everything. Then print
    // out the total cost.
    public function checkout()
    {
        echo "======================================\n";
        echo "=========Items In Cart================\n\n";
        foreach ($this->items as $item) {
            echo 'Item Name: '.$item->getItemName()."\n";
            echo 'Item Price: $'.number_format($item->getItemCost(), 2)."\n\n";
        }

      // Update total.
      $this->updateTotal();

        echo "======================================\n";
        echo "=====Total Price Before Discounts=====\n";
        echo '$'.number_format($this->totalCost, 2)."\n";
        echo "======================================\n\n";

      // Apply discounts
      $this->applyDiscounts();
        $this->updateTotal();

        echo "======================================\n";
        echo "=====Total Price After Discounts======\n";
        echo '$'.number_format($this->totalCost, 2)."\n";
        echo "======================================\n\n";
    }

    // Function that applies discount. Only float or milkshakes. No cones.
    public function applyDiscounts()
    {
        foreach ($this->items as $item) {
            // Set the name of the class we are testing on.
        $className = get_class($item);

        // If the class is one of the allowed ones. Apply the discount.
        // Otherwise, do nothing.
        if ($className == 'Float') {
            $item->setItemCost(round($item->getItemCost() * $this->floatDiscount, 2));
        } elseif ($className == 'Milkshake') {
            $item->setItemCost(round($item->getItemCost() * $this->milkShakeDiscount, 2));
        }
        }
    }
  };
