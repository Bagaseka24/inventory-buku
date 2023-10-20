<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Buku</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Tambah Buku
            </div>
            <div class="card-body">
              <form action="simpan-buku.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Buku</label>
                  <input type="text" name="namabuku" placeholder="Masukkan Nama Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kategori Buku</label>
                  <input type="text" name="jenisbuku" placeholder="Masukkan Kategori" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tahun Terbit</label>
                  <input type="text" name="tahunterbit" placeholder="Masukkan Tahun Terbit" class="form-control">
                </div>

                <div class="form-group">
                  <label>Pengarang</label>
                  <input type="text" name="pengarang" placeholder="Masukkan Pengarang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Penerbit</label>
                  <input type="text" name="penerbit" placeholder="Masukkan Penerbit" class="form-control">
                </div>

                <div class="form-group">
                  <label>ISBN</label>
                  <input type="text" name="isbn" placeholder="Masukkan ISBN" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </body>
</html>




