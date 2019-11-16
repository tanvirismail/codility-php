<?php


function solution($S,$P,$Q){
	# 12
	// $types = ['A'=>1,'C'=>2,'G'=>3,'T'=>4];
	// $string = str_split($S);
	// $answer = [];
	// for($i=0;$i<count($P);$i++){
		// $m = ($Q[$i] - $P[$i]);
		// if($m==2){
			// $first = $types[ $string[ $P[$i] ] ];
			// $second = $types[ $string[ $Q[$i] ] ];
			// $answer[] = min($first,$second);
		// } 
		// else if( $Q[$i] == $P[$i] ){
			// $answer[] =  $types[ $string[ $Q[$i] ] ];
		// }
		// else if( strlen($S) == $m+1 ){
			// $answer[] =  $types[ $string[ $Q[$i] ] ];
		// }
	// }
	// return $answer;
	
	# 25
	// $types = ['A'=>1,'C'=>2,'G'=>3,'T'=>4];
	// $string = str_split($S);
	// $answer = [];
	// for($i=0;$i<count($P);$i++){
		// $m = ($Q[$i] - $P[$i]);
		
		// if( $Q[$i] == $P[$i] ){
			// $answer[] =  $types[ $string[ $Q[$i] ] ];
		// }
		// else if( $P[$i] == 0 && strlen($S) == ($Q[$i] + 1) ){
			// $answer[] =  1;
		// }
		// else if($Q[$i] != $P[$i]){
			// $first = $types[ $string[ $P[$i] ] ];
			// $second = $types[ $string[ $Q[$i] ] ];
			// $answer[] = min($first,$second);
		// } 
	// }
	// return $answer;
	
	# 37
	// $types = ['A'=>1,'C'=>2,'G'=>3,'T'=>4];
	// $string = str_split($S);
	// $answer = [];
	// for($i=0;$i<count($P);$i++){
		// $m = ($Q[$i] - $P[$i]);
		
		// if($Q[$i] != $P[$i]){
			// $first = $types[ $string[ $P[$i] ] ];
			// $second = $types[ $string[ $Q[$i] ] ];
			// $answer[] = min($first,$second);
		// } 
		// else if( $Q[$i] == $P[$i] ){
			// $answer[] =  $types[ $string[ $Q[$i] ] ];
		// }
		// else if( $P[$i] == 0 && strlen($S) == ($Q[$i] + 1) ){
			// $answer[] =  $types[ $string[ $Q[$i] ] ];
		// }
	// }
	// return $answer;
	
	# 37 60
	$types = ['A'=>1,'C'=>2,'G'=>3,'T'=>4];
	$string = str_split($S);
	$typesFromString = array_count_values($string);
	
	$n = strlen($S);
	$answer = [];
	for($i=0;$i<count($P);$i++){
		
		if(  
			($P[$i] <= $Q[$i]) && 
			($P[$i] <= ($n-1)) &&
			($Q[$i] <= ($n-1))
		){
			if($Q[$i] != $P[$i]){
				$first = $types[ $string[ $P[$i] ] ];
				$second = $types[ $string[ $Q[$i] ] ];
				$answer[] = min($first,$second);
			} 
			else if( ($Q[$i] == $P[$i]) ||  ($P[$i] == 0 && $n == ($Q[$i] + 1)) ){
				if(ctype_upper($string[ $Q[$i] ])){
					$answer[] =  $types[ $string[ $Q[$i] ] ];
				}
				else {
					$answer[] =  1;
				}
			}
		}
		
	}
	return $answer;
	
	
}

# test 1
$p=[2,5,0];
$q=[4,5,6];
$s='CAGCCTA';
// [2,4,1]

# test 2
// $p=[0];
// $q=[0];
// $s='A';
// [1]

# test 3
// $p=[0];
// $q=[0];
// $s='C';
// [2]

# test 3
// $p=[0, 0, 1];
// $q=[0, 1, 1];
// $s='AC';
// [1, 1, 2]

# test 4
// $p=[0, 0, 1];
// $q=[0, 1, 1];
// $s='GT';
// [3, 3, 4]



echo '<pre>';
print_r( solution($s,$p,$q) );

/* Question


$p=[4, 3, 4, 2, 2];
$q=[4, 3, 4, 2, 2];
$s='GTC';
// [4, 3, 4, 2, 2]











A DNA sequence can be represented as a string consisting of the letters A, C, G and T, which correspond to the types of successive nucleotides in the sequence. Each nucleotide has an impact factor, which is an integer. Nucleotides of types A, C, G and T have impact factors of 1, 2, 3 and 4, respectively. You are going to answer several queries of the form: What is the minimal impact factor of nucleotides contained in a particular part of the given DNA sequence?

The DNA sequence is given as a non-empty string S = S[0]S[1]...S[N-1] consisting of N characters. There are M queries, which are given in non-empty arrays P and Q, each consisting of M integers. The K-th query (0 ≤ K < M) requires you to find the minimal impact factor of nucleotides contained in the DNA sequence between positions P[K] and Q[K] (inclusive).

For example, consider string S = CAGCCTA and arrays P, Q such that:

    P[0] = 2    Q[0] = 4
    P[1] = 5    Q[1] = 5
    P[2] = 0    Q[2] = 6
The answers to these M = 3 queries are as follows:

The part of the DNA between positions 2 and 4 contains nucleotides G and C (twice), whose impact factors are 3 and 2 respectively, so the answer is 2.
The part between positions 5 and 5 contains a single nucleotide T, whose impact factor is 4, so the answer is 4.
The part between positions 0 and 6 (the whole string) contains all nucleotides, in particular nucleotide A whose impact factor is 1, so the answer is 1.
Write a function:

function solution($S, $P, $Q);

that, given a non-empty string S consisting of N characters and two non-empty arrays P and Q consisting of M integers, returns an array consisting of M integers specifying the consecutive answers to all queries.

Result array should be returned as an array of integers.

For example, given the string S = CAGCCTA and arrays P, Q such that:

    P[0] = 2    Q[0] = 4
    P[1] = 5    Q[1] = 5
    P[2] = 0    Q[2] = 6
the function should return the values [2, 4, 1], as explained above.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
M is an integer within the range [1..50,000];
each element of arrays P, Q is an integer within the range [0..N − 1];
P[K] ≤ Q[K], where 0 ≤ K < M;
string S consists only of upper-case English letters A, C, G, T.

*/