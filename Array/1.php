<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
echo("<h1>In php there are three types of Array: To rpint array use print_r</h1>");
?>
    <ol start="1">
        <li>Indexed array</li>
        <li>Assosiative array</li>
        <li>Multidimentional array</li>
    </ol>

    <h2>1. Indexed Array</h2>
    <?php
     echo ("It is similiar to normal array which we use in any proogramming languge with index starting with 0.");
     echo("<br>Like list in python php array can also have hetrogeneous data types.");
     $arr=array("Taslim",1,2,98.5,true);
     echo("<br>");
     foreach($arr as $i){
         echo("$i ");
     }
     echo("<br>");
     for($i=0;$i<count($arr);$i++){
         echo("$arr[$i] ");
     }
    ?>
</body>

</html>