<?php 
if(isset($_COOKIE['kode'])) { 
    echo "<h1>Cookie 'kode' ada. Isinya : " . $_COOKIE['kode'] . "</h1>"; 
} else { 
    echo "<h1>Cookie 'kode' TIDAK ada.</h1>";
} 

if(isset($_COOKIE['nama'])) { 
    echo "<h1>Cookie 'nama' ada. Isinya : " . $_COOKIE['nama'] . "</h1>"; 
} else { 
    echo "<h1>Cookie 'nama' TIDAK ada.</h1>"; 
} 

if(isset($_COOKIE['sks'])) { 
    echo "<h1>Cookie 'sks' ada. Isinya : " . $_COOKIE['sks'] . "</h1>"; 
} else { 
    echo "<h1>Cookie 'sks' TIDAK ada.</h1>"; 
} 

echo "<h2>Klik <a href='3.cookiematakuliah1.php'>di sini</a> untuk penciptaan cookies</h2>"; 
?>
