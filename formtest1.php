<!-- When form get submitted we get data in this file based on method type used. We xcan also use $_REQUEST irrespective of get or post because
it works with both the methods. -->
<?php
// echo("<pre>");
// print_r($_POST);
// echo("</pre>");
// echo($_POST['email']);
// echo("<br>");

echo("<pre>");
print_r($_REQUEST);
echo("</pre>");
echo($_REQUEST['email']);
echo("<br>");
?>