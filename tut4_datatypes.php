<?php
/*
Php data types
1.string
2.integer
3.float
4.boolean
5.Object
6.Array
7.NULL
*/

//integer
$a=20;
$b=30;
$c=$a+$b;
echo "this is integer data type variable: $c <br>";

//string

$name="Taslim";
echo "My name is $name <br>";

//float
$salary=2312839.12;
echo "My salry is $salary<br>";
echo var_dump($salary); // this is good practice to use var_dump with varibles beacuse it gives values along with data types

// boolean
//can be either true or false

$condition=true;
echo"<br>";
echo var_dump($condition);

//Object
//instances of classes : will se it in OOPS

//Array

$arr=array(1,2,3,4,5,6);
echo var_dump($arr);
echo"<br>";
echo($arr[0]);

//NULL
//when we want to initialise any variable with no value
$ak=NULL;
echo "$ak";
?>