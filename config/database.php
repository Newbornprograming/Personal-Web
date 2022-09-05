<?php

// otomatis memulai session jika session belum dimulai
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Informasi login ke database
$db_host = "127.0.0.1";
$db_port = 3306;
$db_user = "root";
$db_pass = "";
$db_name = "personalweb";

// Password untuk masuk ke halaman orders (admin)
$secret_key = "yohanesdeny1123";

try {
  // Koneksi ke database menggunakan metode PDO (PHP Data Object)
  $db = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
  echo "Database connection error: ".$e->getMessage();
}

// Menyimpan informasi user yang login ke session
if (isset($_SESSION['user'])) $user = $_SESSION['user'];