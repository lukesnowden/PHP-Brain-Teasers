<?php
function solution($array) {
    return max(array_count_values($array));
}
var_dump(solution([1, 1, 3, 4, 5, 5, 5, 6, 7, 5, 4, 6, 4, 5]));