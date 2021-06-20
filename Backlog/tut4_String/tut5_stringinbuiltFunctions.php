<?php
$name="my name is Taslim";
echo strlen($name);
echo "<br>";
echo str_replace("Taslim","Arif",$name);
echo "<br>";
echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo ltrim("  This is taslim  ");
echo "<br>";
echo rtrim("  This is taslim  ");
?>

<!-- Merging two string in php 
We use . operator to perform it.
-->
<?php
$a="my name is";
$b=" taslim";

echo ("this is my info "."$a $b"." you got it");
?>