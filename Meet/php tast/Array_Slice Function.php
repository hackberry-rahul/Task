<?php
#$color = ["rad","blue","green","yellow","brown"];
#$color = ['a'=>'rad','b'=>'blue','43'=>'green','d'=>'yellow'];
$color = ["0"=>"rad","1"=>"blue","2"=>"green","3"=>"yellow","4"=>"brown"];
$newarray = array_slice($color,1,3);
echo "<pre>";
print_r($newarray);
echo "</pre>"; 
?>