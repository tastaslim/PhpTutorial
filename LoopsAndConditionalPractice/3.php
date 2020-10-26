<?php
function sumofDigits($a){
$sum=0;
while($a!=0){
    $rem=$a%10;
    $sum+=$rem;
    $a/=10;
}
return $sum;
}
$ans=sumofDigits(12784);
echo($ans);
?>