<?php
/**
 * This is animal class.
 * @author Taslim Arif
 * @license MIT
 */
 class Animal{
     protected string $name;
     protected int $age;
     public function __construct(string $name, int $age)
     {
         $this->name=$name;
         $this->age=$age;
     }

     public function __destruct()
     {
         echo "This is destructor: $this->age and $this->name";
     }
     /**
      * This method is used to get the name of the animal.
      * @param string $name Name to be passed.
      * @return string Returns name of the animal.
      */
     public function getName(string $name):string{
         return $name;
     }
    public function getAge(): string{
        return $this->age;
    }
 }

//  $animal=new Animal("Cow",12);
//  echo "Name:".$animal->getAge()."\nAge:".$animal->getName();
?>