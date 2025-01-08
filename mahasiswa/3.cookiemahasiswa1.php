<?php

include 'koneksi.php';

$nim = "123456";
$nama = "Lana";
$fakultas = "Teknik";
$jurusan = "Informatika";
$query = "INSERT INTO mahasiswa (nim, nama, fakultas, jurusan) VALUES ('$nim', '$nama', '$fakultas', '$jurusan')";
mysqli_query($koneksi, $query);

setcookie("nim", $nim);
setcookie("nama", $nama);
setcookie("fakultas", $fakultas);
setcookie("jurusan", $jurusan, time()+10);
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='3.cookiemahasiswa2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>
