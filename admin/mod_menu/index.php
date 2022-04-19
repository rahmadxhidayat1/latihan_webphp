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
    <button type="button" class="btn btn-primary">Tambah data</button>
    <div>
    <table border=1 class="table table-dark table-striped">
        <tr>
            <th>ID Menu</th>
            <th>Nama menu</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="#" class="btn btn-xs btn-primary">
                    <i class="bi bi-controller">Edit</i>
                </a>
                <a href="#" class="btn btn-xs btn-primary">
                    <i class="bi bi-trash-fill">Delete</i>
                </a>
            </td>
        </tr>
    </table>
    <form>
        <br>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">
                Nama Menu
            </label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">
                Link
            </label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
            </div>
        </div>
        <fieldset class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">Active</label>
                </div>
                <button type="submit" class="btn btn-dark"><i class="bi bi-xbox"></i> Batal</button>
                <button type="submit" class="btn btn-primary"><i class="bi bi-download"></i> Simpan</button>
            </div>
        </fieldset>
    </form>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>