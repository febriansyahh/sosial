<?php
 include_once("../koneksi.php");

 	if (isset($_POST['btnSimpan'])) {
		$sql_insert = "INSERT INTO program (kdProgram, nmProgram, idLembaga, keterangan, donasi, status, idLevel) VALUES (
					'".$_POST['txtKdProgram']."',
					'".$_POST['txtNmProgram']."',
					'".$_POST['txtIdLembaga']."',
					'".$_POST['txtketerangan']."',
                    '".$_POST['txtDonasi']."',
					'T',
                    '1')";
		$query_insert = mysqli_query($con,$sql_insert) or die (mysqli_connect_error());
		
		if($query_insert) {
            echo "<script>alert('Simpan Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=prog'>";
			
		}else{
			echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=prog'>";
		}

    }
elseif(isset ($_POST['btnUBAH'])){
    //mulai proses ubah
    $sql_ubah = "UPDATE program SET
        kdProgram='".$_POST['txtKdProgram']."',
        nmProgram='".$_POST['txtNmProgram']."',
        idLembaga='".$_POST['txtIdLembaga']."',
        keterangan='".$_POST['txtKeterangan']."',
        donasi='".$_POST['txtDonasi']."',
        status='T'
        WHERE id='".$_POST['txtId']."'";
    $query_ubah = mysqli_query($con, $sql_ubah);

    if ($query_ubah) {
        echo "<script>alert('Ubah Berhasil')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?page=prog'>";
    }else{
        echo "<script>alert('Ubah Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?page=prog'>";
    }
    //selesai proses ubah

}else{
    //mulai proses hapus
    if(isset($_GET['kode'])){
        $sql_hapus = "DELETE FROM program WHERE id='".$_GET['kode']."'";
        $query_hapus = mysqli_query($con, $sql_hapus);

        if ($query_hapus) {
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=prog'>";
        }else{
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=prog'>";
        }
    }
    //selesai proses hapus
}

?>
