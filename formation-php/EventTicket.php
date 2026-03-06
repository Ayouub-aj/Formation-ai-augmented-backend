<?php
    $age = 42;
    $price = 20;
    
    if($age < 12)
        echo "your age is $age you have to pay : 20 DH\nSpecial: Children's Menu included! \n";
    elseif($age >= 12 && $age <= 18)
        echo "your age is $age have to pay : 40 DH\n";
    elseif($age >= 60)
        echo "your age is $age you have to pay : 30 DH (seniors discount!)\n";
    else
        echo "your age is $age you have to pay : 60 DH\n";
?>