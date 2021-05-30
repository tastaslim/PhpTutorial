<?php
function sum($a,$b){
    $c=20; // local variable
    echo("$a $b");
}

// echo $c; error as c has scope only within sum function
//To use a variable global variable inside a function we can use global keyword
$c="taslim";
function minus($a, $b){
    $c="Arif"; //local variable c
    global $c;
    $c=12;//now global variable c will get change
    echo ("$a $b");
    echo("\n");

    echo $c;
}

minus(12,12);
echo $c;
?>

<?php
//Nested function is valid in php
function outer(){
    $a=12;
    function inner(){
        // global $a;// it will make use of global a
        // echo $a;

        // echo $a; // it gives error as it doesn't know a because there is no variable b names a inside inner function
        //and we have not told inner to use global a.

    }
    inner();
}
outer();
?>