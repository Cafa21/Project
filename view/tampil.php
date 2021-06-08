<?php
include '../model/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="tampil.css" class="">
</head>
<body>
	<h1>Data Lowongan Pegawai</h1>
	<a href="input.php">Input Data</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Umur</th>
			<th>Pilihan</th>
		</tr>
		<?php 
			$no = 1;
			foreach ($db->tampil_data() as $data) {  ?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $data['Nama']?></td>
					<td><?php echo $data['Email']?></td>
					<td><?php echo $data['Alamat']?></td>
					<td><?php echo $data['Umur']?></td>
					<td>
                    <a href="edit.php?ID=<?php echo $data['ID']; ?>&aksi=edit">Edit</a>
            <a href="../controller/controller.php?ID=<?php echo $data['ID']; ?>&aksi=hapus">Hapus</a>
					</td>
				</tr>
		<?php 
			}
		 ?>

	</table>
</body>
</html>

	