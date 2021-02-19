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
    <title>PAUD Mentari Cidadap</title>

</head>

<body style="background-color: #dd8f00;">
    <div class="body" style="background-color: #dd8f00;">
        <center>

            <?php echo $this->include('global_layout/header'); ?>

            <?php echo $this->include('Admin/layout/navbar'); ?>
            <br>
        </center>

        <!-- Profil Sekolah -->
        <div class="container" style="background-color: white; border: 5px solid #823b08fd;">
            <h3 style="font-family: Brush Script MT, Cambria, Cochin, Georgia; font-size: 40px;">Profil Sekolah</h3>
			<br>
			<a style="float:right;" href="<?php echo base_url('admin/home'); ?>">Kembali</a>
			<?php echo form_open('admin/home/edit?mode=profil'); ?>
            <table class="table" style="font-size: 13px;">
                <tr>
                    <td>Nama Lembaga
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="nama_lembaga" placeholder="Nama Lembaga" value="<?php echo isset($loadForm['nama_lembaga'])? $loadForm['nama_lembaga'] : ''; ?>"/>
				<?php if(isset($validation['nama_lembaga'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['nama_lembaga']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Kepemilikan Tanah
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="pemilik_tanah" placeholder="Kepemilikan Tanah" value="<?php echo isset($loadForm['pemilik_tanah'])? $loadForm['pemilik_tanah'] : ''; ?>"/>
				<?php if(isset($validation['pemilik_tanah'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['pemilik_tanah']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Luas Tanah
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="luas_tanah" placeholder="Luas Tanah" value="<?php echo isset($loadForm['luas_tanah'])? $loadForm['luas_tanah'] : ''; ?>"/>
				<?php if(isset($validation['luas_tanah'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['luas_tanah']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Luas Bangunan
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="luas_bangunan" placeholder="Luas Bangunan" value="<?php echo isset($loadForm['luas_bangunan'])? $loadForm['luas_bangunan'] : ''; ?>"/>
				<?php if(isset($validation['luas_bangunan'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['luas_bangunan']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Luas Tanah yang Akan Dibangun
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="luas_bangun_tanah" placeholder="Luas Bangun Tanah" value="<?php echo isset($loadForm['luas_bangun_tanah'])? $loadForm['luas_bangun_tanah'] : ''; ?>"/>
				<?php if(isset($validation['luas_bangun_tanah'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['luas_bangun_tanah']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Lokasi
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="lokasi" placeholder="Lokasi" value="<?php echo isset($loadForm['lokasi'])? $loadForm['lokasi'] : ''; ?>"/>
				<?php if(isset($validation['lokasi'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['lokasi']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Telepon/HP
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="telepon" placeholder="Telepon/HP" value="<?php echo isset($loadForm['telepon'])? $loadForm['telepon'] : ''; ?>"/>
				<?php if(isset($validation['telepon'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['telepon']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Email
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="email" placeholder="Email" value="<?php echo isset($loadForm['email'])? $loadForm['email'] : ''; ?>"/>
				<?php if(isset($validation['email'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['email']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Website
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="website" placeholder="Website" value="<?php echo isset($loadForm['website'])? $loadForm['website'] : ''; ?>"/>
				<?php if(isset($validation['website'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['website']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Hari Pembelajaran
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="hari_pembelajaran" placeholder="Hari Pembelajaran" value="<?php echo isset($loadForm['hari_pembelajaran'])? $loadForm['hari_pembelajaran'] : ''; ?>"/>
				<?php if(isset($validation['hari_pembelajaran'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['hari_pembelajaran']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Jam Pembelajaran
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="jam_pembelajaran" placeholder="Jam Pembelajaran" value="<?php echo isset($loadForm['jam_pembelajaran'])? $loadForm['jam_pembelajaran'] : ''; ?>"/>
				<?php if(isset($validation['jam_pembelajaran'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['jam_pembelajaran']; ?></span>
				<?php endif; ?>
                <tr>
                    <td>Kegiatan Inti
                    <td style="text-align: center; width: 10%;"> :
                    <td><input class="form-control" type=text size=128 name="kegiatan_inti" placeholder="Kegiatan Inti" value="<?php echo isset($loadForm['kegiatan_inti'])? $loadForm['kegiatan_inti'] : ''; ?>"/>
				<?php if(isset($validation['kegiatan_inti'])): ?>
				<tr>
					<td colspan=2></td>
					<td><span><?php echo $validation['kegiatan_inti']; ?></span>
				<?php endif; ?>
				<tr>
					<td colspan=3 align=center><input class="btn btn-primary" type=submit value="Simpan" />
            </table>
			<?php echo form_close(); ?>
        </div>
        <br>

        <footer style="position: absolute; bottom: 1; width: 100%; background-color: black;">
            <br>
            <center>
                <p style="color: white;"> Copyright PAUD Mentari Cidadap @2021 </p>
            </center>
        </footer>

</body>

</html>