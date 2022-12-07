<?php
$al = array("a"=>"red " , "b"=>"green ","c"=>"blue ","d"=>"yellow ");
$a2 = array("a"=>"red " , "f"=>"green" , "d"=>"purple");

$new = array_diff($al,$a2);

echo "<pre>";
print_r($new);
echo "</pre>";

$new1 = array_diff_key($al,$a2);

echo "<pre>";
print_r($new1);
echo "</pre>";


$new2 = array_diff_assoc($al,$a2);

echo "<pre>";
print_r($new2);
echo "</pre>";

function comper($a,$b){
    if ($a === $b){
        return 0;
    }
    return ($a>$b)? 1: -1;

}
$new3 = array_diff_uassoc($a1,$a2,"comper");
echo "<pre>";
print_r($new3);
echo "</pre>";



?>