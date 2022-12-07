<?php 
$a=20;
$b="hello world";
$c=10;
$age=101;
echo"hello world";
echo"<br>";
echo $a;
echo"<br>";
echo $b;
echo"<br>";
define("HELLO","welcom to the page");
echo HELLO;
echo"<br>";
echo "a+c=",$a+$c;
echo"<br>";
echo "a-c=",$a-$c;
echo"<br>";
echo "a*c=",$a*$c;
echo"<br>";
echo "a/c=",$a/$c;
echo"<br>";
if($age<=40)
{
    echo("you are young");
}
else{
    echo("you are old");
}
echo"<br>";
if($age<=17)
{
    echo("you are teenager");
}
elseif($age>=18 and $age<=40)
{
    echo("you are young");
}
elseif($age>=40 and $age<=60)
{
    echo("you are old");
}
elseif($age>=60 and $age<=100)
{
    echo("you are vary old");
}
else
{
    echo("you are immortal");
}


?>