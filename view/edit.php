<?php
include '../model/database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Edit data calon Pegawai</title>
</head>
<body>

    <h1>Edit Data Calon Pegawai</h1>
    <form action="../controller/controller.php?aksi=update" method="post">
        <?php 
foreach ($db->edit($_GET['ID']) as $data) { ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="ID" value="<?php echo $data['ID']?>">
                    <input type="text" name="Nama" value="<?php echo $data['Nama']?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" value="<?php echo $data['Email']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value="<?php echo $data['Alamat']?>"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="Umur" value="<?php echo $data['Umur']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
        <?php } ?>
    </form>
</body>

</html>