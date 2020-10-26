<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Notes</h1>
    <h3>echo</h3>
    <p>
    <ul>
        <li>echo is faster than the print statement.</li>
        <li>
            echo is a language construct not a function.
        </li>
        <li>
            echo does not return any value.
        </li>
    </ul>
    </p>

    <?php
    echo "this is used to print values in Php<br>";
    echo("this also works in echo php<br>");
    echo("; is must in php");
    $a=12;
    $b=10;
    echo($a.$b);
    ?>

    <h3>print</h3>
    <p>
        print is also like echo to print values but unlike echo it returns 1.
    <ul>
        <li>It is slower than echo</li>
        <li>It returns 1(==>int)</li>
        <li>It is also language construct not a function.</li>
    </ul>
    </p>

    <?php
    $a=12;
    $b=20;
    // print($a $b); gives error as we can only pass one argument. if we want multiple argument

    print("$a $b");
    print($a.$b);
    ?>
    <h3>Concatenation in PHP</h3>
    <?php
    echo("to concatenate multiple arguments in php we use . operator<br>");
    
    $name="My name is Taslim";
    $myage=20;
    $age=" I am $myage years old";
    $ans= $name." and".$age;
    
    echo($ans);
    ?>
</body>

</html>