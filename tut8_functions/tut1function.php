<?php
echo("<h1>in PHP pass by valu and pass by reference is similiar to C++. just we need to write a dollar before each varibale and then use & and all before $.</h1>");
echo("<h3>Concept of default arguments is also here.</h3>");
//changes value of a==> pass by reference
function change(&$a){
    $a++;
}
$a=10;
change($a);
echo($a);
//Does not change value of b==> pass by value

function DoNotChange($b){
    $b++;
    echo($b);//13
}
$b=12;
echo($b);//12


function withDefaultArgument($a,$b=10){
    return $a+$b;
}
echo("<br>");
$ans=withDefaultArgument(12,13);
echo($ans);

$ans2=withDefaultArgument(12);
echo($ans2);
?>