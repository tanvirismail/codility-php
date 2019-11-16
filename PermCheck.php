<?php

function solution($A){
	# 83
	// sort($A);
	// ( $A !== range(1, max($A)) ) ? $return = 0 : $return = 1;
	// return $return;
	
	# 100
	sort($A);
	for($i=0; $i<count($A); $i++){
		if($A[$i]!=$i+1){
			return 0;
		}
	}
	return 1;
}

# test 1
$A = [4,1,3];


echo '<pre>';
print_r(solution($A));




/**
npr = n! / (n-r)!


**/
