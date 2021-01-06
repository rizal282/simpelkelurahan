<div class="panel panel-primary">
	<div class="panel-heading">
		Data Surat Anda
	</div>
	<div class="panel-body">
		<?php
			$halaman = 5;
			$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
			$sql_surat = "SELECT * FROM surat WHERE nik = '".$_SESSION["nik"]."'";
			$get_surat = mysql_query($sql_surat);
			$count_surat = mysql_num_rows($get_surat);
			$pages = ceil($count_surat/$halaman);
			$sql = mysql_query("SELECT * FROM surat WHERE nik = '".$_SESSION["nik"]."' LIMIT $mulai, $halaman")or die(mysql_error);
  			$no =$mulai+1;

			if($count_surat == 0){
		?>
		<div class="alert alert-warning">TIDAK ADA PENGAJUAN SURAT</div>
		<?php
			}else{
				$no = 1;
		?>
			<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr>
					<td>No</td>
					<td>NIK</td>
					<td>No Surat</td>
					<td>Nama Surat</td>
					<td>Keperluan</td>
					<td style="text-align: center;" >Status</td>
					<td style="text-align: center;" >Aksi</td>
				</tr>
			<?php
				while($datasurat_v = mysql_fetch_array($sql)){
			?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $datasurat_v["nik"]; ?></td>
					<td><?php echo $datasurat_v["id_surat"]; ?></td>
					<td><?php echo $datasurat_v["nama_surat"]; ?></td>
					<td><?php echo $datasurat_v["keperluan_surat"]; ?></td>
					<td><?php echo $datasurat_v["vrf_lurah"]; ?></td>
					<td>
						<?php 
							if($datasurat_v["vrf_lurah"] == ''){
								echo "Belum Bisa di Cetak!";
							}else{
								if($datasurat_v["sts_print"] == 'Tercetak'){
									echo '<a class="btn btn-success" href="javascript:void(0)" disabled><span class="glyphicon glyphicon-ok"></span> Sudah Di Cetak </a>';
								}else{
									echo '<a target="_blank" class="btn btn-primary" href="print_surat.php?print='.strtolower($datasurat_v["jenis_surat"]).'&idSurat='.$datasurat_v["id_surat"].'&po=print_out"> <span class="glyphicon glyphicon-print"></span> Print Surat</a>';
								}
							}
						?>
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

							    <li><a href="?v_status=cek&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

						  <?php  } ?>
						 		</ul>
							</nav>
						</div>
							    
		<?php
			}
		?>
	</div>
</div>
