<?php
  $size=(int)readline("Enter size of array: ");
  $i=0;
  $arr=[];
  $sum=0;
  for($i=0;$i<$size;$i++){
      $temp=(int)readline();
      $arr[$i]=$temp;
      $sum+=$arr[$i];
  }
  print_r($sum);
?>