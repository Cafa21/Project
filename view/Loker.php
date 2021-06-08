<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  

  <head>
    <title>Lowongan Kerja </title>
    <style>
        h2
        {
            background-color: blue;
            color: crimson;
            font-family: sans-serif;
            text-align: center;
            width: 45%;
            margin:auto;
            padding: 20px;
        }
 
        body
        {
            background-image: url('bg8.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
        
        }
        .isi{
           margin-top:5%;
        }
    </style>
  </head>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  <nav class="navbar navbar-expand-lg bg-info ">
    <img src="logo-jasa-raharja.png" width="10%" height="10%">
    <a class="navbar-brand" href="#" style="color: black;font-family: 'Calibri',
         serif;font-weight:bold;">Penerimaan <br>Pegawai Baru</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto" style="font-family: 'Libre Baskerville', serif;">
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color: black; font-weight:bold;">Beranda <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black; font-weight:bold;">Profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="color: black; font-weight:bold;">Bantuan</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" style="color: white">Alamat Kantor</a>
            <a class="dropdown-item" href="#" style="color: white">Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" style="color: white">Logout</a>
          </div>
        </li>
        <form class="form-inline my-2 my-lg-0">
        </form>
    </div>
  </nav>

<div class="isi"></div>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-8">
        <h1> Penerimaan </h1>
          <h4>Calon Pegawai Baru</h4>

          <input type="submit" style="background-color: rgb(113, 240, 170);font-weight:bold;
                  " value="Daftar Sekarang Juga">


        </div>
        <div class="col-4">
          <div>
            <form action="../controller/controller.php?aksi=tambah" method="post">
              <div class="mb-3  ">
                <label for="prodi" class="form-label"></label>
                <select name="prodi" id="prodi" class="btn btn-secondary mt-3">
                  <option value="---pilihan jenis pekerjaan 1">Pegawai atau Sekretaris</option>
                  <option value="Pilihan jenis pekerjaan 2 ">Customer Service</option>
                  <option value="Pilihan jenis pekerjaan 3">Manager atau Sales</option>
                  <option value="Pilihan jenis pekerjaan lainnya">Cleaning Service</option>
                </select>
              </div>
              <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control rounded-pill">
              <input type="text" name="email" placeholder="Email" class="form-control rounded-pill mt-3">
              <div>
                <button class="btn btn-secondary mt-3 n2">Daftar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
 </div>
  </body>
</html>