<?php
function AnagramTester($a,$b){
   $splita = str_split($a);
   $splitb = str_split($b);
   sort($splita);
   sort($splitb);
	
   if($splita === $splitb){
   	echo "is anagram";
   } 
	else {echo "is not anagram";}
  }

$a = "aloff";
$b = "laugh";

AnagramTester($a,$b);
?>
