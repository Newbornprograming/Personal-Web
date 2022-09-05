<?php include_once('./config/database.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yohanes Deny</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/sweetalert.min.js"></script>
</head>

<body class="bg-dark text-light p-0 m-0">
  <?php include_once('./components/navbar.php') ?>
  <div class="container pt-5 mt-5">
    <div class="d-flex flex-row">
      <div class="d-flex flex-column flex-fill">
        <span class="text-green fw-bold">Hi, I'm Yohanes Deny</span>
        <span class="h3 fw-bold mt-2">Designer and Filmaking Video Content Creator</span>
        <span class="mt-3 mb-5">
        Saya telah bekerja sebagai IT di PT BRI IT selama lebih dari 3 tahun.<br>
        Saya membuat desain, editing dan filmaking sejak 2015<br>
        ketika saya menempuh pendidikan di Udinus University.<br>
        Dan saat ini saya menantikan untuk berkolaborasi dengan Anda!
        </span>
        <div class="d-flex">
          <button class="btn btn-primary text-light me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
          <button class="btn btn-green" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
        </div>
      </div>
      <div class="d-flex pe-5">
        <img src="/assets/img/heading.png" alt="" style="max-width: 25vw; max-height: 25vw; border-radius: 50%;">
      </div>
    </div>
  </div>
  <div class="container mb-5">
    <span class="h3 fw-bold">Selected Project</span>
  </div>
  <div class="container-fluid">
    <div id="carouselProject" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/projects/images/1.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/projects/images/2.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/projects/images/3.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/projects/images/4.png" class="d-block w-100" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselProject" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="d-flex flex-row">
      <div class="flex-grow-1 h4 fw-bold text-green text-center p-5">Photoshop</div>
      <div class="flex-grow-1 h4 fw-bold text-green text-center p-5">After Effect</div>
      <div class="flex-grow-1 h4 fw-bold text-green text-center p-5">Premiere</div>
    </div>
  </div>
  <div class="container mb-5 pb-5">
    <div class="d-flex flex-row justify-content-between align-items-center gradient-bg text-white px-5 py-3">
      <span class="h3 mb-0">Interested working with me?</span>
      <div class="d-flex flex-row">
        <a href="/projects.php" class="btn btn-outline-light me-3">See More Project</a>
        <button class="btn btn-green d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#registerModal"><i class="material-icons me-2">person</i>Register</button>
      </div>
    </div>
  </div>
  <div class="container my-5 py-5">
    <span class="h3 fw-bold">Why Hire Me?</span>
    <div class="d-flex flex-row my-5">
      <div class="d-flex flex-column flex-grow-1 justify-content-center align-items-center">
        <img src="/assets/img/profile_3.jpg" alt="" style="width: 200px; height: 200px; border-radius: 50%;" class="mb-4">
        <span class="text-center px-3">
        Saya dapat mengkomunikasikan ide-ide saya dengan baik, dibuktikan dengan video saya.
        </span>
      </div>
      <div class="d-flex flex-column flex-grow-1 justify-content-center align-items-center">
        <img src="/assets/img/profile_1.jpg" alt="" style="width: 200px; height: 200px; border-radius: 50%;" class="mb-4">
        <span class="text-center px-3">
        Saya senang bekerja langsung dengan klien  di dalam maupun luar negeri dengan ulasan positif mereka.
        </span>
      </div>
      <div class="d-flex flex-column flex-grow-1 justify-content-center align-items-center">
        <img src="/assets/img/profile_2.jpg" alt="" style="width: 200px; height: 200px; border-radius: 50%;" class="mb-4">
        <span class="text-center px-3">
        Saya mengelola seluruh proses mulai dari mendapatkan klien, jadwal proyek, hingga pengiriman produk.
        </span>
      </div>
    </div>
    <div class="mt-5 pt-5"></div>
    <span class="h3 fw-bold">Feedbacks</span>
    <div class="d-flex flex-row mt-3">
      <div class="card bg-dark border-grey shadow-lg me-2 flex-grow-1">
        <div class="card-body d-flex flex-row">
          <img src="/assets/img/face_1.jpg" width="100" height="100" alt="" class="rounded-circle me-3">
          <div class="d-flex flex-column">
            <span style="text-align: justify;">It was a great pleasure working with Deny throughout the project. Great communication, great skills, and great service! I look forward to working with this designer in future projects. Highly recommend to any prospective clients.</span>
            <div class="d-flex flex-row mt-3 mb-2">
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
            </div>
            <span class="text-green fw-bold">Ariana Angelina</span>
            <span class="small text-muted">Top Level Bartending</span>
          </div>
        </div>
      </div>
      <div class="card bg-dark border-grey shadow-lg ms-2 flex-grow-1">
        <div class="card-body d-flex flex-row">
          <img src="/assets/img/face_2.jpg" width="100" height="100" alt="" class="rounded-circle me-3">
          <div class="d-flex flex-column">
            <span style="text-align: justify;">Dia berhasil mengikuti dan membantu kami dalam membentuk desainya. Dia sangat pandai menerjemahkan keinginan pengguna, dan dia selalu tahu yang terbaik, yang harus dilakukan. Saya yakin, Anda bisa mempercayai Deny.</span>
            <div class="d-flex flex-row mt-3 mb-2">
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
              <i class="material-icons text-warning">star</i>
            </div>
            <span class="text-green fw-bold">Santoso</span>
            <span class="small text-muted">Project Manager</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid pt-5" style="background-color: black;">
    <div class="d-flex flex-row">
      <div class="w-50">
        <img src="/assets/img/abstract_1.png" alt="" class="w-75" style="object-fit: contain;">
      </div>
      <div class="d-flex flex-column flex-grow-1">
        <span class="h3 fw-bold mb-3">Get In Touch</span>
        <span>yohandeny.10@gmail.com</span>
        <span class="mb-3">Phone: (021) 1234567890</span>
        <div class="d-flex flex-row">
          <a href="https://www.facebook.com/"><img src="/assets/img/facebook_icon.svg" alt="" width="40" height="40" class="me-3"></a>
          <a href="https://www.instagram.com/"><img src="/assets/img/instagram_icon.svg" alt="" width="40" height="40" class="me-3"></a>
          <a href="https://www.twitter.com/"><img src="/assets/img/twitter_icon.svg" alt="" width="40" height="40" class="me-3"></a>
          <a href="https://www.youtube.com/"><img src="/assets/img/youtube_icon.svg" alt="" width="40" height="40"></a>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column align-items-center pb-1">
      <span>&copy; 2021 Yohandeny</span>
    </div>
  </div>
  <div id="registerModal" class="modal text-dark" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-green">
          <h5 class="modal-title">Pendaftaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/register.php" method="POST">
          <div class="modal-body">
            <div class="form-group mb-3">
              <label for="name" class="mb-2">Nama Lengkap</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group mb-3">
              <label for="registeremail" class="mb-2">Alamat Email</label>
              <input type="email" id="registeremail" name="email" class="form-control" required>
            </div>
            <div class="form-group mb-3">
              <label for="registerpassword" class="mb-2">Kata Sandi</label>
              <input type="password" id="registerpassword" name="password" class="form-control" required>
            </div>
            <div class="form-group mb-3">
              <label for="phone" class="mb-2">Nomor Telepon</label>
              <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group mb-3">
              <label for="gender" class="mb-2">Jenis Kelamin</label>
              <select name="gender" id="gender" class="form-select" required>
                <option disabled selected>-- Pilih salah satu --</option>
                <option value="1">Laki-Laki</option>
                <option value="2">Perempuan</option>
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="birthdate" class="mb-2">Tanggal Lahir</label>
              <input type="date" id="birthdate" name="birthdate" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="register" class="btn btn-success">Buat Akun Baru</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="loginModal" class="modal text-dark" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-green">
          <h5 class="modal-title">Masuk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/login.php" method="POST">
          <div class="modal-body">
            <div class="form-group mb-3">
              <label for="email" class="mb-2">Alamat Email</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group mb-3">
              <label for="password" class="mb-2">Kata Sandi</label>
              <input type="password" id="password" name="password" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="login">Masuk</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include_once('./components/alert.php') ?>
</body>

</html>