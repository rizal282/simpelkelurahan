<div class="box-galeri">
	<div class="container">
		<?php
			if(isset($_GET["see_photo"])){
				$see_photo = $_GET["see_photo"];

				$sql = "select * from galeri where id_galeri = '".$see_photo."'";
				$result = mysql_query($sql);
				$row = mysql_fetch_array($result);
				extract($row);
		?>
				<div class="col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">Galeri Foto Kelurahan</div>
						<div class="panel-body">
							<div class="thumbnail">
						      <img src="assets/galeri_desa/<?php echo $foto; ?>"   alt="..." class="img-rounded" width="430" height="450">
						      <div class="caption">
						        <h3><?php echo $deskripsi; ?></h3>
						      </div>
						      <a class="btn btn-danger" href="?home=beranda#galeri"><span class="	fa fa-mail-reply"> Kembali</a>
						    </div>
						</div>
					</div>
				</div>


		<?php
			}else{
		?>
			<h2 style="text-align: center; margin-bottom: 80px; font-size: 30px; color: white;">Galeri Foto Kelurahan Tegal Munjul</h4>

			<?php
				$sql = "SELECT * FROM galeri";
				$result = mysql_query($sql);

				while($rowsGaleri = mysql_fetch_array($result)){
					extract($rowsGaleri);
			?>
				<div class="col-lg-4">
					<div class="thumbnail">
				      <img src="assets/galeri_desa/<?php echo $foto; ?>" alt="..." class="img-rounded">
				      <div class="caption">
				        <h3><?php echo $deskripsi; ?></h3>
				      </div>
				      <a class="btn btn-primary" href="?main=galeri&see_photo=<?php echo $id_galeri; ?>"><span class="fa fa-image"></span>Lihat Foto</a>
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