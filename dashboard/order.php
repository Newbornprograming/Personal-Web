<?php

include_once('../config/database.php');

if (!isset($_POST['order'])) return header('Location: /dashboard');

$type = $_POST['type'];
$title = $_POST['title'];
$user_id = $user['id'];

$sql = $db->prepare("INSERT INTO `orders` (`customer_id`,`type`,`title`,`status`) VALUES ($user_id, $type, '$title', 1)");
$sql->execute();

$_SESSION['success'] = 'Berhasil membuat pesanan';
return header('Location: /dashboard');