<?php
"  y: represents year in two digit and Y represent year in four digit.
   m: represent month(in number) and M represents month in string( January to December).
   d: represent date(in number) and D represents month in string( Sunday to Saturday).
   H - 24-hour format of an hour (00 to 23)
   h - 12-hour format of an hour with leading zeros (01 to 12)
   i - Minutes with leading zeros (00 to 59)
   s - Seconds with leading zeros (00 to 59)
   a - Lowercase Ante meridiem and Post meridiem (am or pm)
";
echo "Today is date:" . date("Y/M/D") . "\n";
echo "Today is date:" . date("Y/m/d") . "\n";
echo "Today is date:" . date("Y/m/D") . "\n";
echo "Today is date:" . date("Y/M/d") . "\n";
echo "Today is date:" . date("y/M/D") . "\n";
echo "Today is date:" . date("y/m/D") . "\n";

"To automatically update copy right year in website, we use";
echo "<p>Copyright &copy; 1999-" . date("Y") . "myWebsite.com</p>";
?>