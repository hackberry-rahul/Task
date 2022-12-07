<?php
include("./mytheam/header.php");
define("HELLO", "Hello welcome to MY Page of All Array !!!!!");
?>

<div class="card">
    <div class="card-header">
        <h4><b> <?php echo HELLO; ?></b></h4>
    </div>
    <div class="card-body">


        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Foreach Loop with List </h2>
                    <?php

                    $emp = [
                        [1, "YAsh", "Manager", 50000],
                        [2, "Meet", "Saleman", 20000],
                        [3, "KIran", "Computer Operator", 12000]
                    ];


                    echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
        <tr>
            <th>EMP ID</th>
            <th>Name</th>
            <th>POst</th>
            <th>Salary</th>

        </tr>
        
        ";
                    foreach ($emp as list($id, $name, $post, $salary)) {

                        echo "<tr>
            
                <td>$id</td>
                <td>$name</td>
                <td>$post</td>
                <td>$salary</td>
            
            
            </tr>";
                    }

                    echo "</table>";



                    ?>
                </div>
                <div class="col">
                    <h2>Associative list with loops</h2>
                    <?php
                    $emps = [
                        [
                            "Id" => 1,
                            "Name" => "Yash",
                            "Post" => "Manager",
                            "Salary" => 50000
                        ],
                        [
                            "Id" => 2,
                            "Name" => "Meet",
                            "Post" => "Saleman",
                            "Salary" => 20000
                        ],
                        [
                            "Id" => 3,
                            "Name" => "KIran",
                            "Post" => "Computer Operator",
                            "Salary" => 12000
                        ],
                        [
                            "Id" => 4,
                            "Name" => "bhavu",
                            "Post" => "Manager",
                            "Salary" => 50000
                        ]
                    ];

                    echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
        <tr>
            <th>EMP ID</th>
            <th>Name</th>
            <th>POst</th>
            <th>Salary</th>

        </tr>
        
        ";
                    foreach ($emps as list("Id" => $id, "Name" => $name, "Post" => $post, "Salary" => $salary)) {

                        echo "<tr>
            
                <td>$id</td>
                <td>$name</td>
                <td>$post</td>
                <td>$salary</td>
            
            
            </tr>";
                    }

                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>



    </div>
</div>


<?php
include("./mytheam/footer.php");
?>