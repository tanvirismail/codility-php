<?php


function solution($A){
	// 66%
	return @array_flip(array_count_values($A))[1];
	
	// 100%
	$array = array_count_values($A);
	asort( $array );
	$array = array_map( function($var){ return  $var % 2 != 0 ;}, $array);
	$array = array_filter($array);
	return key($array);
}

echo '<pre>';
print_r( solution([9,3,9,3,9,7,9]) );




