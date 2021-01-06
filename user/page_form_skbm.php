<div class="panel panel-primary">
	<div class="panel-heading">
		Berikut Data Anda :
	</div>
	<div class="panel-body">
		<table class="table table-hovered">
			<tr>
				<td>NIK</td>
				<td><?php echo $dataUser["nik"]; ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?php echo ucfirst ($dataUser["nama"]); ?></td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td><?php echo ucfirst($dataUser["tempat_lahir"]); ?>, <?php echo $dataUser["tanggal_lahir"]; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo ucfirst($dataUser["j_kelamin"]); ?></td>
			</tr>
			<tr>
				<td>Status Perkawinan</td>
				<td><?php echo ucfirst ($dataUser["status"]); ?></td>
			</tr>
			<tr>
				<td>Bangsa/Agama</td>
				<td><?php echo ucfirst ($dataUser["bangsa"]); ?>/ <?php echo ucfirst ($dataUser["agama"]); ?> </td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><?php echo ucfirst ($dataUser["pekerjaan"]);?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo ucfirst ($dataUser["alamat"]);?> RT <?php echo $dataUser["rt"]; ?>/ RW <?php echo $dataUser["rw"]; ?> Kelurahan. <?php echo ucfirst ($dataUser["kelurahan"]); ?> Kecamatan <?php echo ucfirst ($dataUser["kecamatan"]); ?> Kabupaten <?php echo ucfirst ($dataUser["kabupaten"]); ?></td>
			</tr>
		</table>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		Isi Data Tambahan Berikut  :
	</div>
	<div class="panel-body">
<?php 
if(isset($_POST["btn-save"])){
	$ktr = strtolower($_POST["keperluan"]);
	$nama_kk = $_FILES["kk"]["name"];
	$type_kk = $_FILES["kk"]["type"];
	$size_kk = $_FILES["kk"]["size"];
	$temp_kk = $_FILES["kk"]["tmp_name"];

	$new_name_kk = date('YmdHis').$nama_kk;
	$lokasi = "../assets/uploads/";

	if(!empty($ktr)){
		if(!empty($nama_kk)){
			if($type_kk == "image/jpg" || $type_kk == "image/jpeg" || $type_kk == "image/png"){
				if($size_kk < 3000000){
					$sql = "insert into surat values('','".$dataUser["nik"]."','SKBM','Surat Keterangan Belum Menikah','".ucwords($ktr)."','','".$new_name_kk."','','','Belum Verifikasi','','','".date("Y-m-d")."','','','','','')";

					move_uploaded_file($temp_kk, $lokasi.$new_name_kk);
					mysql_query($sql);

					echo '<div class="alert alert-info">Surat Anda Telah Dibuat. Silahkan <a href="homeuser.php?pelayanan=skbm&view=v_surat">Lihat</a></div>';
				}else{
					echo '<script>alert("Ukuran Berkas Jangan Melebihi 3 MB!")</script>';
				}
			}else{
				echo '<script>alert("Tolong Isi Berkas Dengan Format JPEG atau JPG atau PNG!")</script>';
			}
		}else{
			echo '<script>alert("Tolong Isi Berkas Kartu Keluarga Anda!")</script>';
		}
	}else{
		echo '<script>alert("Tolong Isi Keperluan Surat Anda!")</script>';
	}
}


?>

<form method="post" action="" enctype="multipart/form-data">
   		<div class="form-group">
	    	<label>Isi Keperluan Pembuatan Surat Anda : </label>
	      	<input type="text" name="keperluan" class="form-control" placeholder="Contoh : Untuk Menikah, Untuk Melamar Pekerjaan, Kuliah, TKW, TKI">
	    </div>
   		<div class="form-group">
    		<label>Foto Kartu Keluarga</label>
      		<input type="file" name="kk">
    	</div>
  <button type="submit" name="btn-save" class="btn btn-danger"> <span class="glyphicon glyphicon-send"> Kirim</button>
</form> 