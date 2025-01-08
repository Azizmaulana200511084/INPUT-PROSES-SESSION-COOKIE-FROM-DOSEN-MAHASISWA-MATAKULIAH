<!DOCTYPE html>
<html>
  <head>
    <title>Proses Form Dosen</title>
  </head>
  <body>
    <?php
      require_once('koneksi.php');

      if (isset($_POST['nip']) && isset($_POST['nama']) && isset($_POST['matkul'])) {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $matkul = $_POST['matkul'];

        $query = "INSERT INTO dosen (nip, nama, matkul) VALUES ('$nip', '$nama', '$matkul')";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
          die("Query gagal dijalankan: " . mysqli_error($koneksi));
        }

        echo "<h2>Hasil Formulir Dosen</h2>";
        echo "Nama: <b>$nama</b><br>";
        echo "NIP: <b>$nip</b><br>";
        echo "Matakuliah: <b>$matkul</b><br>";
      } else {
        echo "<h2>Form Dosen</h2>";
        echo "<p>Silakan isi formulir di atas</p>";
      }

      mysqli_close($koneksi);
    ?>
  </body>
</html>
