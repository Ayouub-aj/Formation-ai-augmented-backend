<?php

$NumberOfCups = 7;
$PricePerCup = 5;
$IsStudent = true;
$DiscountApplied = 0.20; //0.20 is 20 percent

$total = $NumberOfCups * $PricePerCup;

if ($NumberOfCups > 5) {
    $total = ($PricePerCup * $NumberOfCups) - $NumberOfCups;
}

if($IsStudent == true) {
    $totalAfterDiscount = $total * $DiscountApplied;
    $total = $total - $totalAfterDiscount;
}

echo "Total cups    : " . $NumberOfCups . "\n";
echo "price per cup : " . $PricePerCup . "\n";
echo "student's discount : " . $DiscountApplied *100 . "%\n";
echo "Total Price   : " . $total . " DH";

?>