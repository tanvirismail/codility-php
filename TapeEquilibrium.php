<?php

function solution($A){
	# 53
	// $n = count($A);
	// $result=[];
	// for($i=1;$i<=($n-1);$i++){
		// $first = array_slice($A, 0, $i );
		// $second = array_slice($A, $i, ($n-$i) );
		// $result[] = abs(array_sum($first) - array_sum($second));
	// }
	// return min($result);
	
	# 53
	// $n = count($A);
	// $result=[];
	// for($p=1;$p<=($n-1);$p++){
		// $first=$second=0;
		// foreach($A as $k=>$v){
			// if($k >= 0 && $k <= ($p-1) ){
				// $first += $v;
			// }
			// if($k >= $p && $k <= ($n-1) ){
				// $second += $v;
			// }
		// }
		// $result[] = abs($first - $second);
	// }
	// return min($result);
	
	# 100
	$n = count($A);
	$result=[];
	$first=0;
	$second=array_sum($A);
	for($i=0;$i<($n-1);$i++){
		$first += $A[$i];
		$second -= $A[$i];
		$result[] = abs($first - $second);
	}
	return min($result);
	
	
}

# test 1
$A = [3,1,2,4,3];


echo '<pre>';
print_r(solution($A));



