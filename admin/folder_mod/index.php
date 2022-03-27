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
            $i=0;
            while($i<4){
                echo '<td style="text-align: center;">'.$i.'</td>';
                $i++;
            }
        ?>
    </table>
</body>
</html>