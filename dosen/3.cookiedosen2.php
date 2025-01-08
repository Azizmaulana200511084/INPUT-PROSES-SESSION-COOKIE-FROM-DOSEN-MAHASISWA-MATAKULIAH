<?php 
if(isset($_COOKIE['nip'])) { 
    echo "<h1>Cookie 'nip' ada. Isinya : " . $_COOKIE['nip'] . "</h1>"; 
} else { 
    echo "<h1>Cookie 'nip' TIDAK ada.</h1>";
} 

if(isset($_COOKIE['nama'])) { 
    echo "<h1>Cookie 'nama' ada. Isinya : " . $_COOKIE['nama'] . "</h1>"; 
} else { 
    echo "<h1>Cookie 'nama' TIDAK ada.</h1>"; 
} 

if(isset($_COOKIE['matkul'])) { 
    echo "<h1>Cookie 'matakuliah' ada. Isinya : " . $_COOKIE['matkul'] . "</h1>"; 
} else { 
    echo "<h1>Cookie 'matakuliah' TIDAK ada.</h1>"; 
} 

echo "<h2>Klik <a href='3.cookiedosen1.php'>di sini</a> untuk penciptaan cookies</h2>"; 
?>
