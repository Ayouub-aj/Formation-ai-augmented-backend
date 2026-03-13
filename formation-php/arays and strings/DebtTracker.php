<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="margin-top: 20px; line-height: 1.6;">

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
            echo "<b style='color: red;'> $name owes you <u> $owed DH </u></b><br>";
        else
            echo "$name owes you $owed DH <br>";
    }

    echo "-----------------------<br>";
    echo "Total money owed : $totaldebt DH <br>";
?>
    </div>
    
</body>
</html>
