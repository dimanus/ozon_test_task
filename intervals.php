<?php
//VK test task, find intervals

function findIntervals(array $array): array
{
    $result = [];
    $min = min($array);
    $max = max($array);
    $interval_num = 0;
    for ($i = $min; $i <= $max; $i++) {
        if (in_array($i, $array)) {
            $result[$interval_num][] = $i;
        } else {
            $interval_num++;
        }
    }
    if ($result) {
        $result = array_map(
            function ($item) {
                if (count($item) == 1) {
                    return $item;
                }
                return [min($item), max($item)];
            },
            $result
        );
    } else {
        $result = [-1, -1];
    }

    return $result;
}

print_r(findIntervals([3, 4, 5, 7, 8, 10, 11, 12]));
print_r(findIntervals([3, 4, 5, 7, 8, 10, 12]));
print_r(findIntervals([1, 1]));