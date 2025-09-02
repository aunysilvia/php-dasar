<?php
$nama = ["Andi", "Budi", "Citra", "Dina", "Eka"];
$nilai = [80, 65, 90, 70, 75];

foreach ($nama as $nilai2 => $siswa) {
    if ($nilai[$nilai2] >= 75) {
        echo $siswa . " lulus dengan nilai " . $nilai[$nilai2] . "<br>";
    } else {
        echo $siswa . " tidak lulus dengan nilai " . $nilai[$nilai2] . "<br>";
}
}
?>