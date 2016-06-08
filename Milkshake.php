<?php
  require_once('IceCream.php');
  class Milkshake extends IceCream{
    public $milkType;
    function __construct($type, $flavor, $scoops) {
      parent::__construct($flavor, $scoops);
      $this->milkType = $type;
    }

  };

 ?>
