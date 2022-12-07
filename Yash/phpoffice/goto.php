<?php 
    $i=1;

    for ($i=0 ; $i < 6 ; $i++ ) { 
        # code...
        if($i==4){
            goto four;
        }
        echo "your value is less than or Greter than 4:............. <br>";
    }
    echo "hello<br>";
    four:
echo"your value is 4";
?>