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
		Lengkapi Data Acara Berikut  :
	</div>
	<div class="panel-body">
<?php 
	if(isset($_POST["btn-save"])){
		$l_acara = $_POST["lokasi_acara"];
		$w_acara = date("Y-m-d", strtotime($_POST["waktu_acara"])) ;
		$m_acara = $_POST["maksud_acara"];
		$hiburan = $_POST["hiburan"];

		//definisi variable file kk
		$name_kk = date("YmdHis").$_FILES["kk"]["name"];
		$type_kk = $_FILES["kk"]["type"];
		$size_kk = $_FILES["kk"]["size"];
		$temp_kk = $_FILES["kk"]["tmp_name"];

		//definisi variable file foto acara
		$name_ft_acara = date("YmdHis").$_FILES["ft_acara"]["name"];
		$type_ft_acara = $_FILES["ft_acara"]["type"];
		$size_ft_acara = $_FILES["ft_acara"]["size"];
		$temp_ft_acara = $_FILES["ft_acara"]["tmp_name"];

		$lokasi = "../assets/uploads/";

		if(!empty($l_acara) && !empty($w_acara) && !empty($m_acara) && !empty($hiburan)){
			if(isset($name_kk) && isset($name_ft_acara)){
				if(($type_kk == "image/jpg" || $type_kk == "image/jpeg" || $type_kk == "image/png") && ($type_ft_acara == "image/jpg" || $type_ft_acara == "image/jpeg" || $type_ft_acara == "image/png")){
					$sql = "insert into surat values('','".$dataUser["nik"]."','SKIR','SURAT KETERANGAN IZIN RAME-RAME','".$m_acara."','".$l_acara."','".$name_kk."','".$name_ft_acara."','','Belum Verifikasi','".$w_acara."','".$hiburan."','".date("Y-m-d")."','','','','','')";

					move_uploaded_file($temp_kk, $lokasi.$name_kk);
					move_uploaded_file($temp_ft_acara, $lokasi.$name_ft_acara);

					mysql_query($sql);

					echo '<div class="alert alert-info">Surat Anda Telah Dibuat. Silahkan <a href="homeuser.php?pelayanan=skir&view=v_surat">Lihat</a></div>';
				}else{
					echo '<div class="alert alert-warning">Foto unsupported file! JPG atau PNG required.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Foto belum Lengkap</div>';
			}
		}else{
			echo '<div class="alert alert-warning">Data yang diisi belum Lengkap</div>';
		}


	}


?>
<form method="post" action="" enctype="multipart/form-data">

 
   		<div class="form-group">
    		<label>Lokasi Acara: </label>
      		<input type="text" name="lokasi_acara" class="form-control">
    	</div>
   		<div class="form-group">
    		<label>Waktu Acara: </label>
      		<input type="date" name="waktu_acara" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Maksud Acara : </label>
      		<input type="text" name="maksud_acara" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Hiburan : </label>
      		<input type="text" name="hiburan" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Foto Kartu Keluarga</label>
      		<input type="file" name="kk">
    	</div>
    	<div class="form-group">
    		<label>Foto Tempat Acara</label>
      		<input type="file" name="ft_acara">
    	</div>
  <button type="submit" name="btn-save" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Mengajukan Surat Ini?')"><span class="glyphicon glyphicon-send"></span> Kirim</button>
</form>
	</div>
</div>