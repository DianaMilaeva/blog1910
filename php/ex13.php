<?php
function f3() { 
    $lastDayOfMonth = date('t'); 
    $currentDay = date('j'); 
 
    return $lastDayOfMonth - $currentDay; 
}
echo f3();