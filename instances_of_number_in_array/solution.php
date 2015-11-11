<?php
function solution($array) {
	$array = array_count_values( $array );
	asort( $array );
    return end( array_flip( $array ) );
}
var_dump(solution([1, 3, 4, 6, 7, 7, 7, 7, 7, 5, 4, 6, 4, 5]));