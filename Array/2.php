<?php
$arr=array(1,5,6,2,3,8,4,6);
$sum=0;
for($i=0;$i<count($arr);$i+=1){
    $sum+=$arr[$i];
}
echo($sum);
echo("<br>");
function factorial($num)
{
    $arr=array(); //Size of array is dynamic in php just create an empty array and insert values it will directly increament size.
    $arr[0]=1;
    for($i=1;$i<=$num;$i++){
        $arr[$i]=$arr[$i-1]*$i;
    }
    return $arr[$num];
}

function fibonnaci($num){
    $arr=array();
    $arr[0]=0;
    $arr[1]=1;
    for($i=2;$i<=$num;$i++){
        $arr[$i]=$arr[$i-1]+$arr[$i-2];
    }

    return $arr[$num];
}
$ans=factorial(5);
echo($ans);
?>