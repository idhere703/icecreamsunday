<?php
  class Milkshake extends ProductInformation {
    // Variables
    protected $milkTypes = [
      "skim" => ["price" => 0.50, "name" => "Skim Milk"],
      "whole" => ["price" => 1.00, "name" => "Whole Milk"],
      "twoPercent" => ["price" => 0.75, "name" => "2% Milk"]
    ];

    protected $milkType;
    protected $scoop;
    protected $itemCost;

    function __construct($type, $flavor) {
      $this->milkType = $this->milkTypes[$type];
      $this->scoop = $this->productInfo[$flavor];
      $this->itemCost = $this->initTotal();
    }

    // Get total price for milkshake.
    public function initTotal() {
      // Return val.
      $temp = 0;
      // Add milk price.
      $temp += $this->milkType["price"];
      // Add scoop of ice cream.
      $temp += $this->scoop["price"];
      // Return total item cost.
      return $temp;
    }

    // Get the total item cost.
    public function getItemCost() {
      return $this->itemCost;
    }

  };

 ?>
