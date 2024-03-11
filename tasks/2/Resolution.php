<?php
function countTuesdaysBetweenDates(string $startDate, string $endDate): int
{
    try {
        $start = new DateTime($startDate);
        $end = new DateTime($endDate);
    } catch (Exception $e) {
        return 0;
    }
    $start->modify('next tuesday');
    $end->modify('last tuesday');

    $interval = DateInterval::createFromDateString('1 week');
    $period = new DatePeriod($start, $interval, $end);

    $count = $start == $end ? 1 : 0;
    foreach ($period as $date) {
        $count++;
    }

    return $count;
}


$startDate = '2024-03-03';
$endDate = '2024-03-11';

echo countTuesdaysBetweenDates($startDate, $endDate);