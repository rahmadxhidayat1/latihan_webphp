<div class="row">
    <div class="col-md-3 bg-info">
        <a href="#"></a>
        <?php 
        $menu = array(
            array("id"=>"01", "nm_menu"=>"Dashboard", "link"=>'home.php'),
            array("id"=>"02", "nm_menu"=>"Blog", "link"=>'#'),
            array("id"=>"03", "nm_menu"=>"Berita", "link"=>'mod_berita')
         );
         foreach($menu as $cd){
             echo "<br>".'<ul class="list-group">'.'<a href="?modul='.$cd["link"].'" style="text-decoration: none;"><li class="list-group-item list-group-item-primary">'.$cd["id"].". ".$cd["nm_menu"].'</li></a>'.'</ul>';
            }
            ?>
            </div>
</div>