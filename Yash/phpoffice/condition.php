<?php 
include ("./mytheam/header.php");
define("HELLO","Hello welcome to MY Page of Conditons !!!!!");
$age=50;

?>

<div class="card">
    <div class="card-header">
       <h2><b> <?php  echo HELLO ;?></b></h2>
    </div>
    <div class="card-body">
        <div>
        <p> 1. Your are a <?php 
        if($age<=40){
            echo "Young";
        }else{
            echo "old";
        }
        

        ?></p></div>

       <div>
        <p> 2. 
        <?php
            if ($age<=17) {
                echo "you are Teenager";
            }elseif($age>=18 && $age<=40){
                echo "you are Young";

            }elseif ($age>40 AND $age<=100) {
                echo "you are old";
            }else{
                echo "you are Immortal😂";
            }

        ?></p>
       </div> 
    </div>
</div>


<?php
 include ("./mytheam/footer.php");
?>