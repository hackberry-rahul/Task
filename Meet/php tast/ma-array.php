<?php
$marks = [
    "meet" => [
        "php" => 76,
        ".net" => 78,
        "c++" => 74
    ],
    "n meet" => [
        "php" => 73,
        ".net" => 76,
        "c++" => 77
    ],
    "yesh" => [
        "php" => 76,
        ".net" => 78,
        "c++" => 76
    ],
];
echo "<table border='2px> cellpadding='5px' cellspacing='0'
        <tr>
        <th>studant name</th>
        <th>php</th>
        <th>.net</th>
        <th>c++</th>
        </tr>";
foreach ($marks as $key => $v1) {
    echo "<tr>";
    echo "<td> $key </td>";
    foreach ($v1 as $key => $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<pre>";
print_r($marks);
echo "</pre>";
?>