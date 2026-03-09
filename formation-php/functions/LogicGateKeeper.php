<?php
    function isAdult($age){
        if($age >= 18)
            return true;
        else
            return false;
    }

    $age = 18;

    if(isAdult($age) == true)
        echo"Access Granted!";
    elseif(isAdult($age) == false)
        echo "Access Denied!";
?>