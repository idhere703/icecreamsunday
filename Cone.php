<?php
  require_once('IceCream.php');
  class Cone extends IceCream {
    public $coneType;
    function __construct($type, $flavors) {
      parent::__construct($flavors);
      $this->coneType = $type;
    }

  };

 ?>
