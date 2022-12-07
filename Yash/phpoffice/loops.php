<?php
include("./mytheam/header.php");
define("HELLO", "Hello welcome to MY Page");
?>
<div class="card">
    <div class="card-header">
        <h2><b> <?php echo HELLO; ?></b></h2>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>while loop</h4>
                    <?php
                    $x = 0;

                    while ($x <= 100) {
                        echo "The numbre is : $x <br>";
                        $x += 10;
                    }
                    ?>
                </div>
                <div class="col">
                    <h4>For loop</h4>
                    <?php

                    for ($i = 1; $i <= 10; $i++) {
                        echo "The numbre is : $i <br>";
                    }
                    ?>
                </div>
                <div class="col">
                    <h4>Foreach loop</h4>
                    <?php
                    $name = array("Yash", "Meet", "kiran", "Bhavu");
                    $age = array("Yash" => "22", "Meet" => "26", "kiran" => "18", "Bhavu" => "23");

                    foreach ($name as $value) {
                        echo "$value <br>";
                    } ?>
                    <br>
                    <h6> Age loop</h6>
                    <?php foreach ($age as $key => $value) {
                        echo "$key = $value <br> ";
                    }
                    ?>

                </div>
                <div>
                <?php  
                    $a=15;
                        for ($i=5; $i>=1 ; $i--) { 
                            for ($j=1; $j <=$i ; $j++) { 
                                echo $a;
                                $a--;   
                            }
                            echo "<br>";
                        }
                    ?>
                </div>
                <!-- <div>
                    <?php 
                    $a=1;
                    for ($i=1; $i<=5 ; $i++) { 
                        for ($j=1; $j<$i; $j++) { 
                            echo $a;
                            $a++;
                        }
                        
                        echo "<br>";
                    }

                    ?>  -->
                    
                </div>
                <div><br><br><br><br><br><br><br>

                    <?php 
                    
                     for ($i=5; $i>=1 ; $i--) { 
                        for ($j=0; $j<$i ; $j++) { 
                           echo " *";
                        }   
                        echo "<br>";                
                     }
                    ?>
                </div>

            </div>
        </div>




    </div>
</div>




<?php
include("./mytheam/footer.php");
?>