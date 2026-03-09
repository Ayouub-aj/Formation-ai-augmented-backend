<?php
    function manualreverse($text)
    {

        $indexcounter = strlen($text) -1 ;

        while($indexcounter >= 0){
            echo $text[$indexcounter];
            $indexcounter--;
        }


    }
    manualreverse("hello");
?>