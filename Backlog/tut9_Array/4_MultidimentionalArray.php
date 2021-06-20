<?php
echo("<h1>Welcome to multidimensional array in php</h1>");
$multidimarray=array(
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15),
    array(16,17,18,19,20)
);

for($i=0;$i<4;$i++){
    for($j=0;$j<5;$j++){
        echo($multidimarray[$i][$j]);
        echo(" ");
    }
    echo("<br>");
}

echo var_dump($multidimarray);
echo("<br>");
?>