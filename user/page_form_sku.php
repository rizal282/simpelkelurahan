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
		Isi Data Usaha Anda:
	</div>
	<div class="panel-body">
<?php 
if(isset($_POST["btn-save"])){
	$ktr = $_POST["keperluan"];
	$alamat = $_POST["alamat_usaha"];

	//variable untuk kk
	$nama_kk = $_FILES["kk"]["name"];
	$type_kk = $_FILES["kk"]["type"];
	$size_kk = $_FILES["kk"]["size"];
	$temp_kk = $_FILES["kk"]["tmp_name"];

	//variable untuk foto tempat usaha
	$nama_tmp_usaha = $_FILES["tmp_usaha"]["name"];
	$type_tmp_usaha = $_FILES["tmp_usaha"]["type"];
	$size_tmp_usaha = $_FILES["tmp_usaha"]["size"];
	$temp_tmp_usaha = $_FILES["tmp_usaha"]["tmp_name"];

	$new_name_kk = date('YmdHis').$nama_kk;
	$new_name_tmp_usaha = date('YmdHis').$nama_tmp_usaha;

	$lokasi = "../assets/uploads/";

	if(!empty($ktr)){
		if(!empty($alamat)){
			if(($type_kk == "image/jpg" || $type_kk == "image/jpeg" || $type_kk == "image/png") && ($type_tmp_usaha == "image/jpg" || $type_tmp_usaha == "image/jpeg" || $type_tmp_usaha == "image/png")){
				if($size_kk < 3000000 && $size_tmp_usaha < 3000000){


					$sql = "insert into surat values('','".$dataUser["nik"]."','SKU','Surat Keterangan Usaha','".$ktr."','".$alamat."','".$new_name_kk."','".$new_name_tmp_usaha."','','Belum Verifikasi','','','".date("Y-m-d")."','','','','','')";

					move_uploaded_file($temp_kk, $lokasi.$new_name_kk);
					move_uploaded_file($temp_tmp_usaha, $lokasi.$new_name_tmp_usaha);
					mysql_query($sql);

					echo '<div class="alert alert-info">Surat Anda Telah Dibuat. Silahkan <a href="homeuser.php?pelayanan=sku&view=v_surat">Lihat</a></div>';
				}else{
					echo '<script>alert("Ukuran Berkas Jangan Melebihi 3 MB!")</script>';
				}
			}else{
				echo '<script>alert("Tolong Isi format file yang sesuai. harus jpg atau png!")</script>';
			}
		}else{
			echo '<script>alert("Tolong Isi Alamat Usaha Anda!")</script>';
		}
	}else{
		echo '<script>alert("Tolong Isi Keperluan Surat Anda!")</script>';
	}
}


?>
<form method="post" action="" enctype="multipart/form-data">
   		<div class="form-group">
    		<label>Jenis Usaha Anda : </label>
      		<input type="text" name="keperluan" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Alamat Tempat Usaha Anda : </label>
      		<input type="text" name="alamat_usaha" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Foto Kartu Keluarga</label>
      		<input type="file" name="kk">
    	</div>
    	<div class="form-group">
    		<label>Foto Tempat Usaha</label>
      		<input type="file" name="tmp_usaha">
    	</div>
  <button type="submit" name="btn-save" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Mengajukan Surat Ini?')"><span class="glyphicon glyphicon-send"></span> Kirim</button>
</form>