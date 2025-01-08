<?php 
session_start(); 
 
echo "Nama Anda adalah ".$_SESSION['nama']; 
echo "<br/><a href='session1.php'>Kembali ke hal pertama</a>"; 
?> 