<?php 
include ("./mytheam/header.php");
define("HELLO","Hello welcome to MY Page");
$colour="blue";

?>

<div class="card">
    <div class="card-header">
       <h2><b> <?php  echo HELLO ;?></b></h2>
    </div>
    <div class="card-body">
        <div class="text-center">
            <?php  
                switch ($colour) {
                    case 'red':
                        echo "Your favorite color is red!";
                        break;
                    case 'blue':
                        echo "Your favorite color is Blue!";
                        break;
                     case 'Yellow':
                        echo "Your favorite color is Yellow!";
                        break;
                    
                    default:
                        echo "You don't have any favorite color???";
                        break;
                }
            ?>
        
        </div>

    </div>
</div>


<?php
 include ("./mytheam/footer.php");
?>