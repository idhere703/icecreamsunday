<?php
  class Float extends ProductInformation {
    protected $sodaType;
    protected $scoops = array();
    function __construct($type, $flavors) {
      $this->sodaType = $type;
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
    }

  };

 ?>
