<legend>Tambah Data Penduduk</legend>
<button class="btn btn-warning">Lihat Daftar Penduduk Baru</button>
<?php include "../proses/proses_tambah_pdk.php"; ?>

<form action="" method="post">
<p>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>NIK</label>
				<input class="form-control" type="text" name="nik" value="<?php echo $_SESSION["nik"]; ?>" placeholder="NIK Harus 16 Digit" >
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input class="form-control" type="text" name="nm_leng" value="<?php echo $_SESSION["nm_leng"]; ?>" placeholder="Masukkan Nama Lengkap">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Tempat Lahir</label>
				<input class="form-control" type="text" name="tmp_lahir" value="<?php echo $_SESSION["tmp_lahir"]; ?>" placeholder="Masukkan Tempat Lahir">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input class="form-control" type="date" name="tgl_lahir" value="<?php echo $_SESSION["tgl_lahir"]; ?>"  >
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input class="form-control" type="text" name="jk" value="<?php echo $_SESSION["jk"]; ?>" placeholder="Masukkan Jenis Kelamin" >
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Status</label>
				<input class="form-control" type="text" name="status" value="<?php echo $_SESSION["status"]; ?>" >
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Alamat</label>
				<input class="form-control" type="text" name="alamat" value="<?php echo $_SESSION["alamat"]; ?>" >
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3">
			<div class="form-group">
				<label>RT</label>
				<input class="form-control" type="text" name="rt" value="<?php echo $_SESSION["rt"]; ?>" >
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>RW</label>
				<input class="form-control" type="text" name="rw" value="<?php echo $_SESSION["rw"]; ?>" >
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Kelurahan</label>
				<input class="form-control" type="text" name="kelurahan" value="<?php echo $_SESSION["kelurahan"]; ?>" >
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Kecamatan</label>
				<input class="form-control" type="text" name="kecamatan" value="<?php echo $_SESSION["kecamatan"]; ?>" >
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Kabupaten</label>
				<input class="form-control" type="text" name="kab" value="<?php echo $_SESSION["kab"]; ?>" >
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Agama</label>
				<input class="form-control" type="text" name="agama" value="<?php echo $_SESSION["agama"]; ?>" >
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Bangsa</label>
				<input class="form-control" type="text" name="bangsa" value="<?php echo $_SESSION["bangsa"]; ?>" >
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Pekerjaan</label>
				<input class="form-control" type="text" name="pekerjaan" value="<?php echo $_SESSION["pekerjaan"]; ?>" >
			</div>
		</div>
		<div class="col-lg-3">
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="pass" value="<?php echo $_SESSION["pass"]; ?>" >
			</div>
		</div>
	</div>

	<button type="submit" name="btn-save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
	<button type="reset" name="reset" class="btn btn-danger"> <span class=" glyphicon glyphicon-remove"></span> Batal</a>
</form>
