<?php
  class IceCream {
    public $flavor;
    public $numOfScoops;
    function __construct($type, $scoops) {
      $this->flavor = $type;
      $this->numOfScoops = $scoops;
    }

  };

?>
