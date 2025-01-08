<?php
session_start();

include 'koneksi.php';

$nim = "123456789";
$nama = "Maulana";
$fakultas = "Teknik";
$jurusan = "Teknik Informatika";

$sql = "INSERT INTO mahasiswa (nim, nama, fakultas, jurusan) VALUES ('$nim', '$nama', '$fakultas', '$jurusan')";
$result = mysqli_query($koneksi, $sql);

if($result) {
  $_SESSION['mahasiswa'] = array(
    'nim' => $nim,
    'nama' => $nama,
    'fakultas' => $fakultas,
    'jurusan' => $jurusan
  );

  echo "<p>Data mahasiswa berhasil disimpan dalam session.</p>";
  echo "<p><a href='2.sessionmahasiswa2.php'>Lihat data mahasiswa</a></p>";
} else {
  echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
