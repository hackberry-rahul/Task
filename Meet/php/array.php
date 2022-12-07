<h4> indexed array</h4>
<?php 
$cars = array("bmw","audi","tesla");
echo "i like ". $cars[0]." , ". $cars[1]." and " . $cars[2].".";
echo"<br>";
echo"<br>";

$age = array("meet"=>"23","yesh"=>"22","raj"=>"24","parth"=>"25");
foreach($age as $m => $m_value){
    echo "key=" . $m . ", value" . $m_value;
    echo "<br>";
}
echo"<br>";
echo"<br>";

$gadi = array(array("bmw",24,56),array("audi",34,27),array("tesla",46,50),array("land rover",26,13));
echo $gadi[0][0]." : in stock  ". $gadi[0][1]." sold : ". $gadi[0][2]."<br>";
echo"<br>";
echo $gadi[1][0]." : in stock  ". $gadi[1][1]." sold : ". $gadi[1][2]."<br>";
echo"<br>";
echo $gadi[2][0]." : in stock  ". $gadi[2][1]." sold : ". $gadi[2][2]."<br>";
echo"<br>";
echo $gadi[3][0]." : in stock  ". $gadi[3][1]." sold : ". $gadi[3][2]."<br>";
echo"<br>";
echo"<be>";



$car = array(array("bmw",24,56),array("audi",34,27),array("tesla",46,50),array("land rover",26,13));
for ($row = 0; $row < 4  ; $row++) { 
    echo"<p><b> row number $row</b></p>";
    echo"<ul>";
    for ($col = 0; $col < 3 ; $col++) { 
        echo"<li>".$car[$row][$col]."</li>";
    }
    echo"</ul>";
}
?>