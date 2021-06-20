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

// Create table in database
$sql="CREATE TABLE `PHPScriptMade_employees` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , 
      `role` VARCHAR(20) NOT NULL ,`doj` DATETIME NOT NULL ,    PRIMARY KEY  (`id`))";

$result=mysqli_query($conn,$sql);

if($result){
    echo("Successfully created table inside database<br>");
}else{
    echo("Failed to create table in database. Either table with same name already exists or some other issues.<br>");
}
?>