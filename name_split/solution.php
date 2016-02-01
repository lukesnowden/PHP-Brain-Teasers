<?php
function solution( $string ) {
    $split = explode( ' ', trim( preg_replace( "#^m(?:r|rs|s|iss|adam)|dr|sir\s#i", '', trim( $string ) ) ) );
	return [
		'forename' => array_shift( $split ),
		'surname' => array_pop( $split ),
		'middle' => implode( ' ', $split )
	];
}

print_r( nameSplit( 'Sir Michael Terence Wogan' ) );