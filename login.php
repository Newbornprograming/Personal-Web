<?php

include_once('./config/database.php');

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = $db->prepare("SELECT * FROM `customers` WHERE `email` = '$email'");
  $sql->execute();

  // Cek apakah user ditemukan atau tidak
  if ($sql->rowCount() === 0) {
    $_SESSION['error'] = 'User tidak ditemukan';
    return header('Location: /');
  }

  $user = $sql->fetch(PDO::FETCH_ASSOC);
  // Cek apakah password yang dimasukkan cocok dengan password user
  if ($user['password'] !== $password) {
    $_SESSION['error'] = 'Kata sandi salah';
    return header('Location: /');  
  }
  
  // Login berhasil
  $_SESSION['user'] = $user;
  return header('Location: /dashboard');
} else {
  return header('Location: /');
}