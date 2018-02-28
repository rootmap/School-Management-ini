

<?php
$cy=date('Y');
echo $startbeg=date("Y-m-d", mktime(0, 0, 0, 12, 31,$cy-1));
echo "<br>";
echo $endbeg=date("Y-m-d", mktime(0, 0, 0, 12, 32,$cy-2));
echo "<br>";
echo $startinend=date("Y-m-d", mktime(0, 0, 0, 12, 31,$cy));
echo "<br>";
echo $endin=date("Y-m-d", mktime(0, 0, 0, 12, 32,$cy-1));
?>
