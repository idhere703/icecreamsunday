<?php
  require_once('IceCream.php');
  class Cone extends IceCream {
    public $coneType;
    function __construct($type, $flavor, $scoops) {
      parent::__construct($flavor, $scoops);
      $this->coneType = $type;
    }

  };

 ?>
