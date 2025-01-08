<!DOCTYPE html>
<html>
  <head>
    <title>Form Mahasiswa</title>
  </head>
  <body>
    <h2>Form Mahasiswa</h2>
    <form action="1.prosesmahasiswa1.php" method="POST">
    <label for="nim">NIM:</label>
      <input type="text" id="nim" name="nim" required><br><br>
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required><br><br>

      <label for="fakultas">Fakultas:</label>
      <select id="fakultas" name="fakultas">
        <option value="filsafat">Filsafat</option>
        <option value="teknik">Teknik</option>
        <option value="hukum">Hukum</option>
        <option value="ekonomi">Ekonomi</option>
        <option value="kedokteran">Kedokteran</option>
      </select><br><br>

      <label for="jurusan">Jurusan:</label>
      <select id="jurusan" name="jurusan">
        <option value="informatika">Informatika</option>
        <option value="sipil">Teknik Sipil</option>
        <option value="hukum">Hukum</option>
        <option value="manajemen">Manajemen</option>
        <option value="kedokteran_gigi">Kedokteran Gigi</option>
      </select><br><br>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>
