<?php 

$nilai = array (
    'bahasa_indonesia' => 90,
    'matematika' => 92,
    'biologi' => 90,
    'kimia' => 95
);
$ratarata = array_sum($nilai) / count($nilai);

echo "Rata-rata nilai ujian saya adalah $ratarata"

?>