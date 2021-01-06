<?php
include '../proses/proses_input_artikel.php';
?>

<form method="post" enctype="multipart/form-data">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-6">
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Pilih Kategori</label>
					<select name="kategori" class="form-control">
						<option value="khas kelurahan">Khas Kelurahan</option>
						<option value="sosial & budaya">Sosial & Budaya</option>
						<option value="ekonomi">Ekonomi</option>
						<option value="wisata daerah">Wisata Daerah</option>
					</select>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label>Deskripsi Singkat</label>
					<input type="text" name="des" class="form-control">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label>Isi Berita</label>
					<textarea name="berita" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label>Foto</label>
					<input type="file" name="foto">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit" name="btn-save"> <span class=" 	glyphicon glyphicon-ban-circle 	
	glyphicon glyphicon-save"></span> Simpan</button>
				</div>
			</div>
		</div>
	</div>
</form>

<div class="panel panel-default">
	<a class="btn btn-warning" href="?berita=artikel"> <span class="glyphicon glyphicon-ban-circle 	
	glyphicon glyphicon-arrow-left"></span> Kembali</a>
</div>