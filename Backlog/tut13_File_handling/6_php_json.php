<?php
"To read JSON file we have to use file_get_contents";
/*
  First way
*/
  $jsonObject= file_get_contents('./data/test.json');
  $data=json_decode($jsonObject);
  foreach($data as $jsonData){
    //   echo $jsonData->color.":".$jsonData->value."\n";
  }

/*
   Second way by converting it to associative array
  */
$jsonObject = file_get_contents('./data/test.json');
$data = json_decode($jsonObject,true); // this true converts json to associative array
foreach($data as $arr){
    echo "Value: ".$arr["value"]."\n";
    echo "Color: ".$arr["color"]."\n";
}
?>