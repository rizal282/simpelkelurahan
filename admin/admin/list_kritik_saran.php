<div class="panel panel-primary">
		<div class="panel-heading">
			Kritik dan Saran Warga
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<tr>
					<td>No</td>
					<td>NIK</td>
					<td>Nama</td>
					<td>Kritik Saran</td>
					<td>Kepuasan</td>
					<td>Tanggal</td>
					<td>Respon</td>
					<td>Ket</td>
				</tr>
			<?php
				$no = 1;
				while($rowsdata = mysql_fetch_array($sql)){
					extract($rowsdata);
			?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $nik; ?></td>
					<td><?php echo $nama; ?></td>
					<td><?php echo $kritik_saran; ?></td>
					<td><?php echo $kepuasan_warga; ?></td>
					<td><?php echo date("d-m-Y", strtotime($tanggal)); ?></td>
					<td>
						<?php
							if($respon == ''){
								if($_SESSION["level"] == "petugas"){
						?>
							<a class="btn btn-warning" href="?ptgs=ks&respons=<?php echo $id_ks; ?>"><span class="	glyphicon glyphicon-pencil"></span> Respon</a>

						<?php
								}else{
						?>
							<a class="btn btn-warning" href="?adm=kritiksaran&respons=<?php echo $id_ks; ?>"><span class="	glyphicon glyphicon-pencil"></span> Respon</a>
						<?php
								}
							}else{
								echo $respon;
							}
						?>
					</td>
					<td>
						<?php
							if($respon == ''){
						?>
							<span title="Menunggu Tanggapan" class="glyphicon glyphicon-dashboard"></span>
						<?php
							}else{
						?>
							<span title="Sudah Ditanggapi" class="glyphicon glyphicon-check"></span>
						<?php
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
						  		if($_SESSION["level"] == "admin"){
						  	?>

						  		<li><a href="?adm=kritiksaran&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						  	<?php
						  		}else{
						  ?>

							    <li><a href="?ptgs=ks&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

						  <?php } } ?>
						 		</ul>
							</nav>
						</div>
		</div>