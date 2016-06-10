<?php
  /*
    Made in place of a MySQL database. We'll just extend the class to the
    containers so we can get flavor information. Which we would normally make
    a call for.
   */
  class ProductInformation {
    protected $productInfo = [
        "strawberry" => ["price" => 1.25, "name" => "Super Strawberry"],
        "bubblegum" => ["price" => 2.40, "name" => "Bubblegum-Pop"],
        "licorice" => ["price" => 0.25, "name" => "Cheap Licorice"],
        "butterPecan" => ["price" => 1.00, "name" => "Butter Pecan"],
        "chocolate" => ["price" => 3.00, "name" => "Chocolate"],
        "vanilla" => ["price" => 1.50, "name" => "Vanilla"]
      ];
  };

?>
