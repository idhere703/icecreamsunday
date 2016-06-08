<?php
  require_once('IceCream.php');
  class Float extends IceCream {
    public $sodaType;
    function __construct($type, $flavor, $scoops) {
      parent::__construct($flavor, $scoops);
      $this->sodaType = $type;
    }

  };

 ?>
