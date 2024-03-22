<?php 

$belanjaan = array(
'baju' => 100000,
'sepeda' => 1000000,
'laptop' => 9000000,
'mouse' => 150000
);

echo "total pengeluaran saya hari ini sebesar Rp.". number_format(array_sum($belanjaan));

?>