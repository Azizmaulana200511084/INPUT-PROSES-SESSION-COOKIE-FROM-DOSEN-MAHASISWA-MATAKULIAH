<?php 
session_start(); 
$_SESSION['nama'] = "aku"; 
echo "<a href='session2.php'>Menuju ke halaman kedua</a>"; 
?>