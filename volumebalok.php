<?php
$panjang = 18;
$lebar = 10;
$tinggi = 12;
function Volumebalok ($panjang, $lebar, $tinggi) {
    return($panjang*$lebar*$tinggi); 
}
echo "volumebalok tersebut adalah =" .volumebalok($panjang,$lebar,$tinggi). "cm";
?>