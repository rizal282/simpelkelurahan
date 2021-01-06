<legend>Data Penduduk</legend>

<?php 
	//include "../proses/proses_edit_hapus_nik.php"; 

	$nik_aksi = $_POST["id_pdk"];
	$sql = "select * from penduduk where nik = '".$nik_aksi."'";
	$result = mysql_query($sql);
	$rowscount = mysql_num_rows($result);

	if ($rowscount == 0) {
		echo '<script>alert("Data NIK Tidak Ditemukan")</script>';
	}else{
		$rowsnik = mysql_fetch_array($result);
		extract($rowsnik);
?>

<form action="../proses/proses_edit_hapus_nik.php" method="post">
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>NIK</label>
				<input class="form-control" type="text" name="nik" value="<?php echo $nik; ?>" readonly>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input class="form-control" type="text" name="nm_leng" value="<?php echo $nama; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Tempat Lahir</label>
				<input class="form-control" type="text" name="tmp_lahir" value="<?php echo $tempat_lahir; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input class="form-control" type="text" name="tgl_lahir" value="<?php echo $tanggal_lahir; ?>">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input class="form-control" type="text" name="jk" value="<?php echo $j_kelamin; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Status</label>
				<input class="form-control" type="text" name="status" value="<?php echo $status; ?>">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Alamat</label>
				<input class="form-control" type="text" name="alamat" value="<?php echo $alamat; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3">
			<div class="form-group">
				<label>RT</label>
				<input class="form-control" type="text" name="rt" value="<?php echo $rt; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>RW</label>
				<input class="form-control" type="text" name="rw" value="<?php echo $rw; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Kelurahan</label>
				<input class="form-control" type="text" name="kelurahan" value="<?php echo $kelurahan; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Kecamatan</label>
				<input class="form-control" type="text" name="kecamatan" value="<?php echo $kecamatan; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Kabupaten</label>
				<input class="form-control" type="text" name="kab" value="<?php echo $kabupaten; ?>">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Agama</label>
				<input class="form-control" type="text" name="agama" value="<?php echo $agama; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Bangsa</label>
				<input class="form-control" type="text" name="bangsa" value="<?php echo $bangsa; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Pekerjaan</label>
				<input class="form-control" type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="pass" value="<?php echo $password; ?>">
			</div>
		</div>
	</div>

	<button type="submit" name="btn-proses-edit-pdk" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Perbarui</button>
	<a href="homeadmin.php?adm=penduduk" class="btn btn-danger"> <span class=" glyphicon glyphicon-remove"></span> Batal</a>
</form>

<?php
	}
 
?>
