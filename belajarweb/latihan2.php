<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //sebagai inputan
    $pembeli = "ukraine";
    $toko = "Toko Plak";
    $jmlh_beli =3;
    $kode = "B01";
    $diskon = 0;
    if ($kode === "B01"){
        $namabarang ="buku";
        $harga= 5000;
        if($jmlh_beli >= 3){
            $diskon = 3000*$jmlh_beli;
        }
    }
    else if ($kode === "B02"){
        $namabarang ="pulpen";
        $harga= 3500 ;
        if ($jmlh_beli>=6){
            $diskon = 2000*$jmlh_beli;
        }
    }
    else if ($kode === "B03"){
        $namabarang ="penghapus";
        $harga= 5000;
    }
    else{
        $namabarang ="Tidak ditemukan nama barang!!";
        $harga  = 0;
    }
    echo $toko."<br>";
    echo "Kode ".$kode." (".$namabarang.") ,beli sebanyak: ".$jmlh_beli." PCS </br>";
    echo "jumlah dibayar:".($harga*$jmlh_beli-$diskon);
    ?>
</body>
</html>