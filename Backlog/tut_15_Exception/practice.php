<?php
function divide($dividend, $divisor) {
  if($divisor == 0) { // === will not apply for this if because in that case it checks for types as well as value;
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

$a = readline("Enter first number:");
$b = readline("Enter second number:");
try {
  echo divide($a, $b)."\n";
} catch(Exception $e) {
  echo "Unable to divide.\n";
} finally {
  echo "Process complete.\n";
}
?>