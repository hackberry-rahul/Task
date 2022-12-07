<?php
function square($n){
    return $n*$n;
}
$b = [2,3,4,5,6,4];

$new = array_map("square",$b);

echo "<pre>";
print_r($new);
echo "</pre>";

// $a => array (
//     "yash"=> 10,
//     "meet"=>30,
//     "kiran"=> 40
// );
?>
<?php

$b=["yash","kiran"];

function upper($n){
    return strtoupper($n);
}

$new1 = array_map("upper",$b);

echo "<pre>";
print_r($new1);
echo "</pre>";

?>