<?php
$total =600000;
$disc =0;

if($total >= 500000) {
    $disc = 0.2 * $total;
} elseif ($total >= 250000) {
    $disc = 1.0 * $total;
}else {
    $disc =0;
}

echo "total:" . $total . "<br>";
echol "discount:" . $disc . "<br>";
echo "total after discount:" . ($total-$disc) . "< br>";