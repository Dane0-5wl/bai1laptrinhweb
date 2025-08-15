<?php
function findMax($arr) {
    return max($arr);
}

function findMin($arr) {
    return min($arr);
}

function sumArray($arr) {
    return array_sum($arr);
}

function isInArray($arr, $value) {
    return in_array($value, $arr);
}

function sortArrayAsc($arr) {
    sort($arr);
    return $arr;
}
?>
