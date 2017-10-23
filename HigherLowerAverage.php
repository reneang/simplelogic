<?php
//function to count value lower than average from an array 
Function LowerThanAverage($array){
$newarr = array();
$average = array_sum($array) / count($array);
	for ($i = 0; $i < count($array); $i++){
	if ($array[$i] < $average){
	array_push($newarr, $array[$i]);
	}
	}
		print_r($newarr);
}

Function HigherThanAverage($array){
$newarr = array();
$average = array_sum($array) / count($array);
	for ($i = 0; $i < count($array); $i++){
	if ($array[$i] > $average){
	array_push($newarr, $array[$i]);
	}
	}
		print_r($newarr);
}
$a = array(5,6,7,8,9,10);

LowerThanAverage($a);
HigherThanAverage($a);
?>