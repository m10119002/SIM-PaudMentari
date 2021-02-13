<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Data Mahasiswa</title>
	<meta name="description" content="Ini deskripsi">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href=<?php echo base_url("/risitas-favicon.ico") ?>/>
</head>
<body>
	Data Mahasiswa
	<table border=1>
		<tr>
			<th>Kelas</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th colspan=2>Aksi</th><!-- th4 = edit --><!-- th5 = remove -->
		</tr>
		<?php foreach ($hasildata as $mahasiswa): ?>
		<tr>
			<td><?php echo $mahasiswa['kelas'] ?></td>
			<td><?php echo $mahasiswa['nim'] ?></td>
			<td><?php echo $mahasiswa['nama_lengkap'] ?></td>
			<td><a href=<?php echo base_url("/edit?nim=".$mahasiswa['nim']) ?>>UBAH</a></td>
			<td><a href=<?php echo base_url("/hapus?nim=".$mahasiswa['nim']) ?>>HAPUS</a></td>
		</tr>
		<?php endforeach; ?>
		<tr>
			<td colspan=5><a href=<?php echo base_url("/tambah") ?>>Tambah Mahasiswa</a></td>
		</tr>
	</table>
	<hr>
	tipeUser: <?php echo $ses; ?>
</body>
</html>