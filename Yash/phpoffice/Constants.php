<?php 
include ("./mytheam/header.php");
define("HELLO","Hello welcome to MY Page");
define("NUMBER","8849284774");
$x=10;
$y=5;

?>

<div class="card">
    <div class="card-header">
       <h2><b> <?php  echo HELLO ;?></b></h2>
    </div>
    <div class="card-body">
        <div class="text-center">
        <p>Hello, My Number is : <?php echo NUMBER; ?></p>
        </div>
        <div>
            <ul>
                <li>x+y = <?php echo $x+$y;?> </li>
                <li>x-y = <?php echo $x-$y;?> </li>
                <li>x*y = <?php echo $x*$y;?> </li>
                <li>x/y = <?php echo $x/$y;?> </li>
                
            </ul>
        </div>
    </div>
</div>


<?php
 include ("./mytheam/footer.php");
?>