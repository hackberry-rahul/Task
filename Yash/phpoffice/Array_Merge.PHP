<h2>Array Merge</h2>
<?php

$fruit = ["a" => "Orange", "b" => "banana", "c" => "Apple"];

$vegg = ["d" => "carrot", "b" => "pea"];

$new = array_merge_recursive($fruit, $vegg);

echo "<pre>";
print_r($new);
echo "</pre>";


?>

<br>
<br>
<h2>Array Combine</h2>
<?php
$name = array("Ram", "Mohan", "Salman");
$age = array(" 35", " 37", "47");

$new = array_combine($name , $age);

echo "<pre>";
print_r($new);
echo "</pre>";

?>

<br>
<br>
<h2>Array Slice</h2>

<?php

$a=["yash","BHavu","yash","meet","kiran"];
$f = ["a" => "Orange", "b" => "banana", "47" => "Apple"];
$new=array_slice($a,1,2,true);
$newe=array_slice($f,1,2,true);

echo "<pre>";
print_r($new);
print_r($newe);
echo "</pre>";

?>
<br>
<br>
<h2>Array Splice</h2>
<?php 
$a=["yash","BHavu","yash","meet","kiran"];
$b = ["harsh","hitesh"];
$new =array_splice($a,3,1,$b);
echo "<pre>";
print_r($new);
        
print_r($a);
echo "</pre>";


?>