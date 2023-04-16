<?php
$nama = $_GET['nama'];
$email = $_GET['email'];
include "waktu.php";

if (empty($nama) || empty($email)) {
    header('Location: 2_login_tidaklengkap.php');
} else {
    echo "Nama : $nama"."<br>";
    echo "Email : $email"."<br>";
    echo "Terakhir Login : $tanggal $waktu";
}
?>