<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
         echo "*";
    }
     echo "<br>";
}
echo "<hr>";
for($i = 5; $i >= 1; $i--){
    for ($j = 1; $j <= $i; $j++) {
         echo "*";
    }
     echo "<br>";
}
echo "<hr>";
for($i = 1; $i <= 5; $i++){
    for ($a = 5; $a >= $i; $a--){
        echo "__";
    }
    for ($b = 1; $b <= $i; $b++){
        echo "*";
    }
    echo "<br>";
}