<?php
function GetEvenNumbers($myarray){
    $arr = array();
    for ($i=0; $i < count($myarray); $i++) { 
      if ($myarray[$i] % 2 == 0) {
       $arr [] = $myarray[$i];  
      }
    }
    Print_r($arr);
}

function GetOddNumbers($myarray){
    $arr = array();
    for ($i=0; $i < count($myarray); $i++) { 
        if ($myarray[$i] % 2 == 1) {
        $arr [] = $myarray[$i];  
        }
    }
    Print_r($arr);
}
$array = array(2,19,90,98,78);
    GetEvenNumbers($array);
    GetOddNumbers($array);
?>