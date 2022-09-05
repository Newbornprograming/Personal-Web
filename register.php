<?php

include_once('./config/database.php');

if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $birthdate = $_POST['birthdate'];

  $customers = $db->prepare("SELECT * FROM `customers` WHERE `email`='$email' LIMIT 1");
  $customers->execute();

  // Cek apakah alamat email telah digunakan oleh user lain
  if ($customers->rowCount() > 0) {
    $_SESSION['error'] = 'Email telah digunakan';
    return header('Location: /');
  }

  // Proses register user ke dalam database
  $sql = $db->prepare("INSERT INTO `customers` (`name`,`email`,`password`,`phone`,`gender`,`birth_date`) VALUES ('$name', '$email', '$password', '$phone', $gender, '$birthdate')");
  $sql->execute();

  // Registrasi berhasil
  $_SESSION['success'] = 'Registrasi berhasil';
  return header('Location: /');
} else {
  return header('Location: /');
}