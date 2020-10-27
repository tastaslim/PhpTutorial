<?php declare(strict_types=1); //Always use strict mode in php
function sum($a,$b){
    return $a+$b;
}

function recusrion(){
    echo "this is a function which does not return anything";
}

$ans=sum(12,3);
echo "$ans<br>";
recusrion();
?>