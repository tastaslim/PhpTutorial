<?php
$servername="localhost";
$username="root";
$password="";
//For more details visit and read content of tut13_MYSQL file
$conn=mysqli_connect($servername,$username,$password);
// Now check whether our connection was successful or not. If successful prompt a message sayuing connection was succesful otherwise die.
if(!$conn){
    //die breaks flow of code and returns whatever we have written inside it and do not execute further code.
    die("Sorry we fail to connect ".mysqli_connect_error());
}
echo("<br><h1>Connection to database was successful</h1>");

//create a database.
$sql="CREATE DATABASE taslim";
// now we have written code to create our databse but we need to execute this code to create our databse. Hence we do it using mysqli_query();
//mysqli_query($conn,$sql): ==> it takes 2 argument first connect of mysql and second database creation.
$result=mysqli_query($conn,$sql); // hurrah! as soon as we run this page on localhost and now if we go to myphpadmin page we
//see a databse named taslim2 got created there if database named taslim2 doesn't exists otherwise it fails. Awesome.
//Since with echo php does not show anything for false it is better to use var_dump.
echo("echo var_dump: ");
echo(" returns true if databse created successfully and returns false if it fails to creat databse or database already exists with same name"); 
echo("<h2>In our case echo var_dump returns:</h2>");
//Now check for database creation, I mean whether we have successfully created database or not.

if($result){
    echo("Congratulations, you have successfully created database with the command: ".$sql);
}else{
    echo("Failed to create database either databse with same name already exists or there is another issue.");
}
?>