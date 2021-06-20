<!-- While loop in Php -->
<?php

echo "<h1>Taking input from user in php</h1> <br>";
// $a = readline('Enter a string: '); 
// echo $a;
echo "<br><h1>While loop in Php</h1>";
// print(12); also works in php
$i=0;
while($i<10){
    echo "$i ";
    $i+=1;
    // if($i==4){
    // break;
    // }
}
echo "<br>";
for($i=0;$i<20;$i++){
    echo "$i ";
}

$arr=array(1,2,3,4,5,6,7);
foreach ($arr as $i){
    echo "$i ";
}

?>