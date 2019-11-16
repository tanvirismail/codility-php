<?php

function solution($A){
	// 
	sort($A);
	for($i=0;$i<count($A); $i++){
		if($A[$i]!=$i+1){
			return $i+1;
		}
	}
	return count($A)+1;
	
}

# test 1

$A = [2, 3, 1, 5];


echo '<pre>';
print_r(solution($A));



