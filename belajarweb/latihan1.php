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
        $pembeli ="putin";
        $uang = 9500000;
        switch($uang){
            case $uang>=15000000;
            $hasil = $pembeli." membeli laptop asus";
            break;
            case $uang>=9500000;
            $hasil = $pembeli." membeli laptop hp";
            break;
            default:
            $hasil = $pembeli." miskin banget yaa";
            break;
        }
        echo $hasil;
        
        ?>
</body>
</html>