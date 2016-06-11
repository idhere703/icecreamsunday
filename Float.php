<?php
  class Float extends ProductInformation
  {
      // Variables
    protected $sodaTypes = [
      'coke' => ['price' => 2.55, 'name' => 'Brand Name Coke'],
      'pepsi' => ['price' => 1.00, 'name' => 'Poor mans Coke'],
      'sprite' => ['price' => 1.50, 'name' => 'Rich mans Sierra Mist'],
    ];

      protected $sodaType;
      protected $itemCost;
      protected $scoops = array();
      protected $itemName;

    // Initialize object.
    public function __construct($type, $flavors, $floatName)
    {
        $this->sodaType = $this->sodaTypes[$type];
        $this->itemName = $floatName;
      // If we have more than one flavor we have more than one scoop. So we
      // check.
      if (is_array($flavors)) {
          // Loop though flavors to get there info.
        foreach ($flavors as $value) {
            array_push($this->scoops, $this->productInfo[$value]);
        }
      } else {
          // Else, just push the one, since I still want it in an array.
        array_push($this->scoops, $this->productInfo[$flavors]);
      }

        $this->itemCost = $this->initTotal();
    }

    // Get total price for float.
    public function initTotal()
    {
        // Return val.
      $temp = 0;
      // Add soda price.
      $temp += $this->sodaType['price'];
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
    public function setItemCost($newCost)
    {
        $this->itemCost = $newCost;
    }

    // The the name of the item. This is just whatever was passed in on create.
    public function getItemName()
    {
        return $this->itemName;
    }

    // Print a breakdown if the items ingredients and their prices.
    public function getItemBreakdown() {
      echo 'Soda type: '.$this->sodaType['name'].'- $'.number_format($this->sodaType['price'], 2)."\n";
      echo "Flavors used:\n";
      foreach ($this->scoops as $scoop) {
        echo '     '.$scoop['name'].' - $'.number_format($scoop['price'], 2)."\n";
      }
      echo "\n\n";
    }
  };
