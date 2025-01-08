<?php
session_start();

include 'koneksi.php';

$nip = "123456789";
$nama = "Maulana";
$matkul = "PBO";

$sql = "INSERT INTO dosen (nip, nama, matkul) VALUES ('$nip', '$nama', '$matkul')";
$result = mysqli_query($koneksi, $sql);

if($result) {
  $_SESSION['dosen'] = array(
    'nip' => $nip,
    'nama' => $nama,
    'matkul' => $matkul
  );

  echo "<p>Data dosen berhasil disimpan dalam session.</p>";
  echo "<p><a href='2.sessiondosen2.php'>Lihat data dosen</a></p>";
} else {
  echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
