<!DOCTYPE html>
<html>
  <head>
    <title>Proses Form Matakuliah</title>
  </head>
  <body>
    <?php
      require_once('koneksi.php');

      if (isset($_POST['kode']) && isset($_POST['nama']) && isset($_POST['sks'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];

        $query = "INSERT INTO matakuliah (kode, nama, sks) VALUES ('$kode', '$nama', '$sks')";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
          die("Query gagal dijalankan: " . mysqli_error($koneksi));
        }

        echo "<h2>Hasil Formulir Matakuliah</h2>";
        echo "KODE: <b>$kode</b><br>";
        echo "Nama: <b>$nama</b><br>";
        echo "Sks: <b>$sks</b><br>";
      } else {
        echo "<h2>Form Matakuliah</h2>";
        echo "<p>Silakan isi formulir di atas</p>";
      }

      mysqli_close($koneksi);
    ?>
  </body>
</html>
