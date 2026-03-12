<?php

    $friends = ["friend 1" => 50,
                "friend 2" => 80,
                "friend 3" => 500,
                "friend 4" => 800,
                "friend 5" => 50,
                "friend 6" => 80,
    ];

    $totaldebt = 0;

    foreach($friends as $name => $owed){
        $totaldebt = $totaldebt + $owed;

        if($owed > 100)
            echo "<b>$name owes you a lot! <u> $owed DH </u></b><br>";
        else
            echo "$name owes you $owed DH <br>";
    }

    echo "-----------------------<br>";
    echo "Total money owed : $totaldebt DH <br>";
?>