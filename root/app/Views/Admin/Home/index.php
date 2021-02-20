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

        <?php echo $this->include('global_layout/carousel'); ?>

        <!-- Profil Sekolah -->
        <div class="container" style="background-color: white; border: 5px solid #823b08fd;">
            <h3 style="font-family: Brush Script MT, Cambria, Cochin, Georgia; font-size: 40px;">Profil Sekolah</h3>
			<br>
			<a style="float:right;" href="<?php echo base_url('admin/home/edit?mode=profil'); ?>">Ubah Informasi</a>
            <table class="table" style="font-size: 13px;">
                <tr>
                    <td>Nama Lembaga
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['nama_lembaga'])? $loadForm['nama_lembaga'] : '-'; ?>

                <tr>
                    <td>Kepemilikan Tanah
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['pemilik_tanah'])? $loadForm['pemilik_tanah'] : '-'; ?>
                <tr>
                    <td>Luas Tanah
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['luas_tanah'])? $loadForm['luas_tanah'] : '-'; ?>
                <tr>
                    <td>Luas Bangunan
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['luas_bangunan'])? $loadForm['luas_bangunan'] : '-'; ?>
                <tr>
                    <td>Luas Tanah yang Akan Dibangun
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['luas_bangun_tanah'])? $loadForm['luas_bangun_tanah'] : '-'; ?>

                <tr>
                    <td>Lokasi
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['lokasi'])? $loadForm['lokasi'] : '-'; ?>
                <tr>
                    <td>Telepon/HP
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['telepon'])? $loadForm['telepon'] : '-'; ?>
                <tr>
                    <td>Email
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['email'])? $loadForm['email'] : '-'; ?>
                <tr>
                    <td>Website
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['website'])? $loadForm['website'] : '-'; ?>
                <tr>
                    <td>Hari Pembelajaran
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['hari_pembelajaran'])? $loadForm['hari_pembelajaran'] : '-'; ?>
                <tr>
                    <td>Jam Pembelajaran
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['jam_pembelajaran'])? $loadForm['jam_pembelajaran'] : '-'; ?>
                <tr>
                    <td>Kegiatan Inti
                    <td style="text-align: center; width: 10%;"> :
                    <td><?php echo isset($loadForm['kegiatan_inti'])? $loadForm['kegiatan_inti'] : '-'; ?>


            </table>

            <!-- Google Map -->
            <div class="container-fluid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.820134189582!2d107.13978161477354!3d-7.030416494921851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e685c822f9ea62d%3A0x4135abd4257bb62d!2sPAUD%20MENTARI!5e0!3m2!1sen!2sid!4v1613057197808!5m2!1sen!2sid" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <br>
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