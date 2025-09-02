<?php
$barang = [
    ["seragam", 12],
    ["pensil", 3],
    ["Buku", 7],
    ["sabuk", 2],
    ["Spidol", 0]
];

foreach ($barang as $item) {
    if ($item[1] < 5) {
        echo $item[0] . " hampir habis (stok: " . $item[1] . ")<br>";
    }
}
?>