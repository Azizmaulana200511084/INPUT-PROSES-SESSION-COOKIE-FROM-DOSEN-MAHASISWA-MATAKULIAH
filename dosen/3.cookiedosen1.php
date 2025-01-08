<?php

include 'koneksi.php';

$nip = "123456";
$nama = "Lana";
$matkul = "APBO";
$query = "INSERT INTO dosen (nip, nama, matkul) VALUES ('$nip', '$nama', '$matkul')";
mysqli_query($koneksi, $query);

setcookie("nip", $nip);
setcookie("nama", $nama);
setcookie("matkul", $matkul, time()+10);
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='3.cookiedosen2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>
