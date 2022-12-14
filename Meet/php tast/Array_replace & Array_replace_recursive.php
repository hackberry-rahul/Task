<?php
#$fruits = ['orange','banana','apple','grapes'];
#$veggie = ['carrot','pea'];
#$color = ['rad','green','blue'];
#$newarray = array_replace($fruits,$veggie,$color);
$array1 = array("a"=>array("rad"),"b"=>array("green","pink"));
$array2 = array("a"=>array("yellow"),"b"=>array("bkack"));
$newarray = array_replace_recursive($array1,$array2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

?>