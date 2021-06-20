<?php declare(strict_types=1); //Always use strict mode in php
function sum(int $a,int $b):int{
    return $a+$b;
}

function recursion():void{
    echo "this is a function which does not return anything";
}

$ans=sum(12,3);
echo "$ans<br>";
recursion();
?>