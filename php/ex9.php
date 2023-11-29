<?php

function removeZeros($number) { 
    return (int)str_replace('0', '', $number); 
}

function f2($year) { 
    return (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0); 
}
echo f2(2023);