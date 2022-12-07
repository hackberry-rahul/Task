<?php
include("./mytheam/header.php");
define("HELLO", "Hello welcome to MY Page of All Array !!!!!");
?>

<div class="card">
    <div class="card-header">
        <h4><b> <?php echo HELLO; ?></b></h4>
    </div>
    <div class="card-body">
        <h2>Multidimensional Associative Array </h2>
        <?php

        $marks = [
            "yash" => ["PHP" => 28, "JAVA" => 29, "CPD" => 26],
            "rushabh" => ["PHP" => 26, "JAVA" => 29, "CPD" => 24],
            "zeel" => ["PHP" => 22, "JAVA" => 26, "CPD" => 21]
        ];
        echo count($marks, 1);
        echo "<table border='2px'cellpadding='5px' cellspacing='0'>
        
            <tr>
                <th>Student Name</th>
                <th>PHP</th>
                <th>JAVA</th>
                <th>CPD</th>
            </tr>
        
        ";

        foreach ($marks as $key => $value) {
            echo "<tr>
                    <td> $key</td>";
            foreach ($value as  $val) {

                echo "<td>$val</td>";
            }
            echo "<br>";
            echo "</tr>";
        }
        echo "</table>";
        ?>

        <?php

        $arrayl = array("a" => array("red"), "b" => array("green", "pink"));
        $array2= array("a"=>array("yellow"), "b"=>array("black"));
        $newArray= array_replace_recursive($arrayl, $array2);

        echo "<pre>" ;
        echo print_r($newArray);
        echo "</pre>" ;
        
        ?>
    </div>
</div>


<?php
include("./mytheam/footer.php");
?>