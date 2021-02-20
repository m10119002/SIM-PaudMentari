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
			<a style="float: right;" href="#">Kembali</a>
            <div class="table-responsive">
				<?php echo form_open('member/pendaftaran/formulir/ubah'); ?>
                <table class="table" style="font-size: 12px; size: 50%;">

                    <!-- DATA PRIBADI -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>DATA PRIBADI</b>
                    <tr>
                        <td style=" width: 25%;">Nama Lengkap
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="nama_lengkap" size="100%" value="<?php echo isset($loadForm['nama_lengkap'])? $loadForm['nama_lengkap'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Nama peserta didik sesuai dokumen resmi yang berlaku (Akta atau ijazah sebelumnya)
                            </p>
					<?php if (isset($validation['nama_lengkap'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['nama_lengkap']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Jenis Kelamin
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2">
						<?php if (isset($loadForm['jenis_kelamin'])): ?>
						<?php if ($loadForm['jenis_kelamin'] == 'laki-laki'): ?>
                            <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" checked>
                            <label for="laki-laki">Laki-Laki</label><br>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                            <label for="perempuan">Perempuan</label>
						<?php elseif ($loadForm['jenis_kelamin'] == 'perempuan'): ?>
							<input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki">
                            <label for="laki-laki">Laki-Laki</label><br>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" checked>
                            <label for="perempuan">Perempuan</label>
						<?php endif; ?>
						<?php else: ?>
							<input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki">
                            <label for="laki-laki">Laki-Laki</label><br>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                            <label for="perempuan">Perempuan</label>
						<?php endif; ?>
					<?php if (isset($validation['jenis_kelamin'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['jenis_kelamin']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">NISN
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="nisn" size="50%" value="<?php echo isset($loadForm['nisn'])? $loadForm['nisn'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Nomor Induk Siswa Nasional peserta didik (jika memiliki).<br>
                                Jika belum, maka wajib dikosongkan. <br>NISN memiliki format 10 angka. Contoh : 0009321234. <br>
                                Untuk memeriksa NISN, dapat mengunjungi laman http://nisn.data.kemdikbud.go.id/page/data
                            </p>
					<?php if (isset($validation['nisn'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['nisn']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">NIK/No. KITAS(Untuk WNA)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="nik_nokitas" size="50%" value="<?php echo isset($loadForm['nik_nokitas'])? $loadForm['nik_nokitas'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga, <br>
                                Kartu Identitas Anak, atau KTP
                                (jika sudah memiliki) bagi WNI, NIK memiliki format 16 digit angka. <br>Contoh : 6112090906021104.<br>
                                Pastikan NIK tidak tertukar dengan No. Kartu Keluarga.
                            </p>
					<?php if (isset($validation['nik_nokitas'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['nik_nokitas']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Tempat Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="tempat_lahir" size="50%" value="<?php echo isset($loadForm['tempat_lahir'])? $loadForm['tempat_lahir'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Tempat lahir peserta didik sesuai dokumen yang berlaku
                            </p>
					<?php if (isset($validation['tempat_lahir'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['tempat_lahir']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Tanggal Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td><input type="date" name="tanggal_lahir" size="100%" value="<?php echo isset($loadForm['tanggal_lahir'])? $loadForm['tanggal_lahir'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Tanggal lahir peserta didik sesuai dokumen yang berlaku
                            </p>
					<?php if (isset($validation['tanggal_lahir'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['tanggal_lahir']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">No. Registrasi Akta Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="reg_akta_lahir" size="50%" value="<?php echo isset($loadForm['reg_akta_lahir'])? $loadForm['reg_akta_lahir'] : ''; ?>">
                            <p>
                                Nomor Registrasi Akta Kelahiran
                            </p>
					<?php if (isset($validation['reg_akta_lahir'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['reg_akta_lahir']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Agama & Kepercayaan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="agama" size="40%" value="<?php echo isset($loadForm['agama'])? $loadForm['agama'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Agama/Kepercayaan yang dianut oleh peserta didik
                            </p>
					<?php if (isset($validation['agama'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['agama']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Kewarganegaraan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="kewarganegaraan" size="50%" value="<?php echo isset($loadForm['kewarganegaraan'])? $loadForm['kewarganegaraan'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Kewarganegaraan peserta didik
                            </p>
					<?php if (isset($validation['kewarganegaraan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['kewarganegaraan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Berkebutuhan Khusus
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="kebutuhan_khusus" size="50%" value="<?php echo isset($loadForm['kebutuhan_khusus'])? $loadForm['kebutuhan_khusus'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Isi salah satu :<br>
                                [Tidak]/ [Tuna Netra]/ [Rungu]/ [Grahita Ringan]/ [Down Sindrom]/<br>
                                [Indigo]/ [Bakat Istimewa]/ [Cerdas Istimewa]/ [Lainnya]
                            </p>
					<?php if (isset($validation['kebutuhan_khusus'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['kebutuhan_khusus']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Alamat Jalan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="alamat_jalan" size="70%" value="<?php echo isset($loadForm['alamat_jalan'])? $loadForm['alamat_jalan'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Terdiri atas gang, kompleks, blok, nomor rumah<br>
                                Contoh : Jl. Kemanggisan, Komp. Griya Adam, No. 4-C
                            </p>
					<?php if (isset($validation['alamat_jalan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['alamat_jalan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">RT
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="rt" size="10%" value="<?php echo isset($loadForm['rt'])? $loadForm['rt'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Nomor RT tempat tinggal peserta didik saat ini
                            </p>
					<?php if (isset($validation['rt'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['rt']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">RW
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="rw" size="10%" value="<?php echo isset($loadForm['rw'])? $loadForm['rw'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Nomor RW tempat tinggal peserta didik saat ini
                            </p>
					<?php if (isset($validation['rw'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['rw']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Nama Dusun
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="nama_dusun" size="50%" value="<?php echo isset($loadForm['nama_dusun'])? $loadForm['nama_dusun'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Nama Dusun tempat tinggal peserta didik saat ini
                            </p>
					<?php if (isset($validation['nama_dusun'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['nama_dusun']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Nama Kelurahan/Desa
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="nama_kelurahandesa" size="50%" value="<?php echo isset($loadForm['nama_kelurahandesa'])? $loadForm['nama_kelurahandesa'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Nama Kelurahan/Desa tempat tinggal peserta didik saat ini
                            </p>
					<?php if (isset($validation['nama_kelurahandesa'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['nama_kelurahandesa']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Kecamatan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="kecamatan" size="50%" value="<?php echo isset($loadForm['kecamatan'])? $loadForm['kecamatan'] : ''; ?>"><br>
                            <p style="text-align: left;">Kecamatan tempat tinggal peserta didik saat ini

                            </p>
					<?php if (isset($validation['kecamatan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['kecamatan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Kode Pos
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="kode_pos" size="50%" value="<?php echo isset($loadForm['kode_pos'])? $loadForm['kode_pos'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Kode pos tempat tinggal peserta didik saat ini
                            </p>
					<?php if (isset($validation['kode_pos'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['kode_pos']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Lintang
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="lintang" size="50%" value="<?php echo isset($loadForm['lintang'])? $loadForm['lintang'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Titik koordinat tempat tinggal peserta didik saat ini
                            </p>
					<?php if (isset($validation['lintang'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['lintang']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Bujur
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="bujur" size="50%" value="<?php echo isset($loadForm['bujur'])? $loadForm['bujur'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Titik koordinat tempat tinggal peserta didik saat ini
                            </p>
					<?php if (isset($validation['bujur'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['bujur']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Tempat Tinggal
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="tempat_tinggal" size="50%" value="<?php echo isset($loadForm['tempat_tinggal'])? $loadForm['tempat_tinggal'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Pilih salah satu: <br>
                                [Bersama Orang tua]/ [Wali]/ [Kos]/ [Asrama]/ [Panti Asuhan]/ [Lainnya]
                            </p>
					<?php if (isset($validation['tempat_tinggal'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['tempat_tinggal']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Moda Transportasi
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="moda_transportasi" size="50%" value="<?php echo isset($loadForm['moda_transportasi'])? $loadForm['moda_transportasi'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Pilih salah satu: <br>
                                [Jalan Kaki]/ [Kendaraan Pribadi]/ [Kendaraan Umum]/<br>
                                [Jemputan Sekolah]/ [Kereta Api]/ [Lainnya]
                            </p>
					<?php if (isset($validation['moda_transportasi'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['moda_transportasi']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Nomor KKS (Kartu Keluarga Sejahtera)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="nomor_kks" size="50%" value="<?php echo isset($loadForm['nomor_kks'])? $loadForm['nomor_kks'] : ''; ?>">
					<?php if (isset($validation['nomor_kks'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['nomor_kks']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Anak Keberapa
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="anak_ke" size="20%" value="<?php echo isset($loadForm['anak_ke'])? $loadForm['anak_ke'] : ''; ?>">
					<?php if (isset($validation['anak_ke'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['anak_ke']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Penerima KPS/PKH
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2">
						
						<?php if (isset($loadForm['penerima_kpspkh'])): ?>
						<?php if ($loadForm['penerima_kpspkh'] == 'ya'): ?>
                            <input type="radio" id="ya_kpspkh" name="penerima_kpspkh" value="ya" checked>
                            <label for="ya_kpspkh">Ya</label><br>
                            <input type="radio" id="tidak_kpspkh" name="penerima_kpspkh" value="tidak">
                            <label for="tidak_kpspkh">Tidak</label>
						<?php elseif ($loadForm['penerima_kpspkh'] == 'tidak'): ?>
							<input type="radio" id="ya_kpspkh" name="penerima_kpspkh" value="ya">
                            <label for="ya_kpspkh">Ya</label><br>
                            <input type="radio" id="tidak_kpspkh" name="penerima_kpspkh" value="tidak" checked>
                            <label for="tidak_kpspkh">Tidak</label>
						<?php endif; ?>
						<?php else: ?>
							<input type="radio" id="ya_kpspkh" name="penerima_kpspkh" value="ya">
                            <label for="ya_kpspkh">Ya</label><br>
                            <input type="radio" id="tidak_kpspkh" name="penerima_kpspkh" value="tidak">
                            <label for="tidak_kpspkh">Tidak</label><br>
						<?php endif; ?>
					<?php if (isset($validation['penerima_kpspkh'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['penerima_kpspkh']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">No. KPS/PKH (Apabila penerima)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="no_kpspkh" size="50%" value="<?php echo isset($loadForm['no_kpspkh'])? $loadForm['no_kpspkh'] : ''; ?>">
					<?php if (isset($validation['no_kpspkh'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['no_kpspkh']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Usulan Dari Sekolah (Layak PIP)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2">
						<?php if (isset($loadForm['usulan_sekolah'])): ?>
						<?php if ($loadForm['usulan_sekolah'] == 'ya'): ?>
                            <input type="radio" id="ya_usul" name="usulan_sekolah" value="ya" checked>
                            <label for="ya_usul">Ya</label><br>
                            <input type="radio" id="tidak_usul" name="usulan_sekolah" value="tidak">
                            <label for="tidak_usul">Tidak</label><br>
						<?php elseif ($loadForm['usulan_sekolah'] == 'tidak'): ?>
							<input type="radio" id="ya_usul" name="usulan_sekolah" value="ya">
                            <label for="ya_usul">Ya</label><br>
                            <input type="radio" id="tidak_usul" name="usulan_sekolah" value="tidak" checked>
                            <label for="tidak_usul">Tidak</label><br>
						<?php endif; ?>
						<?php else: ?>
							<input type="radio" id="ya_usul" name="usulan_sekolah" value="ya">
                            <label for="ya_usul">Ya</label><br>
                            <input type="radio" id="tidak_usul" name="usulan_sekolah" value="tidak">
                            <label for="tidak_usul">Tidak</label><br>
						<?php endif; ?>
                            <p style="text-align: left;">
                                Pilih Ya apabila peserta didik Layak diajukan sebagai <br>
                                Penerima manfaat Program Indonesia Pintar<br>
                                (Seperti BSM dan sejenisnya). Khusus bagi peserta didik<br>
                                Yang tidak memiliki KIP.
                            </p>
					<?php if (isset($validation['usulan_sekolah'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['usulan_sekolah']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Nama Tertera di KIP
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="nama_kip" size="50%" value="<?php echo isset($loadForm['nama_kip'])? $loadForm['nama_kip'] : ''; ?>"><br>
					<?php if (isset($validation['nama_kip'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['nama_kip']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Terima fisik Kartu (KIP)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2">
						
						<?php if (isset($loadForm['fisik_kartu_kip'])): ?>
						<?php if ($loadForm['fisik_kartu_kip'] == 'ya'): ?>
                            <input type="radio" id="ya_fisip" name="fisik_kartu_kip" value="ya" checked>
                            <label for="ya_fisip">Ya</label><br>
                            <input type="radio" id="tidak_fisip" name="fisik_kartu_kip" value="tidak">
                            <label for="tidak_fisip">Tidak</label><br>
						<?php elseif ($loadForm['fisik_kartu_kip'] == 'tidak'): ?>
							<input type="radio" id="ya_fisip" name="fisik_kartu_kip" value="ya">
                            <label for="ya_fisip">Ya</label><br>
                            <input type="radio" id="tidak_fisip" name="fisik_kartu_kip" value="tidak" checked>
                            <label for="tidak_fisip">Tidak</label><br>
						<?php endif; ?>
						<?php else: ?>
							<input type="radio" id="ya_fisip" name="fisik_kartu_kip" value="ya">
                            <label for="ya_fisip">Ya</label><br>
                            <input type="radio" id="tidak_fisip" name="fisik_kartu_kip" value="tidak">
                            <label for="tidak_fisip">Tidak</label><br>
						<?php endif; ?>
                            <p style="text-align: left;">
                                Status bahwa peserta didik sudah menerima atau belum<br>
                                menerima KIP secara fisik
                            </p>
					<?php if (isset($validation['fisik_kartu_kip'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['fisik_kartu_kip']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Alasan Layak PIP
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="alasan_layak_pip" size="50%" value="<?php echo isset($loadForm['alasan_layak_pip'])? $loadForm['alasan_layak_pip'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Pilih salah satu :<br>
                                [Pemegang PKH/KPS/KIP] /[Penerima BSM 2014]/ [Yatim Piatu/ Panti Asuhan/ Panti Sosial]/<br>
                                [Pernah Drop OUT]/ [Siswa Miskin/Rentan Miskin]/ [Daerah Konflik]/<br>
                                [Keluarga Terpilih]
                            </p>
					<?php if (isset($validation['alasan_layak_pip'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['alasan_layak_pip']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Bank
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="bank" size="50%" value="<?php echo isset($loadForm['bank'])? $loadForm['bank'] : ''; ?>">
					<?php if (isset($validation['bank'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['bank']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">No. Rekening Bank
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="no_rek_bank" size="50%" value="<?php echo isset($loadForm['no_rek_bank'])? $loadForm['no_rek_bank'] : ''; ?>">
					<?php if (isset($validation['no_rek_bank'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['no_rek_bank']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Rekening Atas Nama
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="no_rek_an" size="50%" value="<?php echo isset($loadForm['no_rek_an'])? $loadForm['no_rek_an'] : ''; ?>"><br><br>
					<?php if (isset($validation['no_rek_an'])): ?>
					<tr>
						<td colspan=3><?php echo $validation['no_rek_an']; ?>
					<?php endif; ?>

                            <!-- DATA AYAH KANDUNG -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>DATA AYAH KANDUNG</b>
                    <tr>
                        <td style=" width: 25%;">Nama Ayah Kandung
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="a_nama_lengkap" size="70%" value="<?php echo isset($loadForm2['nama_lengkap'])? $loadForm2['nama_lengkap'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Hindari penggunaan gelar akademik<br>
                                Seperti Hj., S.Pd., S.H. Dra.
                            </p>
					<?php if (isset($validation_2['nama_lengkap'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_2['nama_lengkap']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">NIK Ayah
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="a_nik" size="50%" value="<?php echo isset($loadForm2['nik'])? $loadForm2['nik'] : ''; ?>"><br>
					<?php if (isset($validation_2['nik'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_2['nik']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Tahun Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="a_tahun_lahir" size="20%" value="<?php echo isset($loadForm2['tahun_lahir'])? $loadForm2['tahun_lahir'] : ''; ?>"><br>
					<?php if (isset($validation_2['tahun_lahir'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_2['tahun_lahir']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Pendidikan Terakhir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="a_pendidikan" size="50%" value="<?php echo isset($loadForm2['pendidikan'])? $loadForm2['pendidikan'] : ''; ?>"><br>
					<?php if (isset($validation_2['pendidikan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_2['pendidikan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Pekerjaan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="a_pekerjaan" size="50%" value="<?php echo isset($loadForm2['pekerjaan'])? $loadForm2['pekerjaan'] : ''; ?>"><br>
					<?php if (isset($validation_2['pekerjaan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_2['pekerjaan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Penghasilan Bulanan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="a_penghasilan" size="50%" value="<?php echo isset($loadForm2['penghasilan'])? $loadForm2['penghasilan'] : ''; ?>"><br>
					<?php if (isset($validation_2['penghasilan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_2['penghasilan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Berkebutuhan Khusus
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="a_kebutuhan_khusus" size="50%" value="<?php echo isset($loadForm2['kebutuhan_khusus'])? $loadForm2['kebutuhan_khusus'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Isi salah satu :<br>
                                [Tidak]/ [Tuna Netra]/ [Rungu]/ [Grahita Ringan]/ [Down Sindrom]/<br>
                                [Indigo]/ [Bakat Istimewa]/ [Cerdas Istimewa]/ [Lainnya]
                            </p>
					<?php if (isset($validation_2['kebutuhan_khusus'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_2['kebutuhan_khusus']; ?>
					<?php endif; ?>

                            <!-- DATA IBU KANDUNG -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>DATA IBU KANDUNG</b>
                    <tr>
                        <td style=" width: 25%;">Nama Ibu Kandung
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="b_nama_lengkap" size="70%" value="<?php echo isset($loadForm3['nama_lengkap'])? $loadForm3['nama_lengkap'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Hindari penggunaan gelar akademik<br>
                                Seperti Hj., S.Pd., S.H. Dra.
                            </p>
					<?php if (isset($validation_3['nama_lengkap'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_3['nama_lengkap']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">NIK Ibu
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="b_nik" size="50%" value="<?php echo isset($loadForm3['nik'])? $loadForm3['nik'] : ''; ?>"><br>
					<?php if (isset($validation_3['nik'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_3['nik']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Tahun Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="b_tahun_lahir" size="20%" value="<?php echo isset($loadForm3['tahun_lahir'])? $loadForm3['tahun_lahir'] : ''; ?>"><br>
					<?php if (isset($validation_3['tahun_lahir'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_3['tahun_lahir']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Pendidikan Terakhir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="b_pendidikan" size="50%" value="<?php echo isset($loadForm3['pendidikan'])? $loadForm3['pendidikan'] : ''; ?>"><br>
					<?php if (isset($validation_3['pendidikan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_3['pendidikan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Pekerjaan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="b_pekerjaan" size="50%" value="<?php echo isset($loadForm3['pekerjaan'])? $loadForm3['pekerjaan'] : ''; ?>"><br>
					<?php if (isset($validation_3['pekerjaan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_3['pekerjaan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Penghasilan Bulanan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="b_penghasilan" size="50%" value="<?php echo isset($loadForm3['penghasilan'])? $loadForm3['penghasilan'] : ''; ?>"><br>
					<?php if (isset($validation_3['penghasilan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_3['penghasilan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Berkebutuhan Khusus
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="b_kebutuhan_khusus" size="50%" value="<?php echo isset($loadForm3['kebutuhan_khusus'])? $loadForm3['kebutuhan_khusus'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Isi salah satu :<br>
                                [Tidak]/ [Tuna Netra]/ [Rungu]/ [Grahita Ringan]/ [Down Sindrom]/<br>
                                [Indigo]/ [Bakat Istimewa]/ [Cerdas Istimewa]/ [Lainnya]
                            </p>
					<?php if (isset($validation_3['kebutuhan_khusus'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_3['kebutuhan_khusus']; ?>
					<?php endif; ?>


                            <!-- DATA WALI -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>DATA WALI</b>
                    <tr>
                        <td style=" width: 25%;">Nama Wali
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="c_nama_lengkap" size="70%" value="<?php echo isset($loadForm4['nama_lengkap'])? $loadForm4['nama_lengkap'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Hindari penggunaan gelar akademik<br>
                                Seperti Hj., S.Pd., S.H. Dra.
                            </p>
					<?php if (isset($validation_4['nama_lengkap'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_4['nama_lengkap']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">NIK Wali
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="c_nik" size="50%" value="<?php echo isset($loadForm4['nik'])? $loadForm4['nik'] : ''; ?>"><br>
					<?php if (isset($validation_4['nik'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_4['nik']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Tahun Lahir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="c_tahun_lahir" size="20%" value="<?php echo isset($loadForm4['tahun_lahir'])? $loadForm4['tahun_lahir'] : ''; ?>"><br>
					<?php if (isset($validation_4['tahun_lahir'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_4['tahun_lahir']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Pendidikan Terakhir
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="c_pendidikan" size="50%" value="<?php echo isset($loadForm4['pendidikan'])? $loadForm4['pendidikan'] : ''; ?>"><br>
					<?php if (isset($validation_4['pendidikan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_4['pendidikan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Pekerjaan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="c_pekerjaan" size="50%" value="<?php echo isset($loadForm4['pekerjaan'])? $loadForm4['pekerjaan'] : ''; ?>"><br>
					<?php if (isset($validation_4['pekerjaan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_4['pekerjaan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Penghasilan Bulanan
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="c_penghasilan" size="50%" value="<?php echo isset($loadForm4['penghasilan'])? $loadForm4['penghasilan'] : ''; ?>"><br>
					<?php if (isset($validation_4['penghasilan'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_4['penghasilan']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Berkebutuhan Khusus
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="c_kebutuhan_khusus" size="50%" value="<?php echo isset($loadForm4['kebutuhan_khusus'])? $loadForm4['kebutuhan_khusus'] : ''; ?>"><br>
                            <p style="text-align: left;">
                                Isi salah satu :<br>
                                [Tidak]/ [Tuna Netra]/ [Rungu]/ [Grahita Ringan]/ [Down Sindrom]/<br>
                                [Indigo]/ [Bakat Istimewa]/ [Cerdas Istimewa]/ [Lainnya]
                            </p>
					<?php if (isset($validation_4['kebutuhan_khusus'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_4['kebutuhan_khusus']; ?>
					<?php endif; ?>

                            <!-- KONTAK -->
                    <tr>
                        <td colspan="3" style="text-align: left; color: white; background-color: black;"><b>KONTAK</b>
                    <tr>
                        <td style=" width: 25%;">Nomor Telepon Rumah (Milik pribadi, orang tua, atau wali)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="d_telepon" size="50%" value="<?php echo isset($loadForm5['telepon'])? $loadForm5['telepon'] : ''; ?>"><br>
					<?php if (isset($validation_5['telepon'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_5['telepon']; ?>
					<?php endif; ?>
                    <tr>
                        <td style=" width: 25%;">Nomor HP (Milik pribadi, orang tua, atau wali)
                        <td style="text-align: center; width: 10%;"> :
                        <td colspan="2"><input type="text" name="d_nohp" size="50%" value="<?php echo isset($loadForm5['nohp'])? $loadForm5['nohp'] : ''; ?>"><br>
					<?php if (isset($validation_5['nohp'])): ?>
					<tr>
						<td colspan=3><?php echo $validation_5['nohp']; ?>
					<?php endif; ?>
					<tr>
						<td colspan=3><center><input class="btn btn-primary" type="submit" value="Simpan"/></center>
                </table>
				<?php echo form_close(); ?>
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