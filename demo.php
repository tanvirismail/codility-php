<?php

function solution($A){
	
	$A = array_unique($A);
	sort($A);
	
	for($i=0;$i<count($A); $i++){
		if($A[$i]!=$i+1){
			return $i+1;
		}
	}
	return count($A)+1;
}

# test 1
$A = [1, 3, 6, 4, 1, 2,5];
$A = [-1,-3];


echo '<pre>';
print_r(solution($A));




/**
Write a function:

function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000].

**/
