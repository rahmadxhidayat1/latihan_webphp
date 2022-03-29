<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <label for="" class="form-label">ID</label>
        <input type="text" class="form-control" name="ID" placeholder="masukkan">
      </div>
      <div class="modal-body">
          <label for="" class="form-label">Judul</label>
        <input type="text" class="form-control" name="ID" placeholder="masukkan">
      </div>
      <div class="modal-body">
          <label for="" class="form-label">Konten</label>
        <input type="text" class="form-control" name="ID" placeholder="masukkan">
      </div>
      <div class="modal-body">
          <label for="" class="form-label">Action</label>
        <input type="text" class="form-control" name="ID" placeholder="masukkan">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <table border="1">
    <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>action</th>
        </tr>
    <?php
        $russian = array(
            array("id"=>"01", "judul"=>"Judul 1", "konten"=>"isi berita 01", "action"=>"Edit hapus"),
            array("id"=>"02", "judul"=>"Judul 2", "konten"=>"isi berita 02", "action"=>"Edit hapus"),
            array("id"=>"03", "judul"=>"Judul 3", "konten"=>"isi berita 03","action"=>"Edit hapus")
        );
        foreach($russian as $rusia){?>
        <tr>
            <td>
                <?php echo $rusia["id"];?>
            </td>
            <td>
                <?php echo $rusia["judul"];?>
            </td>
            <td>
                <?php echo $rusia["konten"];?>
            </td>
            <td>
                <a href="#"><?php echo $rusia["action"];?></a>
            </td>
        </tr>
        <?php }?>
        <tr></tr>
    </table>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>