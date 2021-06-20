<?php
  interface Taslim{
      function P(int $age, string $skip, int $top);
  }

  class Arif implements Taslim{
      function P(int $age, string $skip='', int $top=10){
          echo $age;
          echo $skip;
          echo $top;
      }
  }

  $ans=new Arif();
  $ans->P(12);
?>