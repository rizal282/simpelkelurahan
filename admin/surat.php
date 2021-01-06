<?php
	ob_start();
	$halaman = 5;
	$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	$query = "SELECT * FROM penduduk INNER JOIN surat ON penduduk.nik = surat.nik WHERE surat.status = 'Belum Verifikasi'";
	$result = mysql_query($query);
	$countData = mysql_num_rows($result);
	$pages = ceil($countData/$halaman);
	$sql = mysql_query("SELECT * FROM penduduk INNER JOIN surat ON penduduk.nik = surat.nik WHERE surat.status = 'Belum Verifikasi' LIMIT $mulai, $halaman")or die(mysql_error);
  	$no =$mulai+1;


	//hitung Data surat yang belum verifikasi
	if($countData == 0){
		echo '<div class="alert alert-info">Tidak Ada Data Surat</div>';
	}else{
		$no = 1;
?>
	
			<?php
				if(isset($_GET["photoId_1"])){
					$photoId_1 = $_GET["photoId_1"];
					$query_photo = "select foto_1 from surat where id_surat = '".$photoId_1."'";
					$result = mysql_query($query_photo);
					$row_photo = mysql_fetch_array($result);
			?>

				<img alt="<?php echo $row_photo['foto_1']; ?>" class="img-thumbnail" src="../assets/uploads/<?php echo $row_photo['foto_1']; ?>"><br>
				<p>&nbsp;</p>
				<?php
					if($_SESSION["level"] == "admin"){
				?>
					<a class="btn btn-warning" href="homeadmin.php?adm=surat"><span class=" glyphicon glyphicon-arrow-left"></span> Kembali</a>

				<?php
					}elseif ($_SESSION["level"] == "petugas") {
				?>

					<a class="btn btn-warning" href="homeadmin.php?ptgs=surat"><span class=" glyphicon glyphicon-arrow-left"></span> Kembali</a>
				<?php
					}
				?>
				

			<?php

				}elseif(isset($_GET["ViewNik"])){

					$ViewNik = $_GET["ViewNik"];
					include "detail_nik.php";

				}elseif(isset($_GET["photoId_2"])){
					$photoId_2 = $_GET["photoId_2"];
					$query_photo = "select foto_2 from surat where id_surat = '".$photoId_2."'";
					$result = mysql_query($query_photo);
					$row_photo = mysql_fetch_array($result);
			?>
				<img alt="<?php echo $row_photo['foto_2']; ?>" class="img-thumbnail" src="../assets/uploads/<?php echo $row_photo['foto_2']; ?>"><br>
				<p>&nbsp;</p>
				<?php
					if($_SESSION["level"] == "admin"){
				?>
					<a class="btn btn-warning" href="homeadmin.php?adm=surat"><span class=" glyphicon glyphicon-arrow-left"></span> Kembali</a>

				<?php
					}elseif ($_SESSION["level"] == "petugas") {
				?>

					<a class="btn btn-warning" href="homeadmin.php?ptgs=surat"><span class=" glyphicon glyphicon-arrow-left"></span> Kembali</a>
				<?php
					}
				?>

			<?php
				}elseif(isset($_GET["photoId_3"])){
					$photoId_3 = $_GET["photoId_3"];
					$query_photo = "select foto_3 from surat where id_surat = '".$photoId_3."'";
					$result = mysql_query($query_photo);
					$row_photo = mysql_fetch_array($result);
			?>

				<img alt="<?php echo $row_photo['foto_3']; ?>" class="img-thumbnail" src="../assets/uploads/<?php echo $row_photo['foto_3']; ?>"><br>
				<p>&nbsp;</p>
				<a class="btn btn-warning" href="homeadmin.php?adm=surat"><span class=" glyphicon glyphicon-arrow-left"></span>Kembali</a>

			<?php
				}else{
			?>
			  <div class="col-md-20 content">
  			  <div class="panel panel-primary">
			  <div class="panel-heading">
		Data Pengajuan Surat dari Warga
	</div>
	<div class="panel-body">
	<div class="table-responsive">
				<table class=" table table-striped table-bordered">							
							<th>No</th>
							<th>NIK</th>
							<th>Nama Warga</th>
							<th>No Surat</th>
							<th style="text-align: center;">Nama Surat</th>
							<th>Keperluan</th>
							<th>Berkas 1</th>
							<th>Berkas 2</th>
							<th>Berkas 3</th>
							<th style="text-align: center;">Action</th>
					<?php
						while($datasurat_v = mysql_fetch_array($sql)){
					?>
						<tr>
							<td><?php echo $no; ?></td>
							<td>
								<?php
									if($_SESSION["level"] == "admin"){
								?>
									<a title="Lihat Data <?php echo $datasurat_v["nik"]; ?>" href="homeadmin.php?adm=surat&ViewNik=<?php echo $datasurat_v["nik"]; ?>"><?php echo $datasurat_v["nik"]; ?></a>

								<?php
									}elseif ($_SESSION["level"] == "petugas") {
								?>

									<a title="Lihat Data <?php echo $datasurat_v["nik"]; ?>" href="homeadmin.php?ptgs=surat&ViewNik=<?php echo $datasurat_v["nik"]; ?>"><?php echo $datasurat_v["nik"]; ?></a>
								<?php
									}
								?>
							</td>
							<td><?php echo ucwords($datasurat_v["nama"]); ?></td>
							<td><?php echo $datasurat_v["id_surat"]; ?></td>
							<td><?php echo $datasurat_v["nama_surat"]; ?></td>
							<td><?php echo $datasurat_v["keperluan_surat"]; ?></td>
							<td>
								<?php
									if($_SESSION["level"] == "admin"){
								?>

									<a href="homeadmin.php?adm=surat&photoId_1=<?php echo $datasurat_v["id_surat"]; ?>" title="Lihat Foto"><img alt="Foto 1" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_1']; ?>" width="90" height="90" ></a>

								<?php
									}elseif($_SESSION["level"] == "petugas"){
								?>

									<a href="homeadmin.php?ptgs=surat&photoId_1=<?php echo $datasurat_v["id_surat"]; ?>" title="Lihat Foto"><img alt="Foto 1" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_1']; ?>" width="90" height="90" ></a>

								<?php
									}
								?>
							</td>
							<td>
								<?php
									if($_SESSION["level"] == "admin"){
								?>

									<a href="homeadmin.php?adm=surat&photoId_2=<?php echo $datasurat_v["id_surat"]; ?>" title="Lihat Foto"><img alt="Foto 2" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_2']; ?>" width="90" height="90" ></a>

								<?php
									}elseif($_SESSION["level"] == "petugas"){
								?>

									<a href="homeadmin.php?ptgs=surat&photoId_2=<?php echo $datasurat_v["id_surat"]; ?>" title="Lihat Foto"><img alt="Foto 2" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_2']; ?>" width="90" height="90" ></a>

								<?php
									}
								?>
							</td>
							<td>
								<?php
									if($_SESSION["level"] == "admin"){
								?>

									<a href="homeadmin.php?adm=surat&photoId_3=<?php echo $datasurat_v["id_surat"]; ?>" title="Lihat Foto"><img alt="Foto 3" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_3']; ?>" width="90" height="90" ></a>

								<?php
									}elseif($_SESSION["level"] == "petugas"){
								?>

									<a href="homeadmin.php?ptgs=surat&photoId_3=<?php echo $datasurat_v["id_surat"]; ?>" title="Lihat Foto"><img alt="Foto 3" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_3']; ?>" width="90" height="90" ></a>

								<?php
									}
								?>
								<a title="Lihat Foto" href="homeadmin.php?adm=surat&photoId_3=<?php echo $datasurat_v["id_surat"]; ?>"><img alt="<?php echo $datasurat_v['foto_3']; ?>" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_3']; ?>" width="90" height="90"></a>
							</td>
							<td>
								<?php
									if(isset($_POST["btn-v"])){
										if ($_SESSION['level']=='admin') {
											$inp_verifikasi = $_POST["inp_verifikasi"];

											$sql_verifikasi = "update surat set id_admin = '".$_SESSION["id_admin"]."', status = 'Sudah Terverifikasi', tgl_verifikasi = '".date('Y-m-d')."' where id_surat = '".$inp_verifikasi."'";

											mysql_query($sql_verifikasi);

											header("location:homeadmin.php?adm=surat");
										}else{
											$inp_verifikasi = $_POST["inp_verifikasi"];

											$sql_verifikasi = "update surat set id_admin = '".$_SESSION["id_admin"]."', status = 'Sudah Terverifikasi', tgl_verifikasi = '".date('Y-m-d')."' where id_surat = '".$inp_verifikasi."'";

											mysql_query($sql_verifikasi);

											header("location:homeadmin.php?ptgs=surat");
										}

										//echo "<script>window.location.href('homeadmin.php?ptgs=surat')</script>";
									}
								?>
								<form method="post">
									<input type="hidden" name="inp_verifikasi" value="<?php echo $datasurat_v["id_surat"]; ?>">
									<button class="btn btn-danger" type="submit" name="btn-v"><span class=" glyphicon glyphicon-check"></span> Verifikasi </button>
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
						  		if($_SESSION["level"] == "admin"){
						  	?>

						  		<li><a href="?adm=surat&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						  	<?php
						  		}else{
						  ?>

							    <li><a href="?ptgs=surat&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

						  <?php } } ?>
						 		</ul>
							</nav>
						</div>
						</div>
						</div>


			<?php
				}

			?>

		<?php
			}

			ob_flush();
		?>