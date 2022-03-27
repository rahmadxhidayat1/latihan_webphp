<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>action</th>
        </tr>
        <?php
        $angry = array(
            array("id"=>"01", "judul"=>"Judul Satu", "konten"=>"Isi berita 01", "action"=>"<u>Edit Hapus</u>"),
            array("id"=>"02", "judul"=>"Judul Dua", "konten"=>"Isi berita 02", "action"=>"<u>Edit Hapus</u>"),
            array("id"=>"03", "judul"=>"Judul Tiga", "konten"=>"Isi berita 03", "action"=>"<u>Edit Hapus</u>")
        );
            $i=0;
            while($i<4){
                echo '<td style="text-align: center;">'.$i.'</td>';
                $i++;
            }
        ?>
    </table>
</body>
</html>