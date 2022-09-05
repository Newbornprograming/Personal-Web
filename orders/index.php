<?php include_once("../config/database.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orders - Yohan Deny</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/sweetalert.min.js"></script>
</head>
<body class="bg-dark text-light">
  <?php include_once("../components/navbar.php") ?>
  <?php if (!isset($_SESSION['admin_auth'])) { ?>
  <div class="container p-3">
    <div class="d-flex flex-column align-items-center">
      <form action="/orders/auth.php" method="POST" class="d-flex flex-row">
        <input type="password" name="passcode" class="form-control me-2" placeholder="Passcode" required>
        <button type="submit" class="btn btn-primary">Masuk</button>
      </form>
    </div>
  </div>
  <?php
  } else { 
    // Kode di bawah akan muncul jika admin sudah login
    $sql = $db->prepare("SELECT orders.id,orders.type,orders.title,orders.status,cust.name,cust.phone,cust.gender,cust.birth_date FROM `orders` JOIN `customers` `cust` ON `orders`.`customer_id` = `cust`.`id` ORDER BY `orders`.`created_at` DESC");
    $sql->execute();

    ?>
    <div class="container p-3">
      <div class="table-responsive">

        <table class="table table-bordered table-striped text-center">
          <thead class="table-primary">
            <tr>
              <th>Order ID</th>
              <th>Tipe</th>
              <th>Judul Project</th>
              <th>Status</th>
              <th>Nama Customer</th>
              <th>Telepon</th>
              <th>Jenis Kelamin</th>
              <th>Tgl Lahir</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="table-light">
            <?php
              if ($sql->rowCount() === 0) {
                echo "<tr><td colspan='9' class='text-center text-secondary text-uppercase'>Belum ada pesanan</td></tr>";
              } else {
                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                  $order_id = $result['id'];
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

                  $gender = '-';
                  if ($result['gender'] == 1) $gender = 'Laki-laki';
                  if ($result['gender'] == 2) $gender = 'Perempuan';

                  echo "
                  <tr>
                  <td>#$order_id</td>
                  <td>$type</td>
                  <td>".$result['title']."</td>
                  <td class='fw-bold text-uppercase text-$color'>$status</td>
                  <td>".$result['name']."</td>
                  <td>".$result['phone']."</td>
                  <td>$gender</td>
                  <td>".date('d/m/Y', strtotime($result['birth_date']))."</td>
                  <td><button class='btn btn-sm btn-primary' onclick='updateStatus($order_id)'>Ubah Status</button></td>
                  </tr>";
                }
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div id="updateModal" class="modal text-dark" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <form action="/orders/update.php" method="POST" class="d-flex flex-row">
              <input type="hidden" name="id">
              <select name="status" id="status" class="form-select me-2" required>
                <option disabled selected>-- Pilih status --</option>
                <option value="1">Pending</option>
                <option value="2">Disetujui</option>
                <option value="3">Sedang Dikerjakan</option>
                <option value="4">Selesai</option>
                <option value="5">Dibatalkan</option>
              </select>
              <input type="submit" name="update" class="btn btn-success" value="Ubah">
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      function updateStatus(orderId) {
        document.querySelector('input[name="id"]').setAttribute('value', orderId);
        $('#updateModal').modal('show');
      }
    </script>
    <?php
  }
  ?>
  <?php include_once("../components/alert.php") ?>
</body>
</html>