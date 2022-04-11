<?php
    $userdb = "rahmad";
    $passdb = md5("zxc");

    $txt_user = $_POST['username'];
    $txt_pass = md5($_POST['password']);
    if ($txt_user=== $userdb && $txt_pass === $passdb){
        header("location:http://localhost/latihan_webphp/admin/mod_berita/home.php");
    }
    else {
        header("location:http://localhost/latihan_webphp/admin/index.php");
    }
?>