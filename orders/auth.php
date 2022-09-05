<?php

include_once("../config/database.php");

if (!isset($_POST['passcode'])) return header('Location: /');

$passcode = $_POST['passcode'];

// Cek apakah kode yang dimasukkan cocok dengan secret key pada database.php
if ($passcode !== $secret_key) {
  $_SESSION['error'] = 'Passcode salah';
  return header('Location: /orders');
}

// Login admin berhasil
$_SESSION['admin_auth'] = md5($passcode);
return header('Location: /orders');