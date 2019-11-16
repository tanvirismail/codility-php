<?php

function solution($N){
	# solution 1
	$bin=trim(decbin($N), "0");
	$explode = array_map('strlen', explode('1', $bin));
	return max($explode);
	
	# solution 2
	// $bin=trim(decbin($N), "0");
	// $explode = array_filter(explode('1', $bin), function($var){return $var == '0';} );
	// $max=0;
	// foreach($explode as $value){
		// if(strlen($value)>$max){
			// $max=strlen($value);
		// }
	// }
	// return $max;
}
print_r(solution(529));




