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
    <link rel="icon" href="<?php echo base_url('paud.png'); ?>">
    <title>Info Murid</title>

</head>

<body style="background-color: #dd8f00;">
    <div class="body" style="background-color: #dd8f00;">
        <center>

            <?php echo $this->include('global_layout/header'); ?>

            <?php echo $this->include('Visitor/layout/navbar'); ?>
            <br>
        </center>

        <!-- Informasi Sarana dan Prasarana -->
        <div class="container" style="background-color: white; border: 5px solid #823b08fd;">
            <h3 style="font-family: Brush Script MT, Cambria, Cochin, Georgia; font-size: 40px;">Info Murid</h3><br>

            <table class="table" style="font-size: 13px;">
                <tr>
                    <td colspan="3" style="text-align: center; font-size: 17px;">
                        <b>Daftar Murid Tahun Ajaran 2020/2021</b>
                <tr>
                    <td style=" width: 50%; text-align: center;">Andri Maulana
                    <td style=" width: 50%; text-align: center;">Dea Anggraeni
                <tr>
                    <td style=" width: 50%; text-align: center;">Ardi Suparlan
                    <td style=" width: 50%; text-align: center;">Delisa Nanda Suhendar
                <tr>
                    <td style=" width: 50%; text-align: center;">Aulia Khoerunnisa
                    <td style=" width: 50%; text-align: center;">Fazril Maulana
                <tr>
                    <td style=" width: 50%; text-align: center;">Ayu Septiani
                    <td style=" width: 50%; text-align: center;">Muhammad Fazri
                <tr>
                    <td style=" width: 50%; text-align: center;">Dafasha Purnama
                    <td style=" width: 50%; text-align: center;">Muhammad Ramdani Akbar
            </table>

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