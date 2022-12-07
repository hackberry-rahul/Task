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
                   <h4>Indexed Arrays</h4>
                   <?php 
                        $car=array('Volvo','BMW','Tesla','Ford','Meserati');
                        foreach ($car as $key) {
                            # code...
                            echo "$key <br/>";
                        }
                        echo " I like $car[4]";
                   ?>
                </div>
                <div class="col">
                    <h4>Associative Arrays</h4>
                    <?php 
                        $age=array('Yash'=>'22','Meet'=>'23','Bhavu'=>'24','Kiran'=>'18');
                        foreach ($age as $key => $value) {
                            echo "Your Name is $key and your Age is $value . <br/>";
                            # code...
                        }

                    ?>
                </div>
                <div class="col">
                    <h4>Multidimensional Arrays</h4>
                    <?php 
                        $cars=array(
                            array("Volvo",20,40),
                            array("BMW",50,30),
                            array('Tesla',10,50),
                            array('Ford',40,60),
                            array('Meserati',10,20)  
                        );
                        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
                        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
                        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
                        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
                        echo $cars[4][0].": In stock: ".$cars[4][1].", sold: ".$cars[4][2].".<br>";

                        foreach ($cars as $key => $value) {
                            foreach ($value as $ke => $val) {
                                echo " $val ";
                            }
                            echo "<br>";
                        }

                        // for($row=0;$row < 5;$row++){
                        //     for ($col=0; $col < 3 ; $col++) { 
                        //         echo " ".$cars[$row][$col]."<br/>";
                        //     }
                        // }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include("./mytheam/footer.php");
?>