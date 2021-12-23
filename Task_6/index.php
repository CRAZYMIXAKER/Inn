<?php

function getAllFirstMonday(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): array
{
    $count = 0;
    $dateString = 'first ' . $day . ' of ' . $year . '-' . $month;
    $lastDateString = 'last ' . $day . ' of ' . $lastYear . '-' . $lastMonth;

    $startDay = new \DateTime($dateString);
    $finishDay = new \DateTime($lastDateString);

    $days = array();

    while ($startDay->format('Y-m') <= $finishDay->format('Y-m')) {
        if ($startDay->format('D') == 'Mon') {
            $days[] = clone ($startDay);
            $count ++;
        }
        $startDay->modify('+ 1 month');
    }
    $days['count'] = $count;

    return $days;
}

$days = getAllFirstMonday(1900, 1999, 01, 12);

echo "Количество понедельников: ". $days["count"]. "</br>";
foreach ($days as $key => $day) {
    if ($key != "count") {
        echo $day->format('d.m.Y') . '<br />';
    }
}
