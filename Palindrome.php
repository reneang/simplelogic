<?php
function PalindromeTesterAuto($a){
	if ($a == strrev($a)){
	echo $a . " is Palindrome";
	}
	else {echo $a . " is not Palindrome";}
}

function PalindromTesterManual($a){
    $Array = array();
    $Array = str_split($a);
    $len = sizeof($Array);

    $newString = "";

    for($i = $len; $i >= 0; $i--){
        $newString.=$Array[$i];    
    }
    echo "<br>";
    if ($a == $newString) {
        echo "Output: " . $a . " is a palindrome";
    } else {
        echo "Output: " . $a . " is not a palindrome";
    }    
}

$a = “Local”;
PalindromeTesterAuto($a);
echo "<br>";
PalindromeTesterManual($a);
?>