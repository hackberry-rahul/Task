<?php
$a = array("a"=>"red " , "b"=>"green ","c"=>"blue ","d"=>"yellow ", "g"=>"green");
$b = array("a"=>"red " , "f"=>"green" , "d"=>"purple");


$new = array_values($a);
echo "<pre>";
print_r($new);
echo "</pre>";

$new1 = array_unique($a);
echo "<pre>";
print_r($new1);
echo "</pre>";



?>