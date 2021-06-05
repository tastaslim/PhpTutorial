<?php
 namespace tut_14_OOPS\practice;
 require("./Animal.php");
 require("./google.php");
require("./microsoft.php");
//  use tut_14_OOPS\practice\Google;
 class Taslim{
     private $auth;
     function __construct(Animal12 $auth)
     {
         $this->auth=$auth;
     }
     function getData(){
        $this->auth->makeSound();
     }
 }

 $data=new Taslim(new Microsoft());
 echo $data->getData();
?>