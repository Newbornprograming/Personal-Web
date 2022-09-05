<?php

if (isset($_SESSION['success'])) {
  // Pesan sukses akan muncul jika session 'success' ada isinya
  $msg = $_SESSION['success'];
  echo "<script>
    Swal.fire({
    icon: 'success',
    text: '$msg',
    timer: 2700,
    showConfirmButton: false,
  });
  </script>";
  unset($_SESSION['success']);
} else if (isset($_SESSION['error'])) {
  // Pesan sukses akan muncul jika session 'error' ada isinya
  $msg = $_SESSION['error'];
  echo "<script>
    Swal.fire({
    icon: 'error',
    text: '$msg',
    timer: 2700,
    showConfirmButton: false,
  });
  </script>";
  unset($_SESSION['error']);
}

?>