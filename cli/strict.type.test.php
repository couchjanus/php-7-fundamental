#!/usr/bin/php
<?php
// cli/strict.type.test.php 
declare(strict_types=1);

function sum(int $a, int $b) {
   return $a + $b;
}

var_dump(sum(1, 2));
// var_dump(sum(1.5, 2.5));



function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}

print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));