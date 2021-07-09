<?php 
     include_once("../koneksi.php");
    // KODE OTOMATIS
	// membuat query max untuk kode
    $carikode = mysqli_query($con,"SELECT MAX(id) FROM program") or die ('error');
	// menjadikannya array
	$datakode = mysqli_fetch_array($carikode);
	// jika $datakode
	if ($datakode) {
	// membuat variabel baru untuk mengambil kode mulai dari 3
	$nilaikode = substr($datakode[0], 4);
	// menjadikan $nilaikode ( int )
	$kode = (int) $nilaikode;
	// setiap $kode di tambah 1
	$kode = $kode + 1;
	// hasil untuk menambahkan kode 
	// angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
	// atau angka sebelum $kode
	$hasilkode = "PLDN".str_pad($kode,2, "0", STR_PAD_LEFT);
	}else{
		$hasilkode = "PLDN01";
	}
    ?>
<!-- <h4><span class="glyphicon glyphicon-briefcase"></span>Yayasan SMK NU Ma'arif Kudus</h4> -->
<div class="form-group">

<br>
<div class="card mb-3">
<div class="card-header">
<a data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm">Tambah Data Program</a> </div>
<br>
<div class="box box-primary">
<div class="box-header with-border">
  <h3 class="box-title">Peserta</h3>

  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
    </button>
    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>
<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
    <center>
      <tr>
        <th>No</th>
        <th>Kode Program</th>
        <th>Nama Program</th>
        <th>Lembaga</th>
        <th>Keterangan</th>
        <th>Donasi</th>
        <th>Rekening</th>
        <th></th>
        <th>Piihan</th>
    </tr>
    </center>
    </thead>
    <tbody>
    
        <?php
            
            $sql_tampil = "SELECT a.id, a.kdProgram, a.nmProgram, b.nmLembaga, a.keterangan, a.donasi, a.status, b.no_rek FROM program a, lembaga b WHERE a.idLembaga=b.id";
            $query_tampil = mysqli_query($con, $sql_tampil);
            $no=1;
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
        ?>
        <tr>       
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kdProgram']; ?></td>
            <td><?php echo $data['nmProgram']; ?></td>
            <td><?php echo $data['nmLembaga']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td><?php echo $data['donasi']; ?></td>
            <td><?php echo $data['no_rek']; ?></td>
            <td>
            <?php
            if($data['status']== 'P'){
            ?>
            <span class="badge bg-success">Publish</span>
            <?php
            }elseif($data['status']=='T'){
            ?><span class="badge bg-danger">Belum ACC</span>
            <?php
            }else{
            ?><span class="badge bg-warning">Arsip</span>
            </td>
            <?php } ?>
            <td>
                <a href="?page=progUbah&kode=<?php echo $data['id']; ?>"class='btn btn-warning btn-sm'><i class="fa fa-edit"></i></a>
                <a href="?page=progAksi&kode=<?php echo $data['id']; ?>"onclick="return confirm('Apakah anda yakin hapus data ini ?')" class='btn btn-danger btn-sm'><i class="fa fa-trash"></i></i></a>
            </td>
        </tr>
        <?php
            $no++;
            }
        
        ?>
    </tbody>
  </table>
  <div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Program</h4>
			</div>
			<div class="modal-body">
                <form action="?page=progAksi" method="post" enctype="multipart/form-data">
					<div class="form-group">
                    <label>Kode Program</label>
                    <input type="text" class="form-control" name="txtKdProgram" value="<?php echo $hasilkode; ?>" readonly />
                </div>
                <div class="form-group">
                    <label>Nama Program</label>
                    <input type="text" class="form-control" name="txtNmProgram"/>
                </div>

                <div class="form-group">
                <label>Lembaga</label>
                <select name="txtIdLembaga" class="form-control">
                    <option value="">- Lembaga -</option>
                    <?php
                    $p = mysqli_query($con, "select id , nmLembaga from lembaga") or die(mysqli_error($con));
                    while ($datap = mysqli_fetch_array($p)) {
                        echo '<option value="' . $datap['id'] . '">' . $datap['nmLembaga'] . '</option>';
                    } ?>
                </select>
            </div>
                
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="txtketerangan"
                    oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required/>
            </textarea>
            </div>
            
           <div class="form-group">
                    <label>Donasi</label>
                    <input type="text" class="form-control" name="txtDonasi"/>
                </div>
            </div>
                
				<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" name="btnSimpan">Simpan</button>
				</div>
			</form>
        </div>