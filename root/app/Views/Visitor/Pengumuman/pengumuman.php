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
    <title>Pengumuman</title>

</head>

<body style="background-color: #dd8f00;">
    <div class="body" style="background-color: #dd8f00;">
        <center>

            <?php echo $this->include('global_layout/header'); ?>

            <?php echo $this->include('Visitor/layout/navbar'); ?>
            <br>
        </center>

        <!-- Pengumuman -->
        <div class="container" style="background-color: white; border: 5px solid #823b08fd;">
            <h3 style="font-family: Brush Script MT, Cambria, Cochin, Georgia; font-size: 40px;">Pengumuman</h3>

            <table class="table" style="font-size: 13px;">
                <tr>
                    <td>Bagi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi sed distinctio ea deleniti, sint doloribus sunt provident eligendi delectus fugit excepturi a tenetur atque minus laudantium tempore vitae asperiores cupiditate? Terimakasih
                <tr>
                    <td>Tanggal 19 PAUD mentari akan menyelenggarakan Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam itaque incidunt excepturi possimus culpa id, hic at illum repudiandae pariatur corporis harum delectus temporibus placeat sint accusantium adipisci impedit tempore.

                <tr>
                    <td>Sehubungan dengan pandemi Virus COVID-19, maka Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto corrupti voluptatum magnam ex, dignissimos ea modi eum labore assumenda. Officiis ad tempore earum quia mollitia perspiciatis reiciendis vel odio architecto?
            </table>
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