<?php
require_once("../config/koneksi_db.php");
?>
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
<body>
    <header>
        <MARquee style="color: red;" scrollamount="30">
            <h1>Tugas Web Programming</h1>
        </MARquee>
    </header>
    <div class="row container">
    <div class="col-md-5">
        <?php 
            include("menu.php");
        ?>
    </div>
    <div class="col-md-7">    
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