<?php

function solution($X, $Y, $D){
	# 44
	// $jump=0;
	// while ($X < $Y){
		// $X += $D;
		// $jump++;
	// }
	// return $jump;
	
	# 100
	return (int) ceil( ($Y-$X)/$D );
	
}
# test 1
// $X = 10;
// $Y = 85;
// $D = 30;
# test 2
// $X = 1;
// $Y = 5;
// $D = 2;
# test 3
// $X = 1;
// $Y = 1;
// $D = 3;
// test 4
$X = 3;
$Y = 999111321;
$D = 7;

echo '<pre>';
print_r(solution($X, $Y, $D));


