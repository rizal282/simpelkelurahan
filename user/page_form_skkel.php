<legend>Berikut Data Anda :</legend>

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

<?php 
if(isset($_POST["btn-save"])){
	$ket = $_POST["ket"];
	if(empty($ket)){
		echo '<script>alert("Tolong Isi Jenis Usaha Anda!")</script>';
	}else{
		$jns = $_POST["j_surat"];
		$n_surat = $_POST["n_surat"];
		$alamat = $_POST["alamat_usaha"];

		$sql = "insert into surat values('','".$dataUser["nik"]."','".$jns."','".$n_surat."','".$ket."','".$alamat."','Belum Verifikasi','".date("Y-m-d")."','','','')";

		mysql_query($sql);

		echo '<div class="alert alert-info">Surat Anda Telah Dibuat. Silahkan <a href="homeuser.php?pelayanan=sku&view=v_surat">Lihat</a></div>';
	}
}


?>

<form method="post" action="">
	<input type="hidden" name="j_surat" value="SKU">
	<input type="hidden" name="n_surat" value="SURAT KETERENGAN USAHA
">
   	<legend>Isi Data Usaha</legend>
   		<div class="form-group">
    		<label>Jenis Usaha Anda : </label>
      		<input type="text" name="ket" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Alamat Tempat Usaha Anda : </label>
      		<input type="text" name="alamat_usaha" class="form-control">
    	</div>
  <button type="submit" name="btn-save" class="btn btn-default" onclick="return confirm('Anda Yakin Akan Mengajukan Surat Ini?')">Kirim</button>
</form>