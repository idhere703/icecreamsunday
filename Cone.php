<?php
  class Cone extends ProductInformation
  {
      // Variables
    protected $coneTypes = [
      'cake' => ['price' => 3.25, 'name' => 'Cake Cone'],
      'sugar' => ['price' => 2.00, 'name' => 'Sugar Cone'],
      'waffle' => ['price' => 1.00, 'name' => 'Waffle Cone'],
    ];

      public $coneType;
      protected $itemCost;
      protected $scoops = array();
      protected $itemName;

    // Initialize object.
    public function __construct($type, $flavors, $coneName)
    {
        $this->coneType = $this->coneTypes[$type];
        $this->itemName = $coneName;

      // If we have more than one flavor we have more than one scoop. So we
      // check. If it is an array we only map the first two entries. Because
      // we only allow two scoops.

      if (is_array($flavors)) {
          // Loop though flavors to get there info.
        $numOfScoops = 0;
          foreach ($flavors as $value) {
              // Push to array.
          array_push($this->scoops, $this->productInfo[$value]);
          // Update the number of scoops we have already added.
          ++$numOfScoops;
          // If we have two, we're done.
          if ($numOfScoops === 2) {
              break;
          }
          }
      } else {
          // Else, just push the one, since I still want it in an array.
        array_push($this->scoops, $this->productInfo[$flavors]);
      }

        $this->itemCost = $this->initTotal();
    }

    // Get total price for cone.
    public function initTotal()
    {
        // Return val.
      $temp = 0;
      // Add cone price.
      $temp += $this->coneType['price'];
      // Add all scoops of ice cream.
      foreach ($this->scoops as $scoop) {
          $temp += $scoop['price'];
      }
      // Return total item cost.
      return $temp;
    }

    // Get the total item cost.
    public function getItemCost()
    {
        return $this->itemCost;
    }

    // Set the total item cost.
    public function setItemCost($newCost) {
      $this->itemCost = $newCost;
    }

    // The the name of the item. This is just whatever was passed in on create.
    public function getItemName() {
      return $this->itemName;
    }
  };
