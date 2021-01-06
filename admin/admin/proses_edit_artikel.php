<?php 
if(isset($_POST["btn-update"])){
	$id = $_POST["id_berita"];
	$judul = $_POST["judul"];
	$kat = $_POST["kategori"];
	$des = $_POST["des"];
	$berita = $_POST["berita"];
	$nama_foto = $_FILES["foto"]["name"];
	$type = $_FILES["foto"]["type"];
	$size = $_FILES["foto"]["size"];
	$temp = $_FILES["foto"]["tmp_name"];
	$location = "../../img/";

	//$sqlupdate = "update tabel_berita set judul = '".$judul."', deskripsi_singkat = '".$des."', berita = '".$berita."', kategori = '".$kat."', foto = '".$nama_foto."' where id_berita = '".$id."'";
	//move_uploaded_file($temp,$location.$nama_foto);
	//mysql_query($sqlupdate);
	//$report = "Data Sudah Diperbarui";
	//header('location:http://localhost/simpel/admin/homeadmin.php?adm=artikel&reportEdit='.$report);

	if(!empty($nama_foto)){
		$new_nama_foto = date("YmdHis").$nama_foto;
		$sqlupdate = "update tabel_berita set judul = '".$judul."', deskripsi_singkat = '".$des."', berita = '".$berita."', kategori = '".$kat."', foto = '".$new_nama_foto."' where id_berita = '".$id."'";
		move_uploaded_file($temp,$location.$new_nama_foto);
		mysql_query($sqlupdate);
		$report = "Data Sudah Diperbarui";
		header('location:http://localhost/simpel/admin/homeadmin.php?adm=artikel&reportEdit='.$report);
		
	}else{
		$sqlupdate = "update tabel_berita set judul = '".$judul."', deskripsi_singkat = '".$des."', berita = '".$berita."', kategori = '".$kat."' where id_berita = '".$id."'";
		//move_uploaded_file($temp,$location.$nama_foto);
		mysql_query($sqlupdate);
		$report = "Data Sudah Diperbarui";
		header('location:http://localhost/simpel/admin/homeadmin.php?adm=artikel&reportEdit='.$report);
	}

}
?>
