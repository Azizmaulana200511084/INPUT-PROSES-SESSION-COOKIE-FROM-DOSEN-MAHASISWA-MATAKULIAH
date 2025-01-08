<?php
session_start();

include 'koneksi.php';

$sql = "SELECT * FROM matakuliah LIMIT 1";
$result = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $matakuliah = array(
    'kode' => $row['kode'],
    'nama' => $row['nama'],
    'sks' => $row['sks']
  );

  $_SESSION['matakuliah'] = $matakuliah;

  echo "<h2>Data Dosen</h2>";
  echo "NIP: " . $matakuliah['kode'] . "<br>";
  echo "Nama: " . $matakuliah['nama'] . "<br>";
  echo "Sks: " . $matakuliah['sks'] . "<br>";
  echo "<br/><a href='2.sessionmatakuliah1.php'>Kembali ke hal pertama</a>";
} else {
  echo "Data matakuliah tidak ditemukan";
}

mysqli_close($koneksi);
?>
