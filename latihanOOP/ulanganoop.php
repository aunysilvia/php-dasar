<?php
    class Bioskop
    {
        public $nama, $jumlah, $hari, $kursi;
        public $hargaDasar      = 50000;
        public $tambahanWeekend = 10000;
        public $tambahanVIP     = 20000;

        public function __construct($nama, $jumlah, $hari, $kursi)
        {
            $this->nama   = $nama;
            $this->jumlah = $jumlah;
            $this->hari   = $hari;
            $this->kursi  = $kursi;
        }

        public function hitungTotal()
        {
            $hargaPerTiket = $this->hargaDasar;

            if ($this->hari == "Sabtu" || $this->hari == "Minggu") {
                $hargaPerTiket += $this->tambahanWeekend;
            }

            if ($this->kursi == "VIP") {
                $hargaPerTiket += $this->tambahanVIP;
            }

            $subtotal   = $hargaPerTiket * $this->jumlah;
            $pajak      = $subtotal * 0.05;
            $totalBayar = $subtotal + $pajak;

            return [
                'hargaPerTiket' => $hargaPerTiket,
                'subtotal'      => $subtotal,
                'pajak'         => $pajak,
                'total'         => $totalBayar,
            ];
        }
    }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pemesanan Tiket Bioskop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #9fcdfcff;
            padding: 50px 0;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(5, 5, 5, 0.1);
        }
        .table td, .table th {
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card p-4">
 <h3 class="text-center mb-4">Pemesanan Tiket Bioskop</h3>
 <form method="POST" action="">
 <div class="mb-3">
 <label>Nama Pengunjung</label>
 <input type="text" name="nama" class="form-control" required>
 </div>
 <div class="mb-3">
 <label>Jumlah Tiket</label>
 <input type="number" name="jumlah" class="form-control" required min="1">
 </div>
 <div class="mb-3">
 <label>Hari</label>
  <select name="hari" class="form-select" required>
 <option value="">Pilih Hari</option>
 <option value="Senin">Senin</option>
 <option value="Selasa">Selasa</option>
 <option value="Rabu">Rabu</option>
 <option value="Kamis">Kamis</option>
 <option value="Jumat">Jumat</option>
 <option value="Sabtu">Sabtu</option>
 <option value="Minggu">Minggu</option>
 </select>
 </div>
 <div class="mb-3">
 <label>type Kursi</label>
 <select name="kursi" class="form-select" required>
 <option value="">type kursi</option>
 <option value="Reguler">Reguler</option>
 <option value="VIP">VIP</option>
 </select>
 </div>
 <div class="text-center">
 <button type="submit" class="btn btn-primary">Total</button>
 </div>
 </form>
 </div>
 </div>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $nama   = $_POST['nama'];
            $jumlah = $_POST['jumlah'];
            $hari   = $_POST['hari'];
            $kursi  = $_POST['kursi'];

            $pesanan = new Bioskop($nama, $jumlah, $hari, $kursi);
            $hasil   = $pesanan->hitungTotal();
        ?>
    <div class="row justify-content-center mt-5">
    <div class="col-md-8">
     <div class="card p-4">
     <h4 class="text-center mb-4">Pembayaran</h4>
     <table class="table table-bordered">
     <tr>
     <th>Nama</th>
     <td><?php echo $nama?></td>
     </tr>
     <tr>
     <th>Hari</th>
     <td><?php echo $hari?></td>
     </tr>
     <tr>
     <th>Jenis Kursi</th>
     <td><?php echo $kursi?></td>
     </tr>
     <tr>
     <th>Jumlah Tiket</th>
     <td><?php echo $jumlah?></td>
     </tr>
     <tr>
     <th>Harga per Tiket</th>
     <td>Rp. <?php echo number_format($hasil['hargaPerTiket'], 0, ',', '.')?></td>
     </tr>
     <tr>
     <th>Subtotal</th>
     <td>Rp. <?php echo number_format($hasil['subtotal'], 0, ',', '.')?></td>
     </tr>
     <tr>
     <th>Pajak Hiburan (5%)</th>
     <td>Rp. <?php echo number_format($hasil['pajak'], 0, ',', '.')?></td>
     </tr>
     <tr class="table-success">
     <th>Total Pembayaran</th>
    <td><strong>Rp. <?php echo number_format($hasil['total'], 0, ',', '.')?></strong></td>
     </tr>
     </table>
      </div>
        </div>
    </div>
    <?php }?>
</div>
</body>
</html>