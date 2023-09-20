<?php
include 'variabel.php' ;
 
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . "<br>";

$umursetahunlalu = $umur - 1;
echo "Umur satu tahun lalu: " . $umursetahunlalu . "tahun<br>";

$umurtahundepan = $umur + 1;
echo "Umur tahun depan: " . $umurtahundepan . " tahun<br>";

?>

