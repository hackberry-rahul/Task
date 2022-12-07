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
                function Addition(int $a, int $b){
                    return $a + $b;
                }
                function Subtraction(int $a, int $b){
                    return $a - $b;
                }
                function Multification(int $a, int $b){
                    return $a * $b;
                }
                function Divition(int $a, int $b){
                    return $a / $b;
                }
                $add = Addition("10","2");
                $sub = Subtraction("10","2");
                $multi = Multification("10","2");
                $divi = Divition("10","2");
                echo "A + B = $add";
                echo"<br/>";
                echo "A - B = $sub";
                echo"<br/>";
                echo "A * B = $multi";echo"<br/>";
                echo "A / B = $divi";echo"<br/>";
            ?>
        </div>
        <div>
            <!-- <?php 
                function loops(int $m){
                    echo "<br> $m";
                    $m=$m+1;
                    
                    if($m==11){
                   
                        return $m;
    
                       }
                    loops($m);
                   
                }
           //     loops(0);
                echo loops(1);
               

            ?> -->
        </div>
        <div>
       <?php 
                function loop($m,$n=1){
                  //  echo "<br> $n";
                    $m=$m+1;
                    $n=$m+$n;
                    if($m==10){
                        
                        return $n;
                       }
                      
                       echo loop($m,$n);
                   
                }
               
               $r=loop(1);
               // echo"total $r";
               

            ?>  
        </div>
    </div>
</div>

<?php
include("./mytheam/footer.php");
?>