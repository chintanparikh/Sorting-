<?php 
// Bubblesort sorts the elements of an array numerically
// Most simple sorting algorith,
// Very inefficient, and shouldn't be used for larger arrays

function bubbleSort(array $array)
{
	$n = count($array);
	foreach ($array as $key=>$element)
	{
		for ($j = 1; $j < $n-$key; ++$j) 
		{ 
			if ($array[$j-1] > $array[$j])
			{
				swap($array[$j-1], $array[$j]);	
			}
		}
	}
	return $array;
}

/*
 * Uses XOR swap, more efficient
 */
function swap(&$i, &$j)
{
	$i = $i ^ $j;
	$j = $i ^ $j;
	$i = $i ^ $j;
}

$initial = microtime(true);
$array = array(5,6,9,3);
print number_format(microtime(true) - $initial, 10) . ' seconds';

var_dump(bubbleSort($array));