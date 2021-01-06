<div class="panel panel-info">
	<div class="panel-heading">Galeri Foto Kelurahan Tegal Munjul</div>
	<div class="panel-body">
		<a class="btn btn-primary" href="?adm=galeri&newGallery=addGallery"><span class="glyphicon glyphicon-plus"></span> Foto</a>
		<p>

		<?php
			if(isset($_GET["reportGlr"])){
				echo '<div class="alert alert-info">'.$_GET["reportGlr"].'</div>';
			}
		?>



		<?php
			if(isset($_GET["newGallery"])){
				$newGallery = $_GET["newGallery"];

				if($newGallery == $_GET["newGallery"]){
					include 'admin/form_tambah_foto.php';
				}
			}else{
				include 'admin/list_galeri.php';
			}
		?>
	</div>
</div>