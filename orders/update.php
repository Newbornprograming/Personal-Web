<?php

include_once("../config/database.php");

if (!isset($_POST['update'])) return header('Location: /orders');

$order_id = $_POST['id'];
$status = $_POST['status'];

$sql = $db->prepare("UPDATE `orders` SET `status` = $status WHERE `id` = $order_id");
$sql->execute();

// Berhasil memperbarui status pesanan
$_SESSION['success'] = 'Berhasil mengubah status pesanan';
return header('Location: /orders');