<!DOCTYPE html>
<html>
  <head>
    <title>Proses Form Mahasiswa</title>
  </head>
  <body>
    <?php
      require_once('koneksi.php');

      if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['fakultas']) && isset($_POST['jurusan'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $fakultas = $_POST['fakultas'];
        $jurusan = $_POST['jurusan'];

        $query = "INSERT INTO mahasiswa (nim, nama, fakultas, jurusan) VALUES ('$nim', '$nama', '$fakultas', '$jurusan')";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
          die("Query gagal dijalankan: " . mysqli_error($koneksi));
        }

        echo "<h2>Hasil Formulir Mahasiswa</h2>";
        echo "Nama: <b>$nama</b><br>";
        echo "NIM: <b>$nim</b><br>";
        echo "Fakultas: <b>$fakultas</b><br>";
        echo "Jurusan: <b>$jurusan</b><br>";
      } else {
        echo "<h2>Form Mahasiswa</h2>";
        echo "<p>Silakan isi formulir di atas</p>";
      }

      mysqli_close($koneksi);
    ?>
  </body>
</html>
