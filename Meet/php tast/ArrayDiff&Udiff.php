<?php
$a1 = array("a"=>"rad","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"rad","f"=>"green","d"=>"purple");
#$a3 = array("a"=>"rad","d"=>"black","h"=>"yellow");
$newarray = array_diff_assoc($a1,$a2);

echo "<pre>";
print_r($newarray);
echo "</pre>";

?>