<?php

$a = ["a" => "Sanjay", "b" => "Aman", "c" => "Mohan"];
$b = ["a" => "Sanjay", "f" => "Mohan", "b" => "YEllow"];

$new = array_intersect($a, $b);
echo "<pre>";
print_r($new);
echo "</pre>";

$new1 = array_intersect_key($a,$b);
echo "<pre>";
print_r($new1);
echo "</pre>";

$new2 = array_intersect_assoc($a,$b);
echo "<pre>";
print_r($new2);
echo "</pre>";

function comper($a,$b){
    if ($a === $b){
        return 0;
    }
    return ($a>$b)? 1: -1;

}
$new3 = array_intersect_uassoc($a,$b,"comper");
echo "<pre>";
print_r($new3);
echo "</pre>";



?>




?>