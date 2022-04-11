<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <header>
        <MARquee style="color: red;" scrollamount="30">
            <h1>Tugas Web Programming</h1>
</MARquee>
    </header>
    <section></section>
    <div class="">
        <div class="row">
            <div class="col-md-3 bg-info">
                <a href="#"></a>
                <?php 
                    $menu = array(
                        array("id"=>"01", "nm_menu"=>"Dashboard", "link"=>'#'),
                        array("id"=>"02", "nm_menu"=>"Blog", "link"=>'#'),
                        array("id"=>"03", "nm_menu"=>"Berita", "link"=>'mod_berita')
                    );
                    foreach($menu as $cd){
                        echo "<br>".'<ul class="list-group">'.'<a href="'.$cd["link"].'" style="text-decoration: none;"><li class="list-group-item list-group-item-primary">'.$cd["id"].". ".$cd["nm_menu"].'</li></a>'.'</ul>';
                    }
                ?>
                <br>
            </div>
            <div class="col-md-9 bg-danger">    
            <?php
                $parabot = array("Meja Komputer", "Tempat Tidur", "Korsi", "Kompor", "Ember", "Sapu");
                $hitung = count($parabot);
                for($x = 1; $x < $hitung; $x++) {
                    echo $x.'. '.$parabot[$x];
                    echo "<br>";
                }
            ?>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>