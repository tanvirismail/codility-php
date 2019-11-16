<?php


function solution($A){
	// 44
	// $A = array_unique($A);
	// sort($A);
	// return $A;
	// foreach($A as $k=>$v){
		// if($v != $k+1){
			// return $k+1;
		// }
	// }
	// return count($A) + 1;
	
	# 55
	// sort($A);
	// $previous = 0;
	// foreach($A as $k=>$v){
		// if( ($previous != $v) &&  ($v != $previous+1) ){
			// return $previous+1;
		// }
		// $previous = $v;
	// }
	// return $k + 2;
	
	// 100
	sort($A);
    $min = 1;
    foreach($A as $elem)
    {
        if($elem == $min) $min++;
    }
    return $min;
	
}


$A=[1, 3, 6, 4, 1, 2];
// $A=[-1,-3,-1];
// $A=[1, 2, 3];
// $A=[99999999];

echo '<pre>';
print_r( solution($A) );

/*
i->e-> con  min=1
0->1->(1=1)=2
1->2->(2=2)=3
2->4->(4!=3)=3

*/