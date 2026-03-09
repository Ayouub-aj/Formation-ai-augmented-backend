<?php
    function CalculateArea($width, $height){
        $area = $width * $height;
        return $area;
    }
    $totalarea = CalculateArea(10, 10);
    echo "The total area is $totalarea square units.";
?>