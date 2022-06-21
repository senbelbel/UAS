<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container-fluid mt-4 rounded">
          <form action="/mhs/simpanmhs" method="POST" class="pt-2 pb-2">
              @csrf
              <div class="form-group w-25">
                  <label>NIM</label>
                  <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
              </div>
              <div class="form-group w-25">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan NIM" required>
              </div>
              <label>Gender</label>
              <div class="form-check w-25=">
                  <input type="radio" name="gender" value="Pria" class="form-check-input">
                  <label>Pria</label>
              </div>
              <div class="form-check w-25=">
                  <input type="radio" name="gender" value="Wanita" class="form-check-input">
                  <label>Wanita</label>
              </div>
              <div class="form-check w-25=">
                  <label>Jurusan</label>
                  <select name="jurusan" class="form-control">
                      <option value="0">---Pilih Jurusan---</option>
                      <option value="Sistem Informasi">Sistem Informasi</option>
                      <option value="Informatika">Informatika</option>
                      <option value="Kedokteran">Kedokteran</option>
                      <option value="Bioteknologi">Bioteknologi</option>
                      <option value="Desain Produk">Desain Produk</option>
                  </select>
              </div>
              <label>Bidang Minat</label>
              <div class="form-check w-25=">
                  <input type="checkbox" name="bid_minat[]" value="Database" class="form-check-input">
                  <label>Database</label>
              </div>
              <div class="form-check w-25=">
                  <input type="checkbox" name="bid_minat[]" value="Olahraga" class="form-check-input">
                  <label>Olahraga</label>
              </div>
              <div class="form-check w-25=">
                  <input type="checkbox" name="bid_minat[]" value="Public Speaking" class="form-check-input">
                  <label>Public Speaking</label>
              </div>
              <div class="form-check w-25=">
                  <input type="checkbox" name="bid_minat[]" value="Photogrphy" class="form-check-input">
                  <label>Photography</label>
              </div>
              <div class="form-group pt-4">
                  <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
              </div>
          </form>
       </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>