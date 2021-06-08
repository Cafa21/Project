<?php
include('../Config/Googleapi.php');
$loginurl = $google_client->createAuthUrl();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="Login.css" class="">
    <title>Login dengan Google</title>
   
</head>

<body style="background-color:white;>
<table class="table table-bordered border-primary">
<div class="n3">
<center>
        <h1>Login Daftar Calon Pegawai </h1>
        </center>
    </div>
    <div class="n4"></div>

    <div class="container n1">
        <div>
            <form action="../controller/controller.php?aksi=tambah" method="post">
                <div class="mb-3  ">
                    <label for="email" class="form-label"></label>
                </div>
                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control rounded-pill">
                <input type="text" name="email" placeholder="Email" class="form-control rounded-pill mt-3">
                <div>
                    <button class="btn btn-warning mt-3 n2">Login</button>
                    <a href="daftar.php" class="btn btn-success"> Daftar </a>
                    
                </div>
            </form>
            <button class="form-control mr-sm-2" color="blue" ><a href="<?php echo $loginurl?>">Login</a> </button>
        </div>
    </div>
</table>
   

   
</body>

</html>