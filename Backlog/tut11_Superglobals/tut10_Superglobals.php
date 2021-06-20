<?php

echo("<h1>Some predefined global variables in php are known as - superglobals</h1>");
echo("<p>Lets say we are working in a directory having many files. If we want to access variables of one file from another file or within the same file globally, we use superglobals.</p>");
echo("<h3>Superglobals in php</h3>
       <ul>
       <li>$_GET</li>
       <li>$_POST</li>
       <li>$_SERVER</li>
       <li>$_REQUEST</li>
       <li>$_SESSION</li>
       <li>$_COOKIE</li>
       <li>$_FILES</li>
       </ul>
    ");
echo("<br>

Now one question that might comne into our mind is why do we need to use these, why do we need to save content of one files into another files.

Answer is simple, see there might be database in another file where we want to storte informatuion of user, or we can simply print data of user or based on user information we can show some data.");
?>