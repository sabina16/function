<?php
Function Lingkaran($jari = 8)
{
	echo "Jari jari lingkaran : $jari<br>";
	$luas = 3.14 * ($jari * $jari);
	$kel = 2 * (3.14 * $jari);
	echo "Luas Lingkaran : $luas<br>";
	echo "Keliling Lingkaran :  $kel<br>";
}
$a = 10;
Lingkaran();