<?php
function luas_lingkaran ($jari) {
	return 3.14 * $jari * $jari;
}
// Pemanggilan fungsi
$r = 10;
echo "Luas lingkaran jari jari $r = ";
echo luas_lingkaran($r);
?>