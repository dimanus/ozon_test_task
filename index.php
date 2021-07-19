<?php

function findUnsortedSubarray(array $arr)
{
    $sort = $arr;
    $min = -1;
    $max = -1;
    sort($sort, SORT_NATURAL);
    $spaces = [];
    foreach ($arr as $num => $item) {
        if ($item !== $sort[$num]) {
            $spaces[$num] = $item;
        }
    }
    if ($keys = array_keys($spaces)) {
        $min = min($keys);
        $max = max($keys);
    }

    return [$min, $max];
}

print_r(findUnsortedSubarray([1, 2, 3, 101, 4, 5]));
print_r(findUnsortedSubarray([1, 4, 3, 2, 3, 4]));
print_r(findUnsortedSubarray([1, 2, 3]));
