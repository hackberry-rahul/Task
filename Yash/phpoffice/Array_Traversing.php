<?php

$a = ["Sanjay","Aman","Rehman","Karan"];



echo "<b>Current : </b>". current($a)."<br>";
echo"<b>Key : </b>" .key($a)."<br>";
echo"<b>Pos :</b>" .pos ($a)."<br>";




next ($a) ;
echo "<b>Current :</b>".current($a)."<br>";

next ($a) ;
echo "<b>Current :</b>".current($a)."<br>";

prev($a) ;
echo "<b>Current :</b>".current($a)."<br>";

end($a) ;
echo "<b>Current :</b>".current($a)."<br>";



?>