<?php
#$color = ["rad","blue","green","yellow","brown"];
$color = [
            "first"=> "rad",
            "second"=> "green",
            "third"=> "blue",
            "fourth"=> "yellow"
         ];
$newarray = array_key_exists("first",$color);
/*echo "<pre>";
print_r($newarray);
echo "</pre>";*/
if ($newarray) {
    echo "key exists";
}else {
    echo "key does not exists";
}

?>
