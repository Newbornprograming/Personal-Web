<?php
// Mengambil direktori project saat ini
$root = $_SERVER['DOCUMENT_ROOT'];
include_once("$root/config/database.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
  <div class="container-fluid">
    <a href="/" class="navbar-brand">Yohandeny</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <?php if (isset($_SESSION['user']) || isset($_SESSION['admin_auth'])) { ?>
          <?php if (isset($_SESSION['user'])) { ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
          </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/orders">Pesanan</a>
            </li>
          <?php }?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/logout.php">Logout</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/projects.php">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/assets/cv.pdf" download="CV_YohanesDeny.pdf">Download CV</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>