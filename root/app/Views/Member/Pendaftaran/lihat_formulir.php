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
    <title>Formulir</title>

</head>

<body style="background-color: #dd8f00;">
    <div class="body" style="background-color: #dd8f00;">
        <center>

            <?php echo $this->include('global_layout/header'); ?>

            <?php echo $this->include('Member/layout/navbar'); ?>
            <br>
        </center>

        <!-- Informasi Sarana dan Prasarana -->
        <div class="container" style="background-color: white; border: 5px solid #823b08fd;">
            <center>
                <br>
                <b>
                    <p style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 25px;">Formulir Pendaftaran</p>
                </b>
                <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 13px;">Mohon Mengisi Data Dengan Sebenar-Benarnya</p>
            </center>
			<a style="float: left;" href="<?php echo base_url('member/pendaftaran'); ?>">Kembali ke Status Formulir</a><a style="float: right;" href="<?php echo base_url('member/pendaftaran/formulir/ubah'); ?>">Ubah Informasi</a>
            <div class="table-responsive">
                <table class="table" style="font-size: 12px; size: 50%;">

                    <!-- DATA PRIBADI -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>DATA PRIBADI</b>
                    <tr>
                        <td style=" width: 25%;">Nama Lengkap
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['nama_lengkap'])? $loadForm['nama_lengkap'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Nama peserta didik sesuai dokumen resmi yang berlaku (Akta atau ijazah sebelumnya)
                            </p>
                    <tr>
                        <td style=" width: 25%;">Jenis Kelamin
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['jenis_kelamin'])? $loadForm['jenis_kelamin'] : '-'; ?>
                    <tr>
                        <td style=" width: 25%;">NISN
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['nisn'])? $loadForm['nisn'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Nomor Induk Siswa Nasional peserta didik (jika memiliki).<br>
                                Jika belum, maka wajib dikosongkan. <br>NISN memiliki format 10 angka. Contoh : 0009321234. <br>
                                Untuk memeriksa NISN, dapat mengunjungi laman http://nisn.data.kemdikbud.go.id/page/data
                            </p>
                    <tr>
                        <td style=" width: 25%;">NIK/No. KITAS(Untuk WNA)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['nik_nokitas'])? $loadForm['nik_nokitas'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga, <br>
                                Kartu Identitas Anak, atau KTP
                                (jika sudah memiliki) bagi WNI, NIK memiliki format 16 digit angka. <br>Contoh : 6112090906021104.<br>
                                Pastikan NIK tidak tertukar dengan No. Kartu Keluarga.
                            </p>
                    <tr>
                        <td style=" width: 25%;">Tempat Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['tempat_lahir'])? $loadForm['tempat_lahir'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Tempat lahir peserta didik sesuai dokumen yang berlaku
                            </p>
                    <tr>
                        <td style=" width: 25%;">Tanggal Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td><?php echo isset($loadForm['tanggal_lahir'])? $loadForm['tanggal_lahir'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Tanggal lahir peserta didik sesuai dokumen yang berlaku
                            </p>
                    <tr>
                        <td style=" width: 25%;">No. Registrasi Akta Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['reg_akta_lahir'])? $loadForm['reg_akta_lahir'] : '-'; ?>
                            <p>
                                Nomor Registrasi Akta Kelahiran
                            </p>
                    <tr>
                        <td style=" width: 25%;">Agama & Kepercayaan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['agama'])? $loadForm['agama'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Agama/Kepercayaan yang dianut oleh peserta didik
                            </p>
                    <tr>
                        <td style=" width: 25%;">Kewarganegaraan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['kewarganegaraan'])? $loadForm['kewarganegaraan'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Kewarganegaraan peserta didik
                            </p>
                    <tr>
                        <td style=" width: 25%;">Berkebutuhan Khusus
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['kebutuhan_khusus'])? $loadForm['kebutuhan_khusus'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Isi salah satu :<br>
                                [Tidak]/ [Tuna Netra]/ [Rungu]/ [Grahita Ringan]/ [Down Sindrom]/<br>
                                [Indigo]/ [Bakat Istimewa]/ [Cerdas Istimewa]/ [Lainnya]
                            </p>
                    <tr>
                        <td style=" width: 25%;">Alamat Jalan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['alamat_jalan'])? $loadForm['alamat_jalan'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Terdiri atas gang, kompleks, blok, nomor rumah<br>
                                Contoh : Jl. Kemanggisan, Komp. Griya Adam, No. 4-C
                            </p>
                    <tr>
                        <td style=" width: 25%;">RT
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['rt'])? $loadForm['rt'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Nomor RT tempat tinggal peserta didik saat ini
                            </p>
                    <tr>
                        <td style=" width: 25%;">RW
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['rw'])? $loadForm['rw'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Nomor RW tempat tinggal peserta didik saat ini
                            </p>
                    <tr>
                        <td style=" width: 25%;">Nama Dusun
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['nama_dusun'])? $loadForm['nama_dusun'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Nama Dusun tempat tinggal peserta didik saat ini
                            </p>

                    <tr>
                        <td style=" width: 25%;">Nama Kelurahan/Desa
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['nama_kelurahandesa'])? $loadForm['nama_kelurahandesa'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Nama Kelurahan/Desa tempat tinggal peserta didik saat ini
                            </p>
                    <tr>
                        <td style=" width: 25%;">Kecamatan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['kecamatan'])? $loadForm['kecamatan'] : '-'; ?><br>
                            <p style="text-align: left;">Kecamatan tempat tinggal peserta didik saat ini

                            </p>
                    <tr>
                        <td style=" width: 25%;">Kode Pos
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['kode_pos'])? $loadForm['kode_pos'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Kode pos tempat tinggal peserta didik saat ini
                            </p>
                    <tr>
                        <td style=" width: 25%;">Lintang
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['lintang'])? $loadForm['lintang'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Titik koordinat tempat tinggal peserta didik saat ini
                            </p>
                    <tr>
                        <td style=" width: 25%;">Bujur
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['bujur'])? $loadForm['bujur'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Titik koordinat tempat tinggal peserta didik saat ini
                            </p>
                    <tr>
                        <td style=" width: 25%;">Tempat Tinggal
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['tempat_tinggal'])? $loadForm['tempat_tinggal'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Pilih salah satu: <br>
                                [Bersama Orang tua]/ [Wali]/ [Kos]/ [Asrama]/ [Panti Asuhan]/ [Lainnya]
                            </p>
                    <tr>
                        <td style=" width: 25%;">Moda Transportasi
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['moda_transportasi'])? $loadForm['moda_transportasi'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Pilih salah satu: <br>
                                [Jalan Kaki]/ [Kendaraan Pribadi]/ [Kendaraan Umum]/<br>
                                [Jemputan Sekolah]/ [Kereta Api]/ [Lainnya]
                            </p>
                    <tr>
                        <td style=" width: 25%;">Nomor KKS (Kartu Keluarga Sejahtera)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['nomor_kks'])? $loadForm['nomor_kks'] : '-'; ?>
                    <tr>
                        <td style=" width: 25%;">Anak Keberapa
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['anak_ke'])? $loadForm['anak_ke'] : '-'; ?>
                    <tr>
                        <td style=" width: 25%;">Penerima KPS/PKH
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['penerima_kpspkh'])? $loadForm['penerima_kpspkh'] : '-'; ?>
                    <tr>
                        <td style=" width: 25%;">No. KPS/PKH (Apabila penerima)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['no_kpspkh'])? $loadForm['no_kpspkh'] : '-'; ?>
                    <tr>
                        <td style=" width: 25%;">Usulan Dari Sekolah (Layak PIP)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['usulan_sekolah'])? $loadForm['usulan_sekolah'] : '-'; ?>
                            <p style="text-align: left;">
                                Pilih Ya apabila peserta didik Layak diajukan sebagai <br>
                                Penerima manfaat Program Indonesia Pintar<br>
                                (Seperti BSM dan sejenisnya). Khusus bagi peserta didik<br>
                                Yang tidak memiliki KIP.
                            </p>
                    <tr>
                        <td style=" width: 25%;">Nama Tertera di KIP
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['nama_kip'])? $loadForm['nama_kip'] : '-'; ?>
                    <tr>
                        <td style=" width: 25%;">Terima fisik Kartu (KIP)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['fisik_kartu_kip'])? $loadForm['fisik_kartu_kip'] : '-'; ?>
                            <p style="text-align: left;">
                                Status bahwa peserta didik sudah menerima atau belum<br>
                                menerima KIP secara fisik
                            </p>
                    <tr>
                        <td style=" width: 25%;">Alasan Layak PIP
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['alasan_layak_pip'])? $loadForm['alasan_layak_pip'] : '-'; ?>
                            <p style="text-align: left;">
                                Pilih salah satu :<br>
                                [Pemegang PKH/KPS/KIP] /[Penerima BSM 2014]/ [Yatim Piatu/ Panti Asuhan/ Panti Sosial]/<br>
                                [Pernah Drop OUT]/ [Siswa Miskin/Rentan Miskin]/ [Daerah Konflik]/<br>
                                [Keluarga Terpilih]
                            </p>
                    <tr>
                        <td style=" width: 25%;">Bank
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['bank'])? $loadForm['bank'] : '-'; ?>
                    <tr>
                        <td style=" width: 25%;">No. Rekening Bank
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['no_rek_bank'])? $loadForm['no_rek_bank'] : '-'; ?>
                    <tr>
                        <td style=" width: 25%;">Rekening Atas Nama
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm['no_rek_an'])? $loadForm['no_rek_an'] : '-'; ?>

                            <!-- DATA AYAH KANDUNG -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>DATA AYAH KANDUNG</b>
                    <tr>
                        <td style=" width: 25%;">Nama Ayah Kandung
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm2['nama_lengkap'])? $loadForm2['nama_lengkap'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Hindari penggunaan gelar akademik<br>
                                Seperti Hj., S.Pd., S.H. Dra.
                            </p>
                    <tr>
                        <td style=" width: 25%;">NIK Ayah
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm2['nik'])? $loadForm2['nik'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Tahun Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm2['tahun_lahir'])? $loadForm2['tahun_lahir'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Pendidikan Terakhir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm2['pendidikan'])? $loadForm2['pendidikan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Pekerjaan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm2['pekerjaan'])? $loadForm2['pekerjaan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Penghasilan Bulanan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm2['penghasilan'])? $loadForm2['penghasilan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Berkebutuhan Khusus
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm2['kebutuhan_khusus'])? $loadForm2['kebutuhan_khusus'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Isi salah satu :<br>
                                [Tidak]/ [Tuna Netra]/ [Rungu]/ [Grahita Ringan]/ [Down Sindrom]/<br>
                                [Indigo]/ [Bakat Istimewa]/ [Cerdas Istimewa]/ [Lainnya]
                            </p>

                            <!-- DATA IBU KANDUNG -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>DATA IBU KANDUNG</b>
                    <tr>
                        <td style=" width: 25%;">Nama Ibu Kandung
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm3['nama_lengkap'])? $loadForm3['nama_lengkap'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Hindari penggunaan gelar akademik<br>
                                Seperti Hj., S.Pd., S.H. Dra.
                            </p>
                    <tr>
                        <td style=" width: 25%;">NIK Ibu
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm3['nik'])? $loadForm3['nik'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Tahun Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm3['tahun_lahir'])? $loadForm3['tahun_lahir'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Pendidikan Terakhir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm3['pendidikan'])? $loadForm3['pendidikan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Pekerjaan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm3['pekerjaan'])? $loadForm3['pekerjaan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Penghasilan Bulanan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm3['penghasilan'])? $loadForm3['penghasilan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Berkebutuhan Khusus
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm3['kebutuhan_khusus'])? $loadForm3['kebutuhan_khusus'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Isi salah satu :<br>
                                [Tidak]/ [Tuna Netra]/ [Rungu]/ [Grahita Ringan]/ [Down Sindrom]/<br>
                                [Indigo]/ [Bakat Istimewa]/ [Cerdas Istimewa]/ [Lainnya]
                            </p>


                            <!-- DATA WALI -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>DATA WALI</b>
                    <tr>
                        <td style=" width: 25%;">Nama Wali
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm4['nama_lengkap'])? $loadForm4['nama_lengkap'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Hindari penggunaan gelar akademik<br>
                                Seperti Hj., S.Pd., S.H. Dra.
                            </p>
                    <tr>
                        <td style=" width: 25%;">NIK Wali
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm4['nik'])? $loadForm4['nik'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Tahun Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm4['tahun_lahir'])? $loadForm4['tahun_lahir'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Pendidikan Terakhir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm4['pendidikan'])? $loadForm4['pendidikan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Pekerjaan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm4['pekerjaan'])? $loadForm4['pekerjaan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Penghasilan Bulanan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm4['penghasilan'])? $loadForm4['penghasilan'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Berkebutuhan Khusus
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm4['kebutuhan_khusus'])? $loadForm4['kebutuhan_khusus'] : '-'; ?><br>
                            <p style="text-align: left;">
                                Isi salah satu :<br>
                                [Tidak]/ [Tuna Netra]/ [Rungu]/ [Grahita Ringan]/ [Down Sindrom]/<br>
                                [Indigo]/ [Bakat Istimewa]/ [Cerdas Istimewa]/ [Lainnya]
                            </p>

                            <!-- KONTAK -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>KONTAK</b>
                    <tr>
                        <td style=" width: 25%;">Nomor Telepon Rumah (Milik pribadi, orang tua, atau wali)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm5['telepon'])? $loadForm5['telepon'] : '-'; ?><br>
                    <tr>
                        <td style=" width: 25%;">Nomor HP (Milik pribadi, orang tua, atau wali)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><?php echo isset($loadForm5['nohp'])? $loadForm5['nohp'] : '-'; ?><br>
                </table>
            </div>
        </div>
        <br>

        <footer style="position: absolute; bottom: 3; width: 100%; background-color: black;">
            <br>
            <center>
                <p style="color: white;"> Copyright PAUD Mentari Cidadap @2021 </p>
            </center>
        </footer>

</body>

</html>