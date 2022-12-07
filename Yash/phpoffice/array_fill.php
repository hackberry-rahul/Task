<?php

$a = array("a","b","c","d","f");

$new = array_fill_keys($a,"hello");

echo "<pre>";
print_r($new);
echo "</pre>";


$new1 = array_fill(3 , 4 ,"hello");
echo "<pre>";
print_r($new1);
echo "</pre>";

?>