<?php
session_start();

include 'koneksi.php';

$kode = "123456789";
$nama = "Maulana";
$sks = "PBO";

$sql = "INSERT INTO matakuliah (kode, nama, sks) VALUES ('$kode', '$nama', '$sks')";
$result = mysqli_query($koneksi, $sql);

if($result) {
  $_SESSION['matakuliah'] = array(
    'kode' => $kode,
    'nama' => $nama,
    'sks' => $sks
  );

  echo "<p>Data matakuliah berhasil disimpan dalam session.</p>";
  echo "<p><a href='2.sessionmatakuliah2.php'>Lihat data matakuliah</a></p>";
} else {
  echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
