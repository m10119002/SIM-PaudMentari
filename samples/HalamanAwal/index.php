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
    <link rel="icon" href="paud.png">
    <title>PAUD Mentari Cidadap</title>

</head>

<body style="background-color: #dd8f00;">
    <div class="body" style="background-color: #dd8f00;">
        <center>

            <!-- Header -->
            <div class="container" style="background-color: #dd8f00;">
                <div class="container-fluid">
                    <a href="localhost:8080/index.php">
                        <img src="header.png" class="img-fluid" alt="PAUD Mentari Cidadap" style="width: auto;">
                    </a>
                </div>
            </div>

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

        <!-- Carousel / Slider Gambar -->


        <!-- Profil Sekolah -->
        <div class="container" style="background-color: white; border: 5px solid #823b08fd;">
            <h3 style="font-family: Brush Script MT, Cambria, Cochin, Georgia; font-size: 40px;">Visi Misi Paud Mentari</h3>
            <b>VISI</b><br>
            <ol>
                Unggul dalam prestasi, santun dalam perilaku, beriman dan taqwa.<br></ol>
            <b>MISI</b><br>
            <ol>
                <li> Membekali anak didik dengan berbagai kemampuan sesuai karakteristik anak usia dini.</li>
                <li>Menanamkan nilai-nilai ke agamaan dan ketaqwaan terhadap Tuhan Yang Maha Esa.</li>
                <li>Memberdayakan potensi kecerdasan intelektual, kecerdasan emosi, kecerdasan sosial dan kecerdasan religius anak didik.</li>
                <li>Membekali anak dalam hal budi pekerti luhur dan terpuji sesuai nilai-nilai luhur bangsa indonesia.</li>
            </ol>
            <b>TUJUAN</b>
            <ol>
                <li> Meningkatkan layanan pendidikan terhadap anak usia dini sesuai tahap perkembanganya.</li>
                <li> Membina lingkungan lembaga PAUD yang mendukung terciptanya satuan paud sebagai tempat pembelajaran kondusif.</li>
                <li> Membina kultur lembaga paud yang mendukung terciptanya warga lembaga paud yang mempunyai dedikasi dan etos kerja yang tinggi.</li>
                <li> Meningkatkan kualitas sarana prasarana untuk menunjang proses pembelajaran.</li>
                <li> Membina kerjasama yang harmonis dengan stakeholder terkait guna meningkatkan optimalisasi layanan paud.</li>
            </ol>


            <br>
        </div>
        <center>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 20%;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="kegiatan/1.jpg" alt="Kegiatan PAUD Mentari Cidadap">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="kegiatan/2.jpg" alt="Kegiatan PAUD Mentari Cidadap">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="kegiatan/3.jpg" alt="Kegiatan PAUD Mentari Cidadap">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><br>
        </center>
        <br>

        <footer style="position: absolute; bottom: 1; width: 100%; background-color: black;">
            <br>
            <center>
                <p style="color: white;"> Copyright PAUD Mentari Cidadap @2021 </p>
            </center>
        </footer>

</body>

</html>