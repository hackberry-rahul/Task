<?php
$a = array("red","green","yellow","black");

$new = array_rand($a , 2);

echo "<pre>";
print_r($new);echo "</pre>";
echo "<br>";
echo $a[$new[0]];
echo "<br>";
echo $a[$new[1]];

shuffle($a);
echo "<pre>";
print_r($a);
echo "</pre>";


?>