<?php
#$fruits = ['orange','banana','apple','grapes'];
#$veggie = ['carrot','pea'];
#$color = ['rad','green','blue'];

#$fruits = ['a'=>'orange','b'=>'banana','c'=> 'apple','d'=>'grapes'];
/*$veggie = ['a'=>['color'=>['rad','blue','green']],
           'f'=>'pea',
           32,
           73
          ];
$newarray = array_merge_recursive($fruits,$veggie);
//$newarray = $fruits + $veggie;*/
$name = array("meet","nmeet","raj");
$age = array("23","24","21");
$newarray = array_combine($name,$age);
echo"<pre>";
print_r($newarray);
echo"</pre>";
?>