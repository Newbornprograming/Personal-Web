<?php

session_start();
// Menghapus session user bila ada
unset($_SESSION['user']);
// Menghapus session admin bila ada
unset($_SESSION['admin_auth']);


// Logout berhasil
$_SESSION['success'] = 'Berhasil keluar';
return header('Location: /');

?>