<?php

function solution($A, $K){
	// 87%
	for($i=0;$i<$K;$i++){
		$last = end($A);
		array_pop($A);
		array_unshift($A, $last);
	}
	return $A;
	
}

# test 1
// $A = [3, 8, 9, 7, 6];
// $K = 3;
# test 2
$A = [1, 2, 3, 4];
$K = 4;
echo '<pre>';
print_r(solution($A, $K));



