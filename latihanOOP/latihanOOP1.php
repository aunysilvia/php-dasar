<?php
class motor {
    public $merk;
    public $warna;
    public $harga;
    
    //method khusus yang akan di panggil pertama kali / di awal
    public function __construct($merk,$warna,$harga)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
        }

        public function kegunaa()
        {
            return "berjalan dengan baik";
        }
}

$motor1 = new motor("Honda","hitam","20.000.000");
echo "merk motor1 :" . $motor1->merk . "<br>";
echo "warna motor1 :" . $motor1->warna . "<br>";
echo "harga motor1 :" . $motor1->harga . "<br>";