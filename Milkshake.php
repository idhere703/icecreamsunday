<?php
  class Milkshake extends ProductInformation
  {
      // Variables
    protected $milkTypes = [
      'skim' => ['price' => 0.50, 'name' => 'Skim Milk'],
      'whole' => ['price' => 1.00, 'name' => 'Whole Milk'],
      'twoPercent' => ['price' => 0.75, 'name' => '2% Milk'],
    ];

      protected $milkType;
      protected $scoop;
      protected $itemCost;
      protected $itemName;

    // Initialize object.
    public function __construct($type, $flavor, $milkshakeName)
    {
        $this->milkType = $this->milkTypes[$type];
        $this->scoop = $this->productInfo[$flavor];
        $this->itemCost = $this->initTotal();
        $this->itemName = $milkshakeName;
    }

    // Get total price for milkshake.
    public function initTotal()
    {
        // Return val.
      $temp = 0;
      // Add milk price.
      $temp += $this->milkType['price'];
      // Add scoop of ice cream.
      $temp += $this->scoop['price'];
      // Return total item cost.
      return $temp;
    }

    // Get the total item cost.
    public function getItemCost()
    {
        return $this->itemCost;
    }

    // Set the total item cost.
    public function setItemCost($newCost)
    {
        $this->itemCost = $newCost;
    }

    // The the name of the item. This is just whatever was passed in on create.
    public function getItemName()
    {
        return $this->itemName;
    }
  };
