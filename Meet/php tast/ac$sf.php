<?php
$food = array('orange','banana','apple','grapes');
/*$food = array(
    'fruits' => array('orange','banana','apple','grapes'),
    'veggie' => array('carrot','collard','pea') 
);*/
/*$len = count($food);
for($i = 0; $i < $len; $i++){
    echo $food[$i] . "<br>";
}*/
echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";  
?>