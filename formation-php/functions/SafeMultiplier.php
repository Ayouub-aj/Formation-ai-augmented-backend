<?php
    
    function multiplyNumbers($a, $b){
        // if(gettype($a) === "integer" && gettype($b) === "integer") if you only want to check for integers
        //     echo $a * $b;
        if(is_numeric($a) && is_numeric($b))
            echo $a * $b;
        else
            echo "Error: Invalid Input.<br>";
    }

    multiplyNumbers(5.3, 10);
    echo"<br>";
    multiplyNumbers(5, "apple");

?>