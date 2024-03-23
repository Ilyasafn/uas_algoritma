<?php 

function isPrime($angka) {
    if ($angka == 1)
    return 0;
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) 
            return 0;
    }
    return 1;
}

$angka = 20;
$prima = isPrime($angka);

if ($prima == 1) {
    echo "Ya, $angka merupakan bilangan prima.";
} else {
    echo "Tidak, $angka bukan merupakan bilangan prima.";
}



?>