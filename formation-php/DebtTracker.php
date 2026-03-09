<?php

    // $friends =[
    //     "friend1" => 10,
    //     "friend2" => 10,
    //     "friend3" => 10,
    //     "friend4" => 10,
    //     "friend5" => 10
    //     ];

    // foreach($friends as $name => $debt)
    //     echo $name. " " .$debt. "\n";
    // print_r($friends);

    $friends = ["ayoub", "younes", "yassine"];

    $len = count($friends);
    for ($index = 0; $index <= $len; $index++) { 
        echo $friends[$index]. "\n";
    }
?>