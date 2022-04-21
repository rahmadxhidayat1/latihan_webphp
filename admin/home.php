<!-- <?php
require_once("../config/koneksi_db.php");
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body class="">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-xl-top">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="#">RAHMAD <span style="color: rgb(25, 44, 219);">HIDAYAT</span> PUTRA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse left position-sticky" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact_us" id>Contact Us </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Download
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="materi/01 - pengenalan html.pdf" download="">materi HTML<i class="bi bi-file-earmark-text"></i></a></li>
                  <li><a class="dropdown-item" href="materi/09 10 - Pengenalan CSS (1).pdf" download="">materi CSS<i class="bi bi-braces"></i></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="materi/13 14 - Bootstrap.pdf" download="">materi Bootstrap<i class="bi bi-people-fill"></i></a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resume.html">Resume</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="project_uas/">My store</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- <header style="margin: 5px;">
        <MARquee style="color: red;" scrollamount="30">
            <h1>Tugas Web Programming</h1>
        </MARquee>
    </header> -->
    <div class="row container">
        <div class="col-md-3">
            <?php 
            include("menu.php");
            ?>
        </div>
        <div class="col-md-9">    
            <?php
                if(isset($_GET['modul'])){
                    include "".$_GET['modul']."/index.php";
                }
            ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>