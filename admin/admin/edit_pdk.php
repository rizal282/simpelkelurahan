<legend>Editor Data Penduduk</legend>

<?php 
	include "../proses/proses_edit_pdk.php"; 

	$sql_edit_pdk = "select * from penduduk where nik = '".$nik_select."'";
	$result = mysql_query($sql_edit_pdk);
	$rowpdk = mysql_fetch_array($result);
	extract($rowpdk);
?>

<form action="" method="post">
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>NIK</label>
				<input class="form-control" type="text" name="edit_nik" value="<?php echo $nik; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input class="form-control" type="text" name="edit_nm_leng" value="<?php echo $nama; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Tempat Lahir</label>
				<input class="form-control" type="text" name="edit_tmp_lahir" value="<?php echo $tempat_lahir; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input class="form-control" type="date" name="edit_tgl_lahir" value="<?php echo $tanggal_lahir; ?>">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input class="form-control" type="text" name="edit_jk" value="<?php echo $j_kelamin; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Status</label>
				<input class="form-control" type="text" name="edit_status" value="<?php echo $status; ?>">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Alamat</label>
				<input class="form-control" type="text" name="edit_alamat" value="<?php echo $alamat; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3">
			<div class="form-group">
				<label>RT</label>
				<input class="form-control" type="text" name="edit_rt" value="<?php echo $rt; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>RW</label>
				<input class="form-control" type="text" name="edit_rw" value="<?php echo $rw; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Kelurahan</label>
				<input class="form-control" type="text" name="edit_kelurahan" value="<?php echo $kelurahan; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Kecamatan</label>
				<input class="form-control" type="text" name="edit_kecamatan" value="<?php echo $kecamatan; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Kabupaten</label>
				<input class="form-control" type="text" name="edit_kab" value="<?php echo $kabupaten; ?>">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Agama</label>
				<input class="form-control" type="text" name="edit_agama" value="<?php echo $agama; ?>">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Bangsa</label>
				<input class="form-control" type="text" name="edit_bangsa" value="<?php echo $bangsa; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Pekerjaan</label>
				<input class="form-control" type="text" name="edit_pekerjaan" value="<?php echo $pekerjaan; ?>">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="edit_pass" value="<?php echo $password; ?>">
			</div>
		</div>
	</div>

	<button type="submit" name="btn-save" class="btn btn-primary">Simpan</button>
	<a href="homeadmin.php?adm=penduduk" class="btn btn-danger">Batal</a>
</form>