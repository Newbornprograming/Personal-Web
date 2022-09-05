<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include_once("$root/config/database.php");

// Jika belum login maka akan di redirect ke halaman utama
if (!isset($_SESSION['user'])) return header('Location: /');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Yohanes Deny</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/sweetalert.min.js"></script>
</head>
<body class="bg-dark text-light">
  <?php include_once("$root/components/navbar.php") ?>
  <div class="container p-3">
    <div class="d-flex flex-row mb-3">
      <button class="btn btn-primary d-flex flex-row align-items-center" data-bs-toggle="modal" data-bs-target="#orderModal"><i class="material-icons me-2">add_circle</i>Order Baru</button>
    </div>
    <table class="table table-sm table-bordered table-striped text-center">
      <thead class="table-primary">
        <tr>
          <th>Order ID</th>
          <th>Jenis</th>
          <th>Judul Project</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-light">
        <?php
          $user_id = $user['id'];

          $sql = $db->prepare("SELECT * FROM `orders` WHERE `customer_id` = $user_id ORDER BY `created_at` DESC");
          $sql->execute();

          if ($sql->rowCount() === 0) {
            // Kode di bawah akan muncul jika belum ada data
            echo "
            <tr>
              <td colspan='5' class='text-center text-secondary text-uppercase'>Belum ada pesanan</td>
            </tr>";
          } else {
            // Kode di bawah akan muncul jika sudah ada data
            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
              $type = '-';
              if ($result['type'] == 1) $type = 'Adobe Photoshop';
              if ($result['type'] == 2) $type = 'Adobe After Effects';
              if ($result['type'] == 3) $type = 'Adobe Premiere Pro';

              $status = '-';
              $color = 'dark';
              if ($result['status'] == 1) {
                $status = 'Pending';
                $color = 'warning';
              }
              if ($result['status'] == 2) {
                $status = 'Disetujui';
                $color = 'success';
              }
              if ($result['status'] == 3) {
                $status = 'Sedang Dikerjakan';
                $color = 'primary';
              }
              if ($result['status'] == 4) {
                $status = 'Selesai';
                $color = 'success';
              }
              if ($result['status'] == 5) {
                $status = 'Dibatalkan';
                $color = 'danger';
              }

              $cancel_btn = '';
              if ($result['status'] == 1) {
                $cancel_btn = "<button class='btn btn-sm btn-danger' onclick='cancelOrder(".$result['id'].")'>Batalkan</button>";
              }

              echo "
              <tr>
                <td>#".$result['id']."</td>
                <td>$type</td>
                <td>".$result['title']."</td>
                <td class='text-uppercase fw-bold text-$color'>$status</td>
                <td>$cancel_btn</td>
              </tr>";
            }
          }
        ?>
      </tbody>
    </table>
  </div>
  <div id="orderModal" class="modal text-dark" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary text-light">
          <h5 class="modal-title">Order Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/dashboard/order.php" method="POST">
          <div class="modal-body">
            <div class="form-group mb-2">
              <label for="type" class="mb-1">Jenis Order</label>
              <select name="type" id="type" class="form-select" required>
                <option disabled selected>-- Pilih salah satu --</option>
                <option value="1">Adobe Photoshop</option>
                <option value="2">Adobe After Effects</option>
                <option value="3">Adobe Premiere Pro</option>
              </select>
            </div>
            <div class="form-group mb-2">
              <label for="title" class="mb-1">Judul Project</label>
              <input type="text" id="title" name="title" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="order">Order Sekarang</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <form id="cancelForm" action="/dashboard/cancel.php" method="POST">
    <input type="hidden" name="id" id="order_id">
  </form>
  <script>
    async function cancelOrder(orderId) {
      const status = await Swal.fire({
        icon: 'question',
        text: 'Anda yakin ingin membatalkan pesanan ini?',
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal',
        showCancelButton: true,
      });

      if (status.isConfirmed) {
        document.querySelector('input#order_id').setAttribute('value', orderId);
        document.querySelector('form#cancelForm').submit();
      }
    }
  </script>
  <?php include_once('../components/alert.php') ?>
</body>
</html>