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
									//ini untuk KK
					$nama_kk = $_FILES["kk"]["name"];
					$type_kk = $_FILES["kk"]["type"];
					$size_kk = $_FILES["kk"]["size"];
					$temp_kk = $_FILES["kk"]["tmp_name"];

					//ini untuk pas Foto
					$nama_p_foto = $_FILES["p_foto"]["name"];
					$type_p_foto = $_FILES["p_foto"]["type"];
					$size_p_foto = $_FILES["p_foto"]["size"];
					$temp_p_foto = $_FILES["p_foto"]["tmp_name"];

					$new_name_kk = date('YmdHis').$nama_kk;
					$new_name_p_foto = date('YmdHis').$nama_p_foto;
					$lokasi = "../assets/uploads/";

					$jns = "SKDOM";
					$n_surat = "Surat Keterangan Domisili";

					if($type_kk == "image/jpg" || $type_kk == "image/jpeg" || $type_kk == "image/png"){
						if($size_kk < 3000000){
							if($type_p_foto == "image/jpg" || $type_p_foto == "image/jpeg" || $type_p_foto == "image/png"){
								if($size_kk < 3000000){
									//$jns = $_POST["j_surat"];
									//$n_surat = $_POST["n_surat"];

									$sql = "insert into surat values('','".$dataUser["nik"]."','".$jns."','".$n_surat."','','','".$new_name_kk."','".$new_name_p_foto."','','Belum Verifikasi','','','".date("Y-m-d")."','','','','','')";

									move_uploaded_file($temp_kk, $lokasi.$new_name_kk);
									move_uploaded_file($temp_p_foto, $lokasi.$new_name_p_foto);

									mysql_query($sql);

									echo '<div class="alert alert-info">Surat Anda Telah Dibuat. Silahkan <a href="homeuser.php?pelayanan=skdom&view=v_surat">Lihat</a></div>';
								}else{
									echo '<script>alert("Ukuran Berkas Pas Foto Jangan Melebihi 3 MB!")</script>';
								}
							}else{
								echo '<script>alert("Tolong Isi Berkas Pas Foto Dengan Format JPEG atau JPG atau PNG!")</script>';
							}
						}else{
							echo '<script>alert("Ukuran Berkas KK Jangan Melebihi 3 MB!")</script>';
						}
					}else{
						echo '<script>alert("Tolong Isi Berkas KK Dengan Format JPEG atau JPG atau PNG!")</script>';
					}
	
			}


			?>

<form method="post" action="" enctype="multipart/form-data">
   		<div class="form-group">
    		<label>Foto Kartu Keluarga</label>
      		<input type="file" name="kk">
    	</div>
    	  <div class="form-group">
			    	<label>Pas Foto</label>
			      	<input type="file" name="p_foto">
			      	</div>
  <button type="submit" name="btn-save" class="btn btn-danger"> <span class=" glyphicon glyphicon-send"></span>Kirim</button>
</form> 