<?php
$servername="localhost";
$username="root";
$password="";
$database="Taslim";
//If we want to work on existing database we can also do that just by providing its name and passing it as an argument inside mysqli_connect function while
//connecting to database
$conn=mysqli_connect($servername,$username,$password,$database);

if($conn){
    echo("<h1>Connected to database successfully</h1>");
}else{
    echo("Failed to connect to database<br>");
}

// Insert values in table.
//We can even remove id entry from here because since id was our primary keyb and it was created as auto_increament, it will automatically increament id by 1.
// $sql="INSERT INTO `PHPScriptMade_employees` (`name`, `role`, `doj`) VALUES ('Harry', 'Programmer', '2019-07-16 17:18:52')";
$sql="INSERT INTO `PHPScriptMade_employees` (`id`, `name`, `role`, `doj`) VALUES ('1', 'Harry', 'Programmer', '2019-07-16 17:18:52')";
$result=mysqli_query($conn,$sql);

if($result){
    echo("Successfully created table inside database<br>");
}else{
    echo("Failed to create table in database. Either table with same name already exists or some other issues.<br>");
}
?>