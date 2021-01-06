<div class="panel panel-primary">
						<div class="panel-heading">
							Data Pengajuan Surat dari Warga
						</div>
						<div class="panel-body">
							<?php
								$halaman = 5;
								$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
								$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
								$sql_surat = "SELECT * FROM penduduk INNER JOIN surat ON penduduk.nik = surat.nik INNER JOIN admin ON surat.id_admin = admin.id_admin WHERE surat.vrf_lurah = ''";
								$get_surat = mysql_query($sql_surat);
								$count_surat = mysql_num_rows($get_surat);
								$pages = ceil($count_surat/$halaman);
								$sql = mysql_query("SELECT * FROM penduduk INNER JOIN surat ON penduduk.nik = surat.nik INNER JOIN admin ON surat.id_admin = admin.id_admin WHERE surat.vrf_lurah = '' LIMIT $mulai, $halaman")or die(mysql_error);
							  	$no =$mulai+1;

								if($count_surat == 0){
							?>
							<div class="alert alert-warning">TIDAK ADA PENGAJUAN SURAT</div>
							<?php
								}else{
									$no = 1;
							?>
								<table class="table table-striped">
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
										<td>Dicek Oleh</td>
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
										<td><img alt="<?php echo $datasurat_v['foto_1']; ?>" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_1']; ?>" width ="90" height="90" ></td>
										<td><img alt="<?php echo $datasurat_v['foto_2']; ?>" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_2']; ?>" width ="90" height="90"></td>
										<td><img alt="<?php echo $datasurat_v['foto_3']; ?>" class="img-rounded" src="../assets/uploads/<?php echo $datasurat_v['foto_3']; ?>" width ="90" height="90"></td>
										<td><?php echo $datasurat_v["nama_admin"]; ?></td>
										<td>
											<?php
												if(isset($_POST["btn-v"])){
													$inp_verifikasi = $_POST["inp_verifikasi"];

													$sql_verifikasi = "update surat set vrf_lurah = 'Sudah Terverifikasi' where id_surat = '".$inp_verifikasi."'";

													mysql_query($sql_verifikasi);

													header("location:homeadmin.php?lurah=surat");
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

						 			 ?>

							    <li><a href="?lurah=surat&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

						  <?php  } ?>
						 		</ul>
							</nav>
						</div>
							<?php
								}
							?>
						</div>
					</div>

  			  <?php
  			  	
  			  ?>