<!DOCTYPE html>
<html>
  <head>
    <title>Form Dosen</title>
  </head>
  <body>
    <h2>Form Dosen</h2>
    <form action="1.prosesdosen1.php" method="POST">
    <label for="nip">NIP:</label>
      <input type="text" id="nip" name="nip" required><br><br>
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required><br><br>

      <label for="matkul">Matakuliah:</label>
      <select id="matkul" name="matkul">
        <option value="matematika">Matematika</option>
        <option value="bahasa indonesia">Bahasa Indonesia</option>
        <option value="agama islam">Agama Islam</option>
      </select><br><br>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>
