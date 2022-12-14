<?php
$color = ["rad","blue","green","yellow","brown"];
$fruit = ['banana','apple','grapes'];
#$color = ['a'=>'rad','b'=>'blue','c'=>'green','d'=>'yellow'];
#$fruit = ['a'=>'banana','b'=>'apple','c'=>'grapes'];
array_splice($color,0,2,$fruit);
echo "<pre>";
print_r($color);
echo "</pre>";
?>