<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <header>
        <MARquee style="color: red;" scrollamount="30">
            <h1>Tugas Web Programming</h1>
        </MARquee>
    </header>
    <section></section>
    <div class="">
        <?php 
            include("menu.php");
        ?>
    </div>
    <div class="col-md-9 bg-danger">    
            <?php
                if(isset($_GET['modul'])){
                    include "".$_GET['modul']."/index.php";
                }
            ?>
        </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>