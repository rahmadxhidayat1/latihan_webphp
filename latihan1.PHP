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
    $jam= 9;
    $datang = 9;
    if($datang > $jam){
        echo "silahkan Push Up";
    }
    else if($datang = $jam) {
        echo "silahkan masuk";
    }
    else{
        echo "silahkan masuk kelas dan belajar";
    }
    ?>
    <hr>
    <?php
    $nama = "Agung";
    $kecelakaan = false;
    $luka = true;
    $motor = true;
    if($kecelakaan == true){
        if($luka == true){
            echo "segera ke doktor!!";
            if($motor == true){
                echo "<br>Service motor";
            }
        }else {
            echo $nama."silahkan istirahat";
        }
    }else{
            echo "Semoga ".$nama." sehat dan hati-hati di jalan";
        }
?>
</body>
</html>