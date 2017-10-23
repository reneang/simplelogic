<?php
//function to test palindrome with strrev 
function PalindromeTester($a){
	if ($a == strrev($a)){
	echo $a . " is Palindrome";
	}
    else {echo $a . " is not Palindrome";}
}

//function to test palindrome manually 
function PalindromeTesterManual($a){
    $Array = array();
    $Array = str_split($a);
    $len = count($a);
    $newString = "";

    for ($i = $len; $i >= 0; $i--) {
        $newString.=$Array[$i];
    }
    echo "<br>";
    if ($a == $newString) {
        echo "Output: " . $a . " is a palindrome";
    } else {
        echo "Output: " . $a . " is not a palindrome";
    }
}

$a = "Local";
PalindromeTester($a);
PalindromeTesterManual($a);
?>