<?php
session_start();

include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa LIMIT 1";
$result = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $mahasiswa = array(
    'nim' => $row['nim'],
    'nama' => $row['nama'],
    'fakultas' => $row['fakultas'],
    'jurusan' => $row['jurusan']
  );

  $_SESSION['mahasiswa'] = $mahasiswa;

  echo "<h2>Data Mahasiswa</h2>";
  echo "NIM: " . $mahasiswa['nim'] . "<br>";
  echo "Nama: " . $mahasiswa['nama'] . "<br>";
  echo "Fakultas: " . $mahasiswa['fakultas'] . "<br>";
  echo "Jurusan: " . $mahasiswa['jurusan'] . "<br>";
  echo "<br/><a href='2.sessionmahasiswa1.php'>Kembali ke hal pertama</a>";
} else {
  echo "Data mahasiswa tidak ditemukan";
}

mysqli_close($koneksi);
?>
