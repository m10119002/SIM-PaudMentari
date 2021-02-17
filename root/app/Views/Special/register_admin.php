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
    <?php echo $this->include('global_layout/favicon'); ?>
    <title>PAUD Mentari Cidadap</title>
</head>

<body style="background-color: #dd8f00; height: 100%; min-height: 100%;">

    <!-- Navbar -->
    <div class="container" style="background-color: #dd8f00;">
    </div>
    <br>
    </center>

    <center>
        <div class="container" style="background-color: white; width:90%; margin-top:3vw;">
			<?php $attr = ['class' => 'whatsapp-form']; ?>
			<?php echo form_open('xyz/new', $attr); ?>
                <img src="<?php echo base_url('paud.png'); ?>" width="170" height="170"><br><br>
                <h4>BUAT AKUN ADMIN BARU</h4>
                <p style="font-size: 80%;">Silahkan isi username dan password untuk akun admin anda.
                </p>
                <div style="overflow-x: auto;">
                    <table border="0" style="width: 50%;">
                        <tr>
                            <td>Username :
                        <tr>
                            <div class="datainput">
                                <td colspan="2"><input class="validate" id="wa_username" name="user" style="width: 100%" type="text" value='<?php echo (isset($loadForm['user'])? $loadForm['user'] : ""); ?>' />
                                    <span class="highlight"><?php echo (isset($validation['user'])? $validation['user'] : ""); ?></span><span class="bar"></span>
                            </div>
                        <tr>
                            <td>Password :
                        <tr>
                            <div class="datainput">
                                <td colspan="2"><input class="validate" id="wa_password" style="width: 100%" name="pass" type="password" value='<?php echo (isset($loadForm['pass'])? $loadForm['pass'] : ""); ?>' />

                                    <span class="highlight"><?php echo (isset($validation['pass'])? $validation['pass'] : ""); ?></span><span class="bar"></span>
                            </div>
						<tr>
                            <td>Password Ulang :
                        <tr>
                            <div class="datainput">
                                <td colspan="2"><input class="validate" id="wa_password" style="width: 100%" name="pass_ulang" type="password" value='<?php echo (isset($loadForm['pass_ulang'])? $loadForm['pass_ulang'] : ""); ?>' />

                                    <span class="highlight"><?php echo (isset($validation['pass_ulang'])? $validation['pass_ulang'] : ""); ?></span><span class="bar"></span>
                            </div>
                        <tr>
                            <td><br>
                    </table>
                </div>

                <input type="submit" value="Simpan" id="submit-login" style="background-color: cornflowerblue; color:white;" height="20%">
                <div id="text-info"><?php echo (isset($debug['ses'])? $debug['ses'] : ""); ?></div>
            <?php echo form_close(); ?><br><br><br>
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