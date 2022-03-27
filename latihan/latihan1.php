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
    $nilai= array(60,70,80,75,90);
    //sort($nilai);
    var_dump($nilai);
    echo $nilai[1];
    echo "<br>";
    ?>
    <?php
    $data_nilai= array("dina"=>80, "sinta"=>90, "nia"=>85);
    var_dump($data_nilai);
    echo $data_nilai["dina"]."<br>";
    ?>
    <?php
    for($i = 2; $i <=13; $i++){
        echo $i.",";
    }
    echo "<br>";
    $b=0;
    while($b <= 13){
        if ($b >=2){
            echo $b.",";
        }
        $b++;
    }echo "<br>";
    $c = 0;
    do{
        if ($c >=2){
            echo $c.",";
        }
        $c++;
    }while($c <=13 );
    echo "<br";
    for($no=0;$no<=30;$no++)
    {
        if($no % 2 == 0){
            echo "<b>".$no."</b>";
        }
        else{
            echo $no;
        }
    }echo "<br>";

    $mhs = array("putra","ardi","galang","adit","sulthan","agung");
    foreach($mhs as $m)
    {
        echo $m.",";
    }
    echo "<br>".$mhs[1];
    echo "<br>";
    $code = array(
        array("kode"=>"Kode B01", "alat"=>"Buku", "harga"=>"50000"),
        array("kode"=>"Kode B02", "alat"=>"Pulpen", "harga"=>"2000"),
        array("kode"=>"Kode B03", "alat"=>"Stipo", "harga"=>"6500")
    );
    foreach($code as $cd){
        echo "<br>".$cd["kode"]." => ".$cd["alat"]." =>".$cd["harga"];
    }
    ?>
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>konten</th>
        <th>action</th>
    </tr>
    <?php 
        $kotak = array(
        array("id"=>"01", "judul"=>"Judul satu", "konten"=>"Isi berita 01", "action"=>"Edit Hapus"),
        array("id"=>"02", "judul"=>"Judul dua", "konten"=>"Isi berita 02", "action"=>"Edit Hapus"),
        array("id"=>"03", "judul"=>"Judul tiga", "konten"=>"Isi berita 03", "action"=>"Edit Hapus")
        )
    ?>
</body>
</html>