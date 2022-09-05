<?php

include_once("../config/database.php");

if (!isset($_POST['id'])) return header('Location: /dashboard');

$order_id = $_POST['id'];
$user_id = $user['id'];

$sql = $db->prepare("UPDATE `orders` SET `status` = 5 WHERE `id` = $order_id AND `customer_id` = $user_id");
$sql->execute();

$_SESSION['success'] = 'Berhasil membatalkan pesanan';
return header('Location: /dashboard');