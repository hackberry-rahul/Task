<?php
$a=[ 'orange',' banana',' apple'];

$new = array_reduce($a , 'myfun',"mengo");
function myfun($n , $m){
    return $n . "-". $m;

}

echo "<pre>";
print_r($new);
echo "</pre>";


?>