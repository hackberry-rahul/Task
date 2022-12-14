<?php
//$str = "hello world. It's a beautiful day.";
//$str = 'rad,green,blue,black';
$array = array('hello','woeld','beautiful','day');
//$array = explode(" ",$str,3);
//echo "<pre>";
//print_r($array);
//echo "</pre>";
//echo "<br>";
//echo "<br>";
$str = implode(" ",$array);
echo $str;
?>