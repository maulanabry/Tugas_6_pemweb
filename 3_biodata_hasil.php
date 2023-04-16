<?php
//mengambil data dari parameter form biodata
$nama = $_GET['nama'];
$tempatlahir = $_GET['tempatlahir'];
$tgllahir = $_GET['tgllahir'];
$kelamin = $_GET['kelamin'];
$alamat = $_GET['alamat'];
$pekerjaan = $_GET['pekerjaan'];

if (empty($nama) || empty($tempatlahir || empty($tempatlahir) || empty($kelamin) || empty($alamat) || empty($pekerjaan))) {
    header('Location: 2_login_tidaklengkap.php');}else{
//menampilkan data
echo "<h2>FORM BIODATA SEDERHANA</h2>";
echo "Nama = $nama"."<br>";
echo "Tempat & Tanggal Lahir = $tempatlahir, $tgllahir"."<br>";
echo "Jenis Kelamin = $kelamin"."<br>";
echo "Alamat = $alamat"."<br>";
echo "Pekerjaan = $pekerjaan"."<br>";
    }
?>