<?php
function getZodiacalSign($month, $day) {
$signs = array("Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец");
$signsstart = array(1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23);
return $day < $signsstart[$month + 1] ? $signs[$month - 1] : $signs[$month % 12];
}
echo getZodiacalSign(7, 23);