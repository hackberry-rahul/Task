<?php
$a = 19;
$b = 29;

function test()
{
    global $a , $b;
    $a = $a + $b;

}
test();
echo $a; 
?>