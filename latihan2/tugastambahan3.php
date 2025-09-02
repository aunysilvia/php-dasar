<?php
$film = [
    ["Jumbo", 8.9],
    ["agak laen", 9.5],
    ["ayah ini jalannya kemana ", 8.6],
    ["Rumah Untuk Alie", 7.2],
    ["The Conjuring", 8.6],
    ["waktu magrib", 6.0]
];

foreach ($film as $item) {
    if ($item[1] >= 8) {
        echo $item[0] . " memiliki rating tinggi (" . $item[1] . ")<br>";
    }
}
?>