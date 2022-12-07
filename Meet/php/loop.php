<?php
echo"while loop <br>"; 
$a=1;
$car = array("Ciaz","baleno","s cross","grand vitara");
$cars = array("Ciaz"=>"1000000","baleno"=>"800000","s cross"=>"900000","grand vitara"=>"1200000");
$m=1;
while ($a <= 10) {
    echo"the number is:$a<br>";
    $a++;
}
$a=0;
echo"<br>";
echo"do while loop <br>";
do {
    echo"the number is: $a <br>";
    $a++;
} while ($a <= 20);
echo"<br>";
echo"for loop <br>";
for ($a=0; $a <=10 ; $a++) { 
    echo("the number is: $a <br>");
}
echo"<br>";
echo"foreach loop <br>";
foreach ($car as $value) {
    echo"$value <br>";
}
echo"<br>";
foreach ($cars as $key => $value) {
    echo"$key = $value <br>";
}

for ($i=5; $i >=1; $i--)
 {

    for ($j=0; $j<$i; $j++) { 
        echo"*";
        
    } 
    echo"<br>";
}
echo"<br>";
if (3<4) {
    echo"true";
    
}
else
{
    echo"fols";
}
echo"<br>";
$m=15;
for ($i=5; $i >=1; $i--)
 {

    for ($j=0; $j<$i; $j++) { 
        echo"$m";
        $m--;
        
    } 
    echo"<br>";
}

?>
