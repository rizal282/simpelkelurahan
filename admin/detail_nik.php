<?php 
	if($_SESSION["level"] == "admin"){
?>
<?php
	$query_nik = "select * from penduduk where nik = '".$ViewNik."'";
	$result = mysql_query($query_nik);
	$dataUser = mysql_fetch_assoc($result);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		Admin - Berikut Detail Penduduk dari NIK <?php echo $dataUser["nik"]; ?> :
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
		<p>&nbsp;</p>
		<a class="btn btn-warning" href="homeadmin.php?adm=surat"> <span class=" glyphicon glyphicon-circle-arrow-left"></span> Kembali</a>
	</div>
</div>
<?php
	}elseif($_SESSION["level"] == "petugas"){
?>
<?php
	$query_nik = "select * from penduduk where nik = '".$ViewNik."'";
	$result = mysql_query($query_nik);
	$dataUser = mysql_fetch_assoc($result);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		Petugas - Berikut Detail Penduduk dari NIK <?php echo $dataUser["nik"]; ?> :
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
		<p>&nbsp;</p>
		<a class="btn btn-warning" href="homeadmin.php?ptgs=surat"> <span class=" glyphicon glyphicon-circle-arrow-left"></span> Kembali</a>
	</div>
</div>

<?php
	}
?>