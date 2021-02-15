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
    <link rel="icon" href="paud.png">
    <title>PAUD Mentari Cidadap</title>
</head>

<body style="background-color: #dd8f00; height: 100%; min-height: 100%;">

    <!-- Navbar -->
    <div class="container" style="background-color: #823b08fd;">
        <nav class="navbar navbar-light" style="background-color: #823b08fd;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:coral;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav">
                    <li><a href="index.php"><button style="background-color: #823b08fd; color:white; width: 100%; border: none; font-size: 130%;"> Beranda</button></a></li>
                    <li><a href="infoptk.php"><button style="background-color: #823b08fd; color:white; width: 100%; border: none; font-size: 130%;"> Info PTK</button></a></li>
                    <li><a href="sarpras.php"><button style="background-color: #823b08fd; color:white; width: 100%; border: none; font-size: 130%;"> Sarana dan Prasarana</button></a></li>
                    <li><a href="infomurid.php"><button style="background-color: #823b08fd; color:white; width: 100%; border: none; font-size: 130%;"> Info Murid</button></a></li>
                    <li><a href="pengumuman.php"><button style="background-color: #823b08fd; color:white; width: 100%; border: none; font-size: 130%;"> Pengumuman</button></a></li>
                    <li><a href="login.php"><button style="background-color: #823b08fd; color:white; width: 100%; border: none; font-size: 130%;"> Pendaftaran</button></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
    </center>

    <center>
        <div class="container" style="background-color: white; width:90%">
            <form class="whatsapp-form">
                <img src="paud.png" width="170" height="170"><br><br>
                <h4>BUAT AKUN</h4>
                <p style="font-size: 80%;">Isi username dan password yang diinginkan. Pastikan Anda mempunyai aplikasi WhatsApp.
                </p>

                <div style="overflow-x: auto;">
                    <table border="0" style="width: 50%;">
                        <tr>
                            <td>Username :
                        <tr>
                            <div class="datainput">
                                <td colspan="2"><input class="validate" id="wa_username" name="name" required="" style="width: 100%" type="text" value='' />
                                    <span class="highlight"></span><span class="bar"></span>
                            </div>
                        <tr>
                            <td>Password :
                        <tr>
                            <div class="datainput">
                                <td colspan="2"><input class="validate" id="wa_password" style="width: 100%" name=" password" required="" type="password" value='' />

                                    <span class="highlight"></span><span class="bar"></span>
                            </div>
                        <tr>
                            <td><br>
                    </table>
                </div>

                <a class="send_form" href="javascript:void" type="submit" title="Send to Whatsapp">
                    <input type="button" value="Daftar" id="submit-login" style="background-color: cornflowerblue; color:white;" height="20%">
                </a>
                <div id="text-info"></div>
                <br><a href="login.php">Sudah punya akun? Klik disini</a>
            </form><br><br><br>

            <script type="text/javascript">
                //<![CDATA[
                $(document).on('click', '.send_form', function() {
                    var input_data = document.getElementById('wa_password');

                    /* Whatsapp Settings */
                    var walink = 'https://web.whatsapp.com/send',
                        phone = '6281361354486',
                        walink2 = 'Halo saya ingin membuat akun di website PAUD Cidadap dengan informasi berikut. Harap dibuatkan secepatnya. Terimakasih.',
                        text_yes = 'Terkirim. Admin akan mengirimkan akun untuk Anda via whatsapp.',
                        text_no = 'Isi semua Formulir lalu klik Daftar.';

                    /* Smartphone Support */
                    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                        var walink = 'whatsapp://send';
                    }

                    if ("" != input_data.value) {

                        /* Call Input Form */
                        var input_username1 = $("#wa_username").val(),
                            input_password1 = $("#wa_password").val();

                        /* Final Whatsapp URL */
                        var data_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
                            '*Username* : ' + input_username1 + '%0A' +
                            '*Password* : ' + input_password1 + '%0A';

                        /* Whatsapp Window Open */
                        window.open(data_whatsapp, '_blank');
                        document.getElementById("text-info").innerHTML = '<span class="yes"><br>' + text_yes + '</span>';
                    } else {
                        document.getElementById("text-info").innerHTML = '<span class="no"><br>' + text_no + '</span>';
                    }
                });
                //]]>
            </script>
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