<?php

$nilai = 99;

    if($nilai >= 0 && $nilai <= 50) {
        echo "Grade nilai dari $nilai adalah E";
    } elseif ($nilai >= 51 && $nilai <= 60) {
        echo "Grade nilai dari $nilai adalah D";
    } elseif ($nilai >= 61 && $nilai <= 70) {
        echo "Grade nilai dari $nilai adalah C";
    } elseif ($nilai >= 71 && $nilai <= 85) {
        echo "Grade nilai dari $nilai adalah B";
    } elseif ($nilai >= 86 && $nilai <= 100) {
        echo "Grade nilai dari $nilai adalah A";
    }

?>