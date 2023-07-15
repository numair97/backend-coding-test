<?php

$arr = [2, 3, 1, 2, 3, 6, 7, 6];
$duplicateElements = findDuplicates($arr);

print_r($duplicateElements);

function findDuplicates($arr)
{
    $duplicates = [];
    $counts = array_count_values($arr);

    foreach ($counts as $element => $count) {
        if ($count > 1) {
            $duplicates[] = $element;
        }
    }

    return $duplicates;
}

