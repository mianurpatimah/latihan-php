<?php
function luas_segitiga ($alas , $tinggi) {
    return  1/2 *$alas* $tinggi;
}
$a = 8;
$t = 4;
echo "<b>Luas segitiga adalah : </b> ";
echo luas_segitiga($a,$t);
?>