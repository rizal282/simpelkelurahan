<?php
if(isset($_POST["btn-save"])){
	//definisi variabel
	$namafoto = $_FILES["foto"]["name"];
	$typefoto = $_FILES["foto"]["type"];
	$sizefoto = $_FILES["foto"]["size"];
	$tempfoto = $_FILES["foto"]["tmp_name"];

	$deskripsi = $_POST["deskripsi"];
	//$kategori = $_POST["kategori"];

	//definisi lokasi foto disimpan
	$lokasi = "../assets/galeri_desa/";

	//definisi id session
	$idadm = $_SESSION["id_admin"];

	//validating form
	if(!empty($namafoto)){
		if($typefoto == "image/jpg" || $typefoto == "image/jpeg" || $typefoto == "image/png"){
			if(!empty($deskripsi)){
				//if(!empty($kategori)){
					$newnamefoto = date("Ymdhis").$namafoto;

					$sql = "insert into galeri values('','".$idadm."','".$newnamefoto."','".$deskripsi."','".date("Y-m-d")."')";

					move_uploaded_file($tempfoto, $lokasi.$newnamefoto);
					mysql_query($sql);

					echo '<div class="alert alert-success">Foto Baru Sudah Disimpan</div>';
				//}else{
					//echo '<div class="alert alert-danger">Kategori Belum Dipilih</div>';
				//}
			}else{
				echo '<div class="alert alert-danger">Deskripsi Belum Diisi</div>';
			}
		}else{
			echo '<div class="alert alert-danger">Jenis Foto Tidak Sesuai. Harus JPEG atau PNG.</div>';
		}
	}else{
		echo '<div class="alert alert-danger">Foto Belum Dimasukkan</div>';
	}

}
?>