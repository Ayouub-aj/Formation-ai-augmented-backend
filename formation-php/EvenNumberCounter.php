<?php
    $counter = 1;
    $evennumbers = 0;
    
    while($counter <= 50){
        if($counter % 2 == 0)
            {
                $evennumbers = $counter / 2;
            }
            $counter++;
    }
    echo"Total even numbers: $evennumbers";
?>