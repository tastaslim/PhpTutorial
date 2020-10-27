<?php
echo("<h1>Now we are ready to learn and connect to MYSQL database with php.</h1>");
echo("<p>Ways to connect to MYSQL databse🧮 
<ul>
  <li>mysqli extension</li>
  <li>PDO(Php database object</li>
</ul>

<p>
  <h3>mysqli extension:</h3>
  We should use it when we arepretty much sure that we are not going to switch to other databases or we are sure that our application needs only
  mysql databse. If we are sure we must use it.
</p>

<p>
  <h3>PDO(Php datatbase object):</h3>
  We should use it when we are not sure whether our application needs more than one type of databases. PDO written codes can be used with any database but in comparision to mysql it is hard to manage.
  
</p>

<p>
<h3>Here we will be using mysql databse hence we will be using mysqli extension.</h3>
</p>
</p>");

echo("Connecting to database requirements:<br>");

echo("<p>
<ul>
   <li>ServerName</li>
   <li>username</li>
   <li>Passsword</li>
</ul>
</p>");

// We are using these credentials beacuse we are working on local host and our local machine so in xampp these will be crentials
//where server will be localhost user will be root and no password. If we give any wrong password or any password which is not same as required database connection will failed
// and it will say that we are not authorize to uuse this database and connection died.
$servername="localhost";
$username="root";
$password="";

echo("Now create a connection using the following command:<br>");
echo("$ conn=mysqli_connect($ servername,$ username,$ password);<br>");
$conn=mysqli_connect($servername,$username,$password);
// Now check whether our connection was successful or not. If successful prompt a message sayuing connection was succesful otherwise die.
if(!$conn){
    //die breaks flow of code and returns whatever we have written inside it and do not execute further code.
    die("Sorry we fail to connect ".mysqli_connect_error());
}
echo("<br><h1>Connection to database was successful</h1>.<br>");
?>