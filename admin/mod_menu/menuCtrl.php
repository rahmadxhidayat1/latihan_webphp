<?php
if(isset($_GET['act']) && ($_GET['act']=="update" || $_GET['act']== "save")){
    require_once("../../config/koneksi_db.php");
    require_once("../../config/config.php");
}else{
    require_once("../config/koneksi_db.php");
    require_once("../config/config.php");
}

    if(isset($_GET['act']) && ($_GET['act']== "add")){
        //jika ada send variabel act=add
        $judul ="Form input data";
    }
    else if(isset($_GET['act']) && ($_GET['act']== "edit")){
        $judul ="Form edit data";
        $idkey = $_GET['id'];
        $qdata = mysqli_query($connect_db,"select * from mst_menu where idmenu=$idkey");
        $data = mysqli_fetch_array($qdata);
        $aktif = $data['is_active'];
        if($aktif == 1){
            $check = "checked";
        }
        else{
            $check ="";
        }
    }
    else if(isset($_GET['act']) && ($_GET['act']== "save")){
        echo "Oke proses simpan <br>";
        $namamenu =$_POST['txt_menu'];
        $link =$_POST['txt_link'];
        if(isset($_POST['checkbox'])){
            $aktif = 1;
        }else{
            $aktif = 0;
        }
        //echo $namamenu." ".$link." ".$aktif;
        $qinsert = mysqli_query($connect_db, "insert into mst_menu(nmmenu,link,is_active) values('$namamenu','$link',$aktif)")
        or die (mysqli_error($connect_db));
        if($qinsert){
            //ketik proses simpan berhasil
            header("location: http://localhost/latihan_webphp/admin/home.php?modul=mod_menu");
        }
    }
    else if(isset($_GET['act']) && ($_GET['act']== "update")){
    }
?>