<?php 

$angka = 100;

function getJenisAngka($angka) {
    if ($angka % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}

echo "angka $angka merupakan sebuah angka " . getJenisAngka($angka);

?>