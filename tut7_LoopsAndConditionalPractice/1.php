<?php
//Don't use print instead use echo i php as it is slightly faster than print and can take multiple arguments a well
$a=10;
for($i=0;$i<=$a;$i++)
{
    if($i%2==0){
        echo("$i is even <br>");
        //echo "$i is even <br>";
    }else{
        echo("$i is odd <br>");
    }
}

for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
?>