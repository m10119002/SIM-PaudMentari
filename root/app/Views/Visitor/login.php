<!doctype html>
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
    <title>PAUD Mentari Cidadap</title>
</head>

<body style="background-color: #dd8f00; height: 100%; min-height: 100%;">
    <!-- Navbar -->
    <div class="container" style="background-color: #dd8f00;">
    </div>
    </center>

    <center><br>
        <div class="container" style="background-color: white; width:90%; margin-top:3vw;">
            <form class="whatsapp-form">
                <img src="<?php echo base_url('paud.png'); ?>" width="170" height="170"><br><br>
                <h3>MASUK</h3>
				<p style="font-size: 80%;"> Untuk menuju formulir pendaftaran, Anda harus masuk terlebih dahulu.
				</p>
                <p style="font-size: 80%;"><a href="<?php echo base_url('home'); ?>">Kembali</a>
                </p>

                <div style="overflow-x: auto;">
                    <table border="0" style="width: 50%;">
                        <tr>
                            <td>Username :
                        <tr>
                            <div class="datainput">
                                <td colspan="2"><input class="validate" id="username" name="name" required="" style="width: 100%" type="text" value='' />
                                    <span class="highlight"></span><span class="bar"></span>
                            </div>
                        <tr>
                            <td>Password :
                        <tr>
                            <div class="datainput">
                                <td colspan="2"><input class="validate" id="password" style="width: 100%" name=" password" required="" type="password" value='' />

                                    <span class="highlight"></span><span class="bar"></span>
                            </div>
                        <tr>
                            <td>
                    </table>
                </div><br>

                <a class="send_form" href="formulir.php" type="submit">
                    <input type="button" value="Masuk" id="submit-login" style="background-color: cornflowerblue; color:white;" height="20%">
                </a>
                <div id="text-info"></div>
                <br><a href="register.php">Belum punya akun? Klik disini</a>
            </form><br><br><br>
        </div><br><br><br>
    </center>

    <footer style="position: absolute; bottom: 1; width: 100%; background-color: black;">
        <br>
        <center>
            <p style="color: white;"> Copyright PAUD Mentari Cidadap @2021 </p>
        </center>
    </footer>

</body>

</html>