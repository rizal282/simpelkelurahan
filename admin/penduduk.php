
<?php 
	if($_SESSION["level"] == "petugas"){
?>
	<a class="btn btn-primary" href="homeadmin.php?ptgs=lihat_Pdk&add=addPdk"><span class="glyphicon glyphicon-plus"></span>Tambah Penduduk </a>
<?php
	}else{
?>
	<a class="btn btn-primary" href="homeadmin.php?adm=penduduk&add=addPdk"><span class="glyphicon glyphicon-plus"></span>Tambah Penduduk </a>

<?php

?>
	<a class="btn btn-danger" href=""><span class="glyphicon glyphicon-eye-open"></span> Daftar Penduduk Baru </a>

<?php


	}
?>


<p>&nbsp;</p>
<div class="row">
	<div class="col-lg-offset-6 col-lg-6">
		<form class="form-inline" action="" method="post">
			<div class="form-group">
				<label>NIK : </label>
				<input type="text" name="cari-nik" class="form-control">
				<button name="btn-cari" class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-search"></span> Cari </button>
			</div>
		</form>
	</div>
</div>
<p>&nbsp;</p>
<div class="panel panel-primary">
	<div class="panel-heading">
		Data Penduduk
	</div>
	<div class="panel-body">
				<?php
				//$i = 0 + 1;
					if(isset($_GET["add"])){
							include "admin/tambah_penduduk.php";
						}elseif(isset($_POST["btn-edit-pdk"])){
							include "form_edit_nik.php";
						}elseif(isset($_POST["btn-cari"])){
							include "admin/hasil_cari_nik.php";
						}else{
							$halaman = 5;
						  	$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						  	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
							$query = "select * from penduduk";
							$result = mysql_query($query);
							$count_penduduk = mysql_num_rows($result);
							$pages = ceil($count_penduduk/$halaman);
							$sql = mysql_query("select * from penduduk LIMIT $mulai, $halaman")or die(mysql_error);
  							$no =$mulai+1;

							if($count_penduduk == 0){
								echo '<div class="alert alert-info" role="alert">Tidak Ada Data Penduduk</div>';
							}else{
					?>
						<div class="table-responsive">
						<table  class="table table-striped table-bordered">
						<tr>
						<thead>
						  <th>No</th>
						  <th style="text-align: center;">NIK</th>
						  <th>Nama</th>
						  <th style="text-align: center;">TTL</th>
						  <th style="text-align: center;">JK</th>
						  <th>Status</th>
						  <th>Alamat</th>
						  <th>Agama</th>
						  <th>Bangsa</th>
						  <th>Pekerjaan</th>
						  <th>Pass</th>
						  <th colspan="2" style="text-align: center;">Aksi</th>
						  </tr>
						  </thead>

						  <tbody>
						  <?php
						  	while($row_pdk = mysql_fetch_array($sql)){
						  ?>
						  	<tr>
						  		<td style="text-align: center;"><?php echo $no++; ?></td>
						  		<td><?php echo $row_pdk["nik"]; ?></td>
						  		<td><?php echo $row_pdk["nama"]; ?></td>
						  		<td><?php echo $row_pdk["tempat_lahir"].", ".$row_pdk["tanggal_lahir"]; ?></td>
						  		<td><?php echo $row_pdk["j_kelamin"]; ?></td>
						  		<td><?php echo $row_pdk["status"]; ?></td>
						  		<td><?php echo $row_pdk["alamat"]; ?></td>
						  		<td><?php echo $row_pdk["agama"]; ?></td>
						  		<td><?php echo $row_pdk["bangsa"]; ?></td>
						  		<td><?php echo $row_pdk["pekerjaan"]; ?></td>
						  		<td><?php echo $row_pdk["password"]; ?></td>
						  		<td>
						  			<form method="post">
						  				<input type="hidden" name="id_pdk" value="<?php echo $row_pdk["nik"]; ?>">
						  				<button type="submit" name="btn-edit-pdk" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</button>
						  			</form>
						  		</td>
						  		<td><a class="btn btn-danger" href="hapus_pdk.php?ed=<?php echo $row_pdk["nik"]; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a></td>
						  	</tr>

						  <?php
						      }
						    ?>
						</tbody>
						</table>

						<div class="">
							<nav aria-label="Page navigation">
							  <ul class="pagination">
							    
							  
						  <?php 
						  	for ($i=1; $i<=$pages ; $i++){ 
						  		if($_SESSION["level"] == "admin"){
						  	?>

						  		<li><a href="?adm=penduduk&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						  	<?php
						  		}else{
						  ?>

							    <li><a href="?ptgs=lihat_Pdk&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

						  <?php } } ?>
						 		</ul>
							</nav>
						</div>
					<?php
							}
						}
					?>

	</div>
</div>
