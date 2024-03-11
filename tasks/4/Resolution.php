<?php

function getNeighboursSum(array $matrix, int $row, int $col): float|int
{
    $neighboursSum = 0;
    $rowsCount = count($matrix);
    $colsCount = count($matrix[0]);

    if ($row < 0 || $row >= $rowsCount || $col < 0 || $col >= $colsCount) {
        return -1;
    }

    for ($i = $row - 1; $i <= $row + 1; $i++) {

        for ($j = $col - 1; $j <= $col + 1; $j++) {
            if (($i === $row && $j === $col) || ($i !== $row && $j !== $col)) {
                continue;
            }

            if ($i >= 0 && $i < $rowsCount && $j >= 0 && $j < $colsCount) {
                $neighboursSum += $matrix[$i][$j];
            }
        }
    }

    return $neighboursSum;
}

$matrix = [
    [51, 71, 1, 50],
    [13, 5, 19, 11],
    [60, 4, 11, 20],
    [13, 34, 17, 0],
    [16, 53, 1, 32],
];

$row = 3;
$col = 2;

$neighboursSum = getNeighboursSum($matrix, $row, $col);

echo "Сумма соседей элемента ($row, $col): $neighboursSum";
