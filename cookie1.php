<?php 
$value = 'aku'; 
$value2 = 'Fulan bin Fulan'; 
 
setcookie("username", $value); 
setcookie("namalengkap", $value2, time()+10); /* expire in 1 hour */ 
echo "<h1>Ini halaman pengesetan cookie</h1>"; 
echo "<h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>"; 
?>