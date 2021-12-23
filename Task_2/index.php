<?php
function countDaysToBirthday():int
{
    $dateNow = new DateTime("now");
    $dateBirthday = new DateTime("2021-12-29");
    $interval = $dateNow->diff($dateBirthday);
    return $interval->days;
}

echo 'осталось ' . countDaysToBirthday() . 'дня(-ей/день)';
