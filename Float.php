<?php
  class Float extends ProductInformation {
    // Variables
    protected $sodaTypes = [
      "coke" => ["price" => 2.55, "name" => "Brand Name Coke"],
      "pepsi" => ["price" => 1.00, "name" => "Poor mans Coke"],
      "sprite" => ["price" => 1.50, "name" => "Rich mans Sierra Mist"]
    ];
    protected $sodaType;
    protected $itemCost;
    protected $scoops = array();

    // Initialize object.
    function __construct($type, $flavors) {
      $this->sodaType = $this->sodaTypes[$type];
      // If we have more than one flavor we have more than one scoop. So we
      // check.
      if(is_array($flavors)) {
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
    public function initTotal() {
      // Return val.
      $temp = 0;
      // Add soda price.
      $temp += $this->sodaType["price"];
      // Add all scoops of ice cream.
      foreach ($this->scoops as $scoop) {
        $temp += $scoop["price"];
      }
      // Return total item cost.
      return $temp;
    }

    // Get the total item cost.
    public function getItemCost() {
      return $this->itemCost;
    }

  };

 ?>
