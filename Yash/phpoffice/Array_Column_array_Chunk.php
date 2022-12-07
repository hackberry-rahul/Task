<?php
$array = array(
    array(
        "id"=>2001,
        "first_name"=>"yash",
        "last_name"=>"patel"
    ),
    array(
        "id"=>2002,
        "first_name"=>"Rishi",
        "last_name"=>"Shah"

    ),
    array(
        "id"=>2003,
        "first_name"=>"bhavau",
        "last_name"=>"chaudhary"

    )

    
    );

    $new = array_column($array,"first_name");
    echo "<pre>";
    print_r($new);
    echo "</pre>";

    $new2 = array_chunk($array,2);
    echo "<pre>";
    print_r($new2);
    echo "</pre>";


?>