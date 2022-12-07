<?php
include("./mytheam/header.php");
define("HELLO", "Hello welcome to MY Page of Patten !!!!!");
?>


<div class="card">
    <div class="card-header">
        <h2><b> <?php echo HELLO; ?></b></h2>
    </div>
    <div class="card-body">
        <div>

            <?php
            $m=1;
            for ($i=1; $i<=5 ; $i++) {
                for ($j=1; $j <=5-$i ; $j++) { 
                    echo "&nbsp;&nbsp;";
                    
                } 
                for ($k=0; $k <$i ; $k++) { 
                    echo "$m &nbsp;&nbsp;";
                    $m++;
                }
                echo" <br>";
            }
            
           
            
            
            ?>
        </div>
    </div>
</div>



<?php
include("./mytheam/footer.php");
?>