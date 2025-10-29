<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawsome/css/font-awesome.min.css" />
    <!-- Font -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>belajar_crud</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light mb-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> CRUD - BS5 </a>
      </div>
    </nav>
    <div class="container">
      <form method="POST" action="proses.php" enctype="multipart/form-data">
      <div class="mb-3 row">
        <label for="nisn" class="col-sm-2 col-form-label"> NISN </label>
        <div class="col-sm-10">
          <input
          required
            name="nisn"
            type="text"
            class="form-control"
            id="nisn"
            placeholder="ex : 99999"
          />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label"> Nama Siswa </label>
        <div class="col-sm-10">
          <input
          required
            type="text"
            name="nama_siswa"
            class="form-control"
            id="nama"
            placeholder="ex : Wahyu"
          />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="jenis" class="col-sm-2 col-form-label">
          Jenis Kelamin
        </label>
        <div class="col-sm-10">
          <select required id="jenis" name="jenis_kelamin" class="form-select" aria-label="Default select example">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label"> Foto Siswa </label>
        <div class="col-sm-10">
          <input required type="file" name="foto_siswa" class="form-control" id="foto" accept="image/*" />
        </div>
      </div>

      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label"> Alamat </label>
        <div class="col-sm-10">
          <textarea required class="form-control" id="alamat" name="alamat" rows="3"></textarea>
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <div class="col">
          <?php
          if (isset($_GET['ubah'])) {
          ?>
          <button type="submit"  name="aksi" value="edit" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Simpan Perubahan
          </button>
          <?php
          } else {
          ?>
          <button type="submit" name="aksi" value="add" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Tambahkan
          </button>
          <?php
          }
          ?>
          <a href="beranda.php" type="button" class="btn btn-danger">
            <i class="fa fa-reply" aria-hidden="true"></i>
            Batal
          </a>
        </div>
      </div>
      </form>
    </div>
  </body>
</html>