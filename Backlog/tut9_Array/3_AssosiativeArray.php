<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Associative Arrays in PHP</h1>
    <?php
    //Associative arrays in PHP
    /*
    echo("In php associative arrays are like map which contains key values pair. Here we want to associate keys with values. keys must be unique and values can be anything.");
    $associativeArray=array(
        "taslim"=>20,
        "Asad"=>21,
        "Ankit"=>22,
        "Amir"=>23,
        "Anmol"=>24
    );

    foreach($associativeArray as $key=>$value){
        echo("Name is $key and value is $value<br>");
    }
    
     $arr=array(
         "Name"=>"Taslim",
         "age"=>20,
         12=>"months",
         "year"=>2020,
     );

    foreach($arr as $key=>$value){
         echo("key: $key and values:$value<br>");     
        }
    $arr=array(1,2,5,2,4,2,5,1,6,7,2,3);
    sort($arr); // sorting array
    foreach($arr as $i){
        echo($i);
        echo(" ");
    }

    echo("\n");
    $ans=array_reverse($arr); // reverse array
    foreach($ans as $i){
        echo($i);
        echo(" ");
    }  

    //Array search

    $check=array_search(7,$arr); // returns index of element if found otherwise returns nothing.
    echo($check);
    */
    
    /************************* Practice ***************************/

    $arr=["Taslim"=>22,"Anam"=>22,"Ishika"=>22,"Gorge"=>
            [
            "Arif"=>22,"Kinder"=>21
            ]
            ];
    print_r($arr);

    ?>
</body>

</html>