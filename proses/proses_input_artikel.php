<?php
if(isset($_POST["btn-save"])){
	$judul = $_POST["judul"];
	$kat = $_POST["kategori"];
	$des = $_POST["des"];
	$berita = $_POST["berita"];
	$nama_foto = date('YmdHis').$_FILES["foto"]["name"];
	$type = $_FILES["foto"]["type"];
	$size = $_FILES["foto"]["size"];
	$temp = $_FILES["foto"]["tmp_name"];

	$location = "../img/";
	$size_file = 30000000;

	if(!empty($judul)){
		if(!empty($des)){
			if(!empty($berita)){
				if(!empty($nama_foto)){
						if($size <= $size_file){
							if(move_uploaded_file($temp,$location.$nama_foto)){
								$sqlArtikelInput = "insert into tabel_berita values('','".$_SESSION["id_admin"]."','".date('Y-m-d H:i:s')."','$judul','$des','$berita','$kat','$nama_foto')";

								mysql_query($sqlArtikelInput);

								echo '<div class="alert alert-success">Artikel Sudah DiPosting</div>';
							}else{
								echo "Gagal";
							}
						}else{
							echo '<div class="alert alert-warning">Ukuran File Harus Kurang dari 3 MB</div>';
						}
				}else{
					echo '<div class="alert alert-warning">File Belum Terisi</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Isi Berita Belum Terisi</div>';
			}
		}else{
			echo '<div class="alert alert-warning">Deskrispsi Belum Terisi</div>';
		}
	}else{
		echo '<div class="alert alert-warning">Judul Belum Terisi</div>';
	}
}
?>