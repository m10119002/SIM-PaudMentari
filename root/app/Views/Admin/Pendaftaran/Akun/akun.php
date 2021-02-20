<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Favicon Tab -->
    <?php echo $this->include('global_layout/favicon'); ?>
    <title>Data Akun</title>

</head>

<body style="background-color: #dd8f00;">
    <div class="body" style="background-color: #dd8f00;">
        <center>

            <?php echo $this->include('global_layout/header'); ?>

            <?php echo $this->include('Admin/layout/navbar'); ?>
            <br>
        </center>

        <!-- Data Akun -->
        <div class="container" style="background-color: white; border: 5px solid #823b08fd;">
            <h3 style="font-family: Brush Script MT, Cambria, Cochin, Georgia; font-size: 40px;">Info Pendaftaran - Data Akun</h3>
            <table class="table table-striped" style="font-size: 13px;">
				<thead>
					<tr>
						<th>Username</th>
						<th>Status Admin</th>
						<th colspan=2 style="text-align:center;">Aksi</th>
				</thead>
				<?php if (isset($loadTable)): ?>
				<?php foreach ($loadTable as $row): ?>
					<?php if ($row['username'] == session()->get('user_id')): ?>
					<?php else: ?>
						<tr>
							<td><?php echo $row['username']; ?>
							<td><?php echo ($row['is_admin'] == 1? 'YA' : 'TIDAK'); ?>
							<td align=center><?php echo ($row['is_admin'] == 0? '<a href="'.base_url('admin/pendaftaran/akun/ubahpass?user_id='.$row['username']).'">Ubah Password</a>' : ''); ?>
							<td align=center><a href="<?php echo base_url('admin/pendaftaran/akun/hapus?user_id='.$row['username']); ?>">Hapus</a>
					<?php endif; ?>
				<?php endforeach; ?>
				<?php endif; ?>
				<tr>
					<td colspan=4 align=center><a href="<?php echo base_url('admin/pendaftaran/akun/tambah'); ?>">Tambah Akun</a>
            </table>
			<br>
			<center><?php echo isset($formMessage)? $formMessage : ''; ?></center>
            <br><br>
        </div>
        <br><br><br><br><br><br><br><br>

        <footer style="position: absolute; bottom: 2; width: 100%; background-color: black;">
            <br>
            <center>
                <p style="color: white;"> Copyright PAUD Mentari Cidadap @2021 </p>
            </center>
        </footer>

</body>

</html>