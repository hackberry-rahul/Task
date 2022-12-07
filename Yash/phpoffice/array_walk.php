<?php

$fruit = array(
    "a"=>"Lemon",
    "b"=>"Orange",
    "c"=>"Banana",
    "d"=>"Apple"
);
array_walk($fruit ,"myfunction"," Is a key of ");

function myfunction($value , $key, $param){
    echo "$key $param . $value <br>";
     
}

?>

<?php
echo "<br>";echo "<br>";echo "<br>";
$vag= array(1=>"carrot", 2=>"tomatos");
$fruit = array(
    $vag,
    "a"=>"Lemon",
    "b"=>"Orange",
    "c"=>"Banana",
    "d"=>"Apple");
    array_walk_recursive($fruit ,"myfunction1"," Is a key of ");
    function myfunction1($value , $key, $param){
        echo "$key $param . $value <br>";
         
    }
    
?>