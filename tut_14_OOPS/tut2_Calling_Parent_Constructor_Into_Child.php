<?php
  require "./tut1.php";
  // final keyword prevents inheritance if used with base class. Then no class can extend it.
  // If used with a function, it can not be overridden;
  class Cow extends Animal{
      public function __construct()
      {
          parent::__construct($this->age,$this->name);
      }
      function getData2():string{
        return $this->getName("Taslim");
      }
  }

  $cow = new Cow();
  echo $cow->getData2();
?>