<?php
$hari = 50000;
$makan = 25000;
$minum = 10000;

$jumlah = ($makan+$minum );
$sisa = $hari - $jumlah;
echo "Uang Hari : Rp. $hari <br>";
echo "Makan : Rp. $makan <br>";
echo "Minum : Rp. $minum <br>";
echo "Hari Menghabiskan Uang Sebesar : Rp. $jumlah <br>";
echo "Sisa Uang Hari : Rp. $sisa <br>";
if ($hari == 15000){
    echo "dan Hari <br>Hemat </br>";
} else {
    echo "dan Hari Boros";
}
?>