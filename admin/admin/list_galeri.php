<div class="container-fluid">
	<?php
		$sql = "SELECT * FROM galeri";
		$result = mysql_query($sql);
		while($rowsGaleri = mysql_fetch_array($result)){
			extract($rowsGaleri);
	?>
		
		<div class="col-lg-4">
			<div class="thumbnail">
		      <img src="../assets/galeri_desa/<?php echo $foto; ?>" alt="..." class="img-rounded" width="500" height="500">
		      <div class="caption">
		        <h3><?php echo $deskripsi; ?></h3>
		      </div>
		     
		       <a class="btn btn-danger" href="admin/hapusgalerifoto.php?rmv=<?php echo $id_galeri; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
		    </div>
		</div>

	<?php
		}
	?>



</div>