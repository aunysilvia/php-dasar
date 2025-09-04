<?php
class penggajian
{
  public $nama, $nno_id, $gp, $jabatan, $status_k, $status_kk;
  public $stj, $tt, $tm;

  public function __construct($a, $b, $c, $d, $e, $f)
  {
   $this->nama =$a;
   $this->no_id =$b;
   $this->gp =$c;
   $this->jabatan =$d;
   $this->status_k =$e ;
   $this->status_kk =$f ;

  }

  public function tunjanganjabatan()
  {
    $jabatan= $this->jabatan;

    if($jabatan == "manager"){
      $this->tj = $this->gp * 0.2;
    } else if($jabatan == "supervisor"){
      $this->tj = $this->gp * 0.15;
    } else if($jabatan == "staff"){
      $this->tj = $this->gp * 0.15;
    }else
    {
      $this-> tj =0;
    }
    return $this->tj;
  }

  public function tunjangantransport()
   {
    $status =$this->status_k;
    $this->tt =0;
    if($status == "tetap"){
$this->tt =5000000;
    }else {
      $this->tt =0;
    }
    return $this->tt;
  }

  public function tunjanganmenikah() 
  {
    $statuskk = $this->status_kk;
    $this->tm =0;
    if($statuskk == "menikah"){
      $this->tm =3000000;
    }else {
      $this->tm =0;
    }
    return $this->tm;
  }

  public function gajikotor()
  {
     $gajikotor =$this->gp + $this->tunjanganjabatan() + $this->tunjangantransport()
     + $this->tunjanganmenikah();
     return $gajikotor;
  }

  public function pajak()
    {
      $pajak =$this->gajikotor() * 0.05;
      return $pajak;
    }
  
    public function gajibersih()
    {
      $gajibersih =$this->gajikotor() - $this->pajak();
      return $gajibersih;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <label for="">nama karyawan</label>
    <input type="text" name="nama" placeholder="nama lengkap"> <br>

    <label for="">no id karyawan</label>
    <input type="number" name="no id" placeholder="no id karyawan lengkap"> <br>
    <label for="">gaji karyawan</label>
    <input type="number" name="gp" placeholder="gaji poko"> <br>
    <label for="">status karyawan</label>
    <input type="radio" name="status" value="tetap">tetap
    <input type="radio" name="status" value="kontrak">kontrak <br>


    <label for="">jabatan</label>
    <select name="jabatan" id="">
      <option value="manager">manager</option>
      <option value="supervisor">supervisor</option>
      <option value="staff">staff</option>
      <option value="karyawan">karyawan</option>
    </select><br>
    <label for="">status menikah</label>
    <select name="status_kk" id="">
      <option value="menikah">menikah</option>
      <option value="belum menikah">belum menikah</option>
    </select><br>
    <button type="submit">simpan</button>
  </form>

  <?php
  if($_SERVER['REQUEST_METHOD']=="POST") {
    $a = $_POST['nama'];
    $b = $_POST['no_id'];
    $c = $_POST['gp'];
    $d = $_POST['jabatan'];
    $e = $_POST['status'];
    $f = $_POST['status_kk'];

    $gaji = new penggajian($a , $b , $c , $d , $e , $f)
  
  ?>

  <table border="1">
    <th>nama</th>
    <th>no id</th>
    <th>status karyawan</th>
    <th>gaji poko</th>
    <th>jabatan</th>
    <th>status menikah</th>
    <tr>
      <td><?php echo $gaji->nama ?></td>
      <td><?php echo $gaji->no_id ?></td>
      <td><?php echo $gaji->status_kk ?></td>
    </tr>

    <tr>
      <th>tunjangn jabatan</th>
      <td colspan ="5">
        Rp.<?php echo number_format($gaji->tunjangantransport(), 0, ',','.'); ?>
      </td>
    </tr>
    <tr>
      <th>tunjangan transport</th>
      <td colspan ="5">
        Rp.<?php echo number_format($gaji->tunjangantransport(), 0, ',', '.');?>
      </td>
    </tr>
    <tr>
      <th>tunjangan menikah</th>
      <td colspan ="5">
Rp.<?php echo number_format($gaji->tunjanganmenikah(), 0, ',' , '.');?>
      </td>
    </tr>
    <tr>
      <th>gaji kotor</th>
      <td colspan="5">
          Rp.<?php echo number_format($gaji->gajikotor(), 0, ',', '.');?>
      </td>
    </tr>
    <tr>
      <th>pajak</th>
      <td colspan="5">
          Rp.<?php echo number_format($gaji->gajibersih(), 0, ',', '.');?>
      </td>
    </tr>
  </table>

  <?php }?>
</body>
</html>