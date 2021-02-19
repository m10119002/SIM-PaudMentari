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
    <title>Sarpras</title>

</head>

<body style="background-color: #dd8f00;">
    <div class="body" style="background-color: #dd8f00;">
        <center>

            <?php echo $this->include('global_layout/header'); ?>

            <?php echo $this->include('Admin/layout/navbar'); ?>
            <br>
        </center>

        <!-- Informasi Sarana dan Prasarana -->
        <div class="container" style="background-color: white; border: 5px solid #823b08fd;">
            <h3 style="font-family: Brush Script MT, Cambria, Cochin, Georgia; font-size: 40px;">Info Sarpras - Ubah Sarana</h3>
			<br>
			<a style="float:right;" href="<?php echo base_url('admin/sarpras'); ?>">Kembali</a>
			<?php echo form_open('admin/sarpras/sarana/edit'); ?>
            <table class="table" style="font-size: 13px;">
                <tr>
                    <td>Nama Sarana
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=64 name="nama" placeholder="Nama Sarana (contoh: Meja Siswa)" value="<?php echo isset($loadForm['nama'])? $loadForm['nama'] : ''; ?>"/>
				<?php if(isset($validation['nama'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['nama']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Jumlah
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=number size=64 name="jumlah" placeholder="Jumlah Sarana" value="<?php echo isset($loadForm['jumlah'])? $loadForm['jumlah'] : ''; ?>"/>
				<?php if(isset($validation['jumlah'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['jumlah']; ?></span>
				<?php endif; ?>
                <tr>
                    <td colspan=3 align=center><input class="btn btn-primary" type=submit value="Simpan" />
            </table>
			<?php echo form_hidden('id', $loadForm['id']); ?>
			<?php echo form_close(); ?>
        </div>
        <br><br><br>

        <footer style="position: absolute; bottom: 2; width: 100%; background-color: black;">
            <br>
            <center>
                <p style="color: white;"> Copyright PAUD Mentari Cidadap @2021 </p>
            </center>
        </footer>

</body>

</html>