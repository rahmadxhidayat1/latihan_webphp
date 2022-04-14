<?php
require_once("../config/koneksi_db.php");
require_once("../config/config.php");
    // $userdb = "rahmad";
    // $passdb = md5("zxc");
    if(isset($_POST["btnlogin"])){
        $txt_user = $_POST['username'];
        $txt_pass = md5($_POST['password']);
        $result = mysqli_query($connect_db,"select * from mst_userlogin where username = '".$txt_user."' AND password = '".$txt_pass."' AND isactive=1");
        //echo mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0){
            echo "hasil= ".mysqli_num_rows($result);
            header("Location: ".URL."home.php");
        }else{
            header("Location: ".URL."");
        }
    }
    // if ($txt_user=== $userdb && $txt_pass === $passdb){
    //     header("location:http://localhost/latihan_webphp/admin/mod_berita/home.php");
    // }
    // else {
    //     header("location:http://localhost/latihan_webphp/admin/index.php");
    // }
?>