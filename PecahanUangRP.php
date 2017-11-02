<?php
function PecahanRupiah($nominal){
$rupiah = 
array(100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100);
echo "<h4>nominal : " . $nominal . "</h4>";
for ($i = 0; $i < count($rupiah); $i++) {
	if ($rupiah[$i] > 500){
	echo "Rp. " . number_format($rupiah[$i]) .  " = " . floor($nominal / $rupiah[$i]) . " lembar" . "<br/>";
	 $nominal = $nominal % $rupiah[$i];
 	}
	else{
 	echo "Rp. " . number_format($rupiah[$i]) .  " = " . floor($nominal / $rupiah[$i]) . " koin" . "<br/>";
$nominal = $nominal % $rupiah[$i];
	 }
}
$sisa = $nominal;
echo "Sisa = " . "Rp. " . $sisa ;}

$a= 90980;
PecahanRupiah($a);
?>