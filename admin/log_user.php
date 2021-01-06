<?php
	$halaman = 5;
	$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	$query = "SELECT * FROM penduduk INNER JOIN surat ON penduduk.nik = surat.nik WHERE surat.sts_print = 'Tercetak'";
	$result = mysql_query($query);
	$countData = mysql_num_rows($result);
	$pages = ceil($countData/$halaman);
	$sql = mysql_query("SELECT * FROM penduduk INNER JOIN surat ON penduduk.nik = surat.nik WHERE surat.sts_print = 'Tercetak' LIMIT $mulai, $halaman")or die(mysql_error);
  	$no =$mulai+1;

	//hitung Data surat yang belum verifikasi
	if($countData == 0){
		echo '<div class="alert alert-info">Tidak Ada Data Surat</div>';
	}else{
		$no = 1;
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		Surat Pengajuan yang Sudah di Cetak
	</div>
	<div class="panel-body">
<table class="table table-striped ">
				<tr>
					<td>No</td>
					<td>NIK</td>
					<td>Nama Warga</td>
					<td>No Surat</td>
					<td>Nama Surat</td>
					<td>Keperluan</td>
					<td>Berkas 1</td>
					<td>Berkas 2</td>
					<td>Berkas 3</td>
					<td>Ket</td>
					<td>Action</td>
				</tr>
			<?php
				while($datasurat_v = mysql_fetch_array($sql)){
			?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $datasurat_v["nik"]; ?></td>
					<td><?php echo ucwords($datasurat_v["nama"]); ?></td>
					<td><?php echo $datasurat_v["id_surat"]; ?></td>
					<td><?php echo $datasurat_v["nama_surat"]; ?></td>
					<td><?php echo $datasurat_v["keperluan_surat"]; ?></td>
					<td><img alt="Foto 1" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_1']; ?>" width ="90" height="90"></td>
					<td><img alt="Foto 2" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_2']; ?>" width ="90" height="90"></td>
					<td><img alt="Foto 3" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_3']; ?>" width ="90" height="90"></td>
					<td>
						<?php echo $datasurat_v['sts_print']; ?>
					</td>
					<td>
						<?php
							if(isset($_POST["btn-v"])){
								$inp_verifikasi = $_POST["inp_verifikasi"];

								$sql_verifikasi = "delete from surat where id_surat = '".$inp_verifikasi."'";

								mysql_query($sql_verifikasi);

								echo '<script>alert("Surat sudah dihapus!")</script>';
							}
						?>
						<form method="post">
							<input type="hidden" name="inp_verifikasi" value="<?php echo $datasurat_v["id_surat"]; ?>">
							<input class="btn btn-danger" type="submit" name="btn-v" value="Hapus">
						</form>
					</td>
				</tr>

			<?php
					$no ++;
				} 
			?>
			</table>
			<div class="">
				<nav aria-label="Page navigation">
				<ul class="pagination">
				 <?php 
						  	for ($i=1; $i<=$pages ; $i++){ 

						  ?>

							    <li><a href="?adm=log_user&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

						  <?php  } ?>
						 		</ul>
							</nav>
						</div>
							    
			</div>
		<?php
			}
		?>