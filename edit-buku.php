<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM buku WHERE idbuku = $id LIMIT 1";

  $result = mysqli_query($kon, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA BUKU
            </div>
            <div class="card-body">
              <form action="update-buku.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Buku</label>
                  <input type="text" name="namabuku" value="<?php echo $row['namabuku'] ?>" placeholder="Masukkan Nama Buku" class="form-control”>
                  <input type="hidden" name="idbuku" value="<?php echo $row['idbuku'] ?>">
                </div>

                <div class="form-group">
                  <label>Kategori Buku</label>
                  <input type="text" name="jenisbuku" value="<?php echo $row['jenisbuku'] ?>" placeholder="Masukkan Kategori Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tahun Terbit</label>
                  <input type="text" name="tahunterbit" value="<?php echo $row['tahunterbit'] ?>" placeholder="Masukkan Tahun Terbit Buku" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Pengarang</label>
                  <input type="text" name="pengarang" value="<?php echo $row['pengarang'] ?>" placeholder="Masukkan Pegnarang Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Penerbit</label>
                  <input type="text" name="penerbit" value="<?php echo $row['penerbit'] ?>" placeholder="Masukkan Penerbit Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>ISBN</label>
                  <input type="text" name="isbn" value="<?php echo $row['isbn'] ?>" placeholder="Masukkan ISBN Buku" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>