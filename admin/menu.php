<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-12 bg-info">
    <a href="#"></a>
        <?php 
        // $menu = array(
        //     array("id"=>"01", "nm_menu"=>"Dashboard", "link"=>'home.php'),
        //     array("id"=>"02", "nm_menu"=>"Blog", "link"=>'#'),
        //     array("id"=>"03", "nm_menu"=>"Berita", "link"=>'mod_berita'),
        //     array("id"=>"04", "nm_menu"=>"Setting menu", "link"=>'mod_menu')
        //  );
        //  foreach($menu as $cd){
        //      echo "<br>".'<ul class="list-group">'.'<a href="?modul='.$cd["link"].'" style="text-decoration: none;"><li class="list-group-item list-group-item-primary">'.$cd["id"].". ".$cd["nm_menu"].'</li></a>'.'</ul>';
        //     }
            $qry_menu = mysqli_query ($connect_db, "select * from mst_menu") or die ("view menu".mysqli_error($connet_db));
            while($row = mysqli_fetch_array($qry_menu)){
        ?>
        <li class="list-group-item">
            <a href="?modul=<?= $row['link']; ?>"><?= $row['nmmenu']; ?></a>
        </li>
        <?php
    }?>
</div> 
</body>
</html>
