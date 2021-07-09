<?php 
    
    include_once("koneksi.php");
    $carikode = mysqli_query($con,"SELECT MAX(kdLembaga) FROM lembaga");
	// menjadikannya array
	$datakode = mysqli_fetch_array($carikode);
	// jika $datakode
	if ($datakode) {
	// membuat variabel baru untuk mengambil kode mulai dari 3
	$nilaikode = substr($datakode[0], 3);
	// menjadikan $nilaikode ( int )
	$kode = (int) $nilaikode;
	// setiap $kode di tambah 1
	$kode = $kode + 1;
	// hasil untuk menambahkan kode 
	// angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
	// atau angka sebelum $kode
	$hasilkode = "DPM".str_pad($kode,3, "0", STR_PAD_LEFT);
	}else{
		$hasilkode = "DPM001";
	}
    // KODE OTOMATIS
    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi | Perusahaan</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body OnLoad="document.login.username.focus();" colorbackground="blue">
<script>
    alert("Harap Ingat Kode Anda Untuk Melanjutkan Proses Selanjutnya !");
</script>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
            <br><br>
                    <h4><b>REGISTRASI <BR>
                    OPEN DONASI PERSEORANGAN <br>
                PORTAL DONASI-KU</b></h4>
                    <br>
            </div>
        </div>
         
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
            <div class="box box-primary">
				
<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
    <div class="box-body">

    <div class="form-group">
            <label class="col-sm-2 control-label">Kode Anda </label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="txtKd" value="<?php echo $hasilkode; ?>" readonly/>
            </div>
        </div>

       <div class="form-group">
            <label class="col-sm-2 control-label">Nama </label>
            <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Nama" name="txtNm" required autofocus/>
            </div>
        </div>

        <div class="form-group" >
        <label class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-8">
            <select name="txtJekel" class="form-control" required>
            <option value=""> - Jenis Kelamin -</option>
                <option value="P">Perempuan</option>
                <option value="L">Laki-Laki</option>
            </select>
            </div>
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Alamat </label>
            <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="txtAlamat" required="">
            </div>
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label"> Jenis </label>
        <div class="col-sm-8">
            <select name="txtJenis" class="form-control" required>
            <option value=""> - Jenis -</option>
            <?php
                $p = mysqli_query($con, "select id, nama from mst_jenis WHERE jenis='0'") or die(mysqli_error($con));
                while ($datap = mysqli_fetch_array($p)) {
                    echo '<option value="' . $datap['id'] . '">' . $datap['nama'] . '</option>';
                } ?>
            </select>
            </div>
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Berkas </label>
            <div class="col-sm-8">
            <input type="file" class="form-control" placeholder="Pilih File PDF" name="txtBerkas" required="">
            </div>
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">No Handphone </label>
            <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Masukkan No Handphone" name="txtNohp" required="">
            </div>
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">No Rekening </label>
            <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Masukkan No Rekening" name="txtNoRek" required="">
            </div>
        </div>
        <center>
            <a href="index.php"class='btn btn btn-warning btn-sm'>Kembali</a>
            <button type="submit" class="btn btn-success btn-sm" name="btnDaftarPer">Registrasi</button>
        </center>
        </div>
</form>
</div>
</section>

     </div>
                   
                
        </div>
    </div>

     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>

<?php
//  include("koneksi.php");
 $konek = mysqli_connect("localhost","root","","sosial"); 
 if (isset ($_POST['btnDaftarPer'])){
        $date = date('Y-m-d');
		$sql_simpan = "INSERT INTO perseorangan (kdPerseorangan, nama, jekel, alamat, idJenis, berkas, no_hp, no_rek, tgl_daftar) VALUES (
                    '".$_POST['txtKd']."',
                    '".$_POST['txtNm']."',
					'".$_POST['txtJekel']."',
                    '".$_POST['txtAlamat']."',
                    '".$_POST['txtJenis']."',
                    'NULL',
                    '".$_POST['txtNohp']."',
                    '".$_POST['txtNoRek']."',
                    '$date')";
		$query_simpan = mysqli_query($konek,$sql_simpan);

        if ($query_simpan) {
            echo "<script>alert('Tahap Selanjutnya')</script>";
            echo "<meta http-equiv='refresh' content='0; url=reg_user.php'>";
        }else{
            echo "<script>alert('Proses Gagal')</script>";
        }
        //selesai proses simpan
    }
?>