<?php
function solution($string) {
	return ucfirst( $string )[0] === $string[0];
}

var_dump(solution('Dave'));