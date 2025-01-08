<?php
session_start();

include 'koneksi.php';

$sql = "SELECT * FROM dosen LIMIT 1";
$result = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $dosen = array(
    'nip' => $row['nip'],
    'nama' => $row['nama'],
    'matkul' => $row['matkul']
  );

  $_SESSION['dosen'] = $dosen;

  echo "<h2>Data Dosen</h2>";
  echo "NIP: " . $dosen['nip'] . "<br>";
  echo "Nama: " . $dosen['nama'] . "<br>";
  echo "Matakuliah: " . $dosen['matkul'] . "<br>";
  echo "<br/><a href='2.sessiondosen1.php'>Kembali ke hal pertama</a>";
} else {
  echo "Data dosen tidak ditemukan";
}

mysqli_close($koneksi);
?>
