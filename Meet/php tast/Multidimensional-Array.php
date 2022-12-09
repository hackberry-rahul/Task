<?php
$emp = [
    [1,"patel meet","ceo",100000],
    [2,"nayak meet","cfo",80000],
    [3,"patel yash","manager",71000],
    [4,"patel raj","hr",50000],
];
echo $emp[0][0] . " ";
echo $emp[0][1] . " ";
echo $emp[0][2] . " ";
echo $emp[0][3] . " ";
echo "<br>";
echo $emp[1][0] . " ";
echo $emp[1][1] . " ";
echo $emp[1][2] . " ";
echo $emp[1][3] . " ";
echo "<br>";
echo $emp[2][0] . " ";
echo $emp[2][1] . " ";
echo $emp[2][2] . " ";
echo $emp[2][3] . " ";
echo "<br>";
echo $emp[3][0] . " ";
echo $emp[3][1] . " ";
echo $emp[3][2] . " ";
echo $emp[3][3] . " ";
echo "<br>";
echo "<br>";
for ($row = 0; $row < 4; $row++){
    for ($col = 0; $col < 4; $col++){
        echo $emp[$row][$col] . " ";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<table border='2px' cellspadding='5px' cellspacing='5px'>";
echo "<tr>
        <th>emp id.</th>
        <th>emp name</th>
        <th>desighation</th>
        <th>salary</th>
</tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<pre>";
print_r($emp);
echo "</pre>";
?>