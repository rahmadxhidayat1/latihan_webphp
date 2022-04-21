<?php
include 'menuCtrl.php';
if(!isset($_GET['act'])){
//jika tidak ditemukan pengiriman variabel "act"
?>
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
    <a href="?modul=mod_menu&act=add" class="btn btn-primary btn-xs mb-1" >Tambah data</a>
    <div>
    <table border=1 class="table table-dark table-striped">
        <tr>
            <th>ID Menu</th>
            <th>Nama menu</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
        <?php
            $qry_listmenu =mysqli_query($connect_db,"select * from mst_menu order by idmenu DESC")
                or die("Gagal akses table mst_menu bl##".mysqli_error($connect_db));
            while($row = mysqli_fetch_array($qry_listmenu)){

        ?>
        <tr>
            <td>
                <?php echo $row['idmenu'];?>
            </td>
            <td>
                <?= $row['nmmenu'];?><!-- tanpa echo untuk menampilkan-->
            </td>
            <td>
                <?php echo $row['link'];?>
            </td>
            <td>
                <a href="?modul=mod_menu&act=edit&id=<?= $row['idmenu']; ?>" class="btn btn-xs btn-primary">
                    <i class="bi bi-controller">Edit</i>
                </a>
                <a href="#" class="btn btn-xs btn-primary">
                    <i class="bi bi-trash-fill">Delete</i>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
}
else if(isset($_GET['act']) && ($_GET['act']== "add")){
?>
    <h3><?php echo $judul; ?></h3>
    <form action="mod_menu/menuCtrl.php?modul=mod_menu&act=save" method="post">
        <br>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">
                Nama Menu
            </label>
            <div class="col-sm-10">
                <input type="text" name="txt_menu" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">
                Link
            </label>
            <div class="col-sm-10">
                <input type="text" name="txt_link" class="form-control" id="txt_link">
            </div>
        </div>
        <fieldset class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                    <input class="form-check-input" name="checkbox" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">Active</label>
                </div>
                <button type="submit" name="btnreset" class="btn btn-dark"><i class="bi bi-xbox"></i> Batal</button>
                <button type="submit" name="btnsubmit" class="btn btn-primary"><i class="bi bi-download"></i> Simpan</button>
            </div>
        </fieldset>
    </form>
    <?php
}
else if(isset($_GET['act']) && ($_GET['act']== "edit")){
     ?>
     <h3><?php echo $judul ?></h3>
    <form action="mod_menu/menuCtrl.php?modul=mod_menu&act=save" method="post">
        <br>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">
                Nama Menu
            </label>
            <div class="col-sm-10">
                <input type="text" name="txt_menu" class="form-control" id="txt_menu" value="<?= $data['nmmenu']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">
                Link
            </label>
            <div class="col-sm-10">
                <input type="text" name="txt_link" class="form-control" id="txt_link"  value="<?= $data['link'];?>" >
            </div>
        </div>
        <fieldset class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                    <input class="form-check-input" name="checkbox" type="checkbox" id="checkbox" <?php echo $check; ?>>
                    <label class="form-check-label" for="gridCheck1">Active</label>
                </div>
                <button type="submit" name="btnreset" class="btn btn-dark"><i class="bi bi-xbox"></i> Batal</button>
                <button type="submit" name="btnsubmit" class="btn btn-primary"><i class="bi bi-download"></i> Simpan</button>
            </div>
        </fieldset>
    </form>
    </div>
    <?php 
}
?>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>