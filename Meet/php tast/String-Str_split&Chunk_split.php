<?php
$str = "hello world";
//$array = str_split($str,2);
$array = chunk_split($str,1,"..");
echo $array;
/*echo "<pre>";
print_r($array);
echo "</pre>";*/
?>