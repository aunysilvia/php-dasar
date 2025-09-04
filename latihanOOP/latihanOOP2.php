<?php
class siswa {
    public $nama;
    public $umur;
    public $jenis_kelamin;
    public $agama;
    public $kelas;

    //method khusus yang akan di panggil pertama kali / di awal
    public function __construct($nama,$umur,$jenis_kelamin,$agama,$kelas)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->agama = $agama;
        $this->kelas = $kelas;
        }

        public function kegiatan()
        {
            return "belajar dengan baik";
        }
}

$siswa1 = new siswa("budi","16","laki-laki","islam","XI");
echo "nama  :" . $siswa1->nama . "<br>";
echo "umur :" . $siswa1->umur . "<br>";
echo "jenis kelamin :" . $siswa1->jenis_kelamin . "<br>";
echo "agama :" . $siswa1->agama . "<br>";
echo "kelas" . $siswa1->kelas . "<br>";
echo "<hr>";

$siswa1 = new siswa("rehan","16","laki-laki","islam","XI");
echo "nama  :" . $siswa1->nama . "<br>";
echo "umur :" . $siswa1->umur . "<br>";
echo "jenis kelamin :" . $siswa1->jenis_kelamin . "<br>";
echo "agama :" . $siswa1->agama . "<br>";
echo "kelas" . $siswa1->kelas . "<br>";
echo "<hr>";

$siswa1 = new siswa("dadan","17","laki-laki","islam","XI");
echo "nama  :" . $siswa1->nama . "<br>";
echo "umur :" . $siswa1->umur . "<br>";
echo "jenis kelamin :" . $siswa1->jenis_kelamin . "<br>";
echo "agama :" . $siswa1->agama . "<br>";
echo "kelas" . $siswa1->kelas . "<br>";
echo "<hr>";

$siswa1 = new siswa("maryana","17","perempuan","islam","XI");
echo "nama  :" . $siswa1->nama . "<br>";
echo "umur :" . $siswa1->umur . "<br>";
echo "jenis kelamin :" . $siswa1->jenis_kelamin . "<br>";
echo "agama :" . $siswa1->agama . "<br>";
echo "kelas" . $siswa1->kelas . "<br>";
echo "<hr>";