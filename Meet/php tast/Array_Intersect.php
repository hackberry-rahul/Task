<?php
function compare($a,$b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1 : -1;
}
function value($a,$b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1 : -1;
}

$a1 = array("a"=>"rad","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"rad","f"=>"green","d"=>"purple");
//$a3 = array("a"=>"rad","f"=>"black","d"=>"yellow");
$newarray = array_uintersect_uassoc($a1,$a2,"compare","value");
echo "<pre>";
print_r($newarray);
echo "</pre>";

?>