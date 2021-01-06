<?php include '../proses/input_foto_galeri.php'; ?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Foto</label>
		<input type="file" name="foto">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control"></textarea>
	</div>
	<!--<div class="form-group">
		<label>Kategori</label>
		<select name="kategori" class="form-control">
			<option>Pilih Kategori :</option>
			<option value="1">Sosial</option>
			<option value="2">Hari Besar Nasional</option>
			<option value="3">Pembangunan</option>
			<option value="4">Keagamaan</option>
		</select>
	</div>-->

	<button type="submit" class="btn btn-primary" name="btn-save"> <span class="glyphicon glyphicon-save"></span> Simpan</button>
	<a class="btn btn-warning" href="homeadmin.php?adm=galeri"> <span class="glyphicon glyphicon-remove"> </span> Batal</a>
</form>