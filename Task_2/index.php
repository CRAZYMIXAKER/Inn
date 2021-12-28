<?php

function countDaysToBirthday($dateBirthday)
{
    return date_diff(new DateTime("00:00"), new DateTime($dateBirthday))->days;
}

echo countDaysToBirthday("2021-12-31") . ' day(-s) left until birthday';
