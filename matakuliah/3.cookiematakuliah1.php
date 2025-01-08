<?php

include 'koneksi.php';

$kode = "123456";
$nama = "APBO";
$sks = "3";
$query = "INSERT INTO matakuliah (kode, nama, sks) VALUES ('$kode', '$nama', '$sks')";
mysqli_query($koneksi, $query);

setcookie("kode", $kode);
setcookie("nama", $nama);
setcookie("sks", $sks, time()+10);
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='3.cookiematakuliah2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>
