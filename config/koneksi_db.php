<?php 
    $servername="localhost";
    $database="dblatihan";
    $user_db = "root";
    $pass_db ="";

    $connect_db=mysqli_connect($servername, $user_db, $pass_db, $database);
    if(!$connect_db){
        echo "<h3>koneksi gagal!! </h3>";
        exit;
    }
    else{
    }
?>