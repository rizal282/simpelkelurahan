<div class="panel panel-primary">
	<div class="panel-heading">
	Artikel Berita
	</div>
	<div class="panel-body">
	<div class="col-md-6">
		<a href="?adm=artikel&new=artikel_baru" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Artikel</a>
		<p>&nbsp;</p>
	</div>
	<div class="col-md-6">
		<?php
			if(isset($_GET["reportEdit"])){
				echo $_GET["reportEdit"];
			}
		?>
	</div>
	<div class="col-md-12">
		<?php
			if(isset($_GET["new"])){
				if($_GET["new"] == "artikel_baru"){
					include 'form_artikel_baru.php';
				}
			}else{
		?>
				<?php
					$halaman = 2;
					$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					$sqlArtikel = "select * from tabel_berita";
					$getArtikel = mysql_query($sqlArtikel);
					$countArtikel = mysql_num_rows($getArtikel);
					$pages = ceil($countArtikel/$halaman);
					$sql = mysql_query("select * from tabel_berita LIMIT $mulai, $halaman")or die(mysql_error);
  					$no =$mulai+1;

					if($countArtikel == 0){
						echo '<div class="alert alert-info">Tidak Ada Berita</div>';
					}else{
				?>
				<div class="table-responsive">
				</div>
				<table class="table table-striped">
					<tr>
						<td align="center">No</td>
						<td>Tanggal</td>
						<td>User No</td>
						<td>Judul</td>
						<td>Deskripsi</td>
						<td>Isi</td>
						<td>Foto</td>
						<td>Kategori</td>
						<td colspan="2" style="text-align: center;">Aksi</td>
					</tr>
				<?php
					$no = 1;
					while($dataArtikel = mysql_fetch_array($sql)){
				?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $dataArtikel["waktu"]; ?></td>
						<td><?php echo $dataArtikel["id_admin"]; ?></td>
						<td><?php echo $dataArtikel["judul"]; ?></td>
						<td><?php echo $dataArtikel["deskripsi_singkat"]; ?></td>
						<td><?php echo $dataArtikel["berita"]; ?></td>
						<td><img src="../img/<?php echo $dataArtikel["foto"]; ?>" width="50" height="50"></td>
						<td><?php echo $dataArtikel["kategori"]; ?></td>
						<td><a href="admin/editartikel.php?IDEdit=<?php echo $dataArtikel['id_berita'];?>" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil">Ubah</span></a></td>
						<td><a href="admin/hapusartikel.php?IDHapus=<?php echo $dataArtikel['id_berita'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus Data?')"> <span class="glyphicon glyphicon-trash">Hapus</a></span>
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

							    <li><a href="?adm=artikel&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

						  <?php  } ?>
						 		</ul>
							</nav>
						</div>
							    
				</div>
				<?php
					}

				?>
		<?php
			}
		?>
	</div>
</div>

