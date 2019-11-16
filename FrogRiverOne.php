<?php

function solution($X, $A){
	
	// 81
	// $array = array_filter( array_unique($A) , function($var) use ($X) { return  $var<=$X;});
	// if(  count($array) == $X ){
		// end($array);
		// return key($array);
	// } else {
		// return (int) -1;
	// }
	
	
	// 100
	$existingLeaves = array();
	for($i=0;$i<count($A); $i++){
		if(!isset($existingLeaves[$A[$i]]) && $A[$i]<=$X){
			$existingLeaves[$A[$i]] = $A[$i];
			if(count($existingLeaves)==$X){
				return $i;
			}
		}
	}
	return -1;
	
	
	
}

# test 1
$A = [1, 3, 1, 4, 2, 3, 5, 4];
$X = 5;


echo '<pre>';
print_r(solution($X,$A));




/**



**/
