<?php  
function writemsg()
{
echo"hello world";
}
writemsg();
echo"<br>";
echo"<br>";

/*function familyname($fname)
{
    echo"$fname patel.<br>";
}
familyname("meet");
familyname("raj");
familyname("mhanis");
familyname("khrisna");
familyname("utshav");
familyname("uttam");
familyname("hari");
familyname("rajni");
echo"<br>";
echo"<br>";*/

function familyname($name,$year)
{
    echo"$name patel. born in $year <br>";
}

familyname("meet","1999");
familyname("raj","1999");
familyname("mhanis","1998");
familyname("khrisna","1998");
familyname("utshav","2004");
familyname("uttam","2000");
familyname("hari","2006");
familyname("rajni","1996");
echo"<br>";
echo"<br>";

function setheight($minheight = 40)
{
    echo"the height is : $minheight <br>";
}
setheight(350);
setheight();
setheight(100);
setheight(200);
echo"<br>";
echo"<br>";
function sum($a=5,$b=10)
{
    echo"a+b=",$a+$b; 
}
sum(20,30);
echo"<br>";
echo"<br>";

function div($c=5,$d=10)
{
    echo"c/d=",$c/$d; 
}
div(1735,5);
echo"<br>";
echo"<br>";

function ere($e=20,$f=5)
{
    echo"e-d=",$e-$f;
}
ere(627,367);
echo"<br>";
echo"<br>";

function m($r=20,$l=5)
{
    echo"e-d=",$r-$l;
}
m(627,367);
echo"<br>";
echo"<br>";


function mul($g=5,$h=10)
{
  
    return $g*$h;
}
echo mul(50,50);
echo"<br>";
echo"<br>";

function dev($u=6,$o=90)
{
    return $u/$o;
}
echo dev(876,5);
echo"<br>";
echo"<br>";

function k($t=93,$s=37)
{
    return $t-$s;
}
echo k();
echo"<br>";
echo"<br>";

function s($p=38,$q=43)
{
    return $p+$q;
}
echo s();
echo"<br>";
echo"<br>";

function q($n,$m=1)
{
    echo "<br>N=",$n;
    echo "<br>M=",$m;
    $n++;
    $m=$m+$n;
    if ($n==10)
    {  echo"<br>Total=".$m.""..;
        return $m;
    }
    q($n,$m);
}

echo q(1);
echo"<br>";
echo"<br>";

function mm($mn)
{
    echo "<br>",$mn;
    $mn--;
    if ($mn==0) {
        return $mn;
    }
    mm($mn);
}
echo mm(10)
?>