<?php
	session_start();

	include "../proses/koneksi.php";

	if($_SESSION["id_admin"] && $_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"]){

		if(isset($_POST["btn-proses-edit-pdk"])){
			$nik = $_POST["nik"];
			$nm_leng = ucwords($_POST["nm_leng"]);
			$tmp_lahir = ucfirst($_POST["tmp_lahir"]);
			$tgl_lahir = date("Y-m-d", strtotime($_POST["tgl_lahir"]));
			$jk = ucfirst($_POST["jk"]) ;
			$status = ucwords($_POST["status"]);
			$alamat = ucwords($_POST["alamat"]);
			$rt = $_POST["rt"];
			$rw = $_POST["rw"];
			$kelurahan = ucwords($_POST["kelurahan"]);
			$kecamatan = ucwords($_POST["kecamatan"]);
			$kab = ucwords($_POST["kab"]);
			$agama = ucwords($_POST["agama"]);
			$bangsa = ucwords($_POST["bangsa"]);
			$pekerjaan = ucwords($_POST["pekerjaan"]);
			$pass = $_POST["pass"];

			$sql = "update penduduk set nama = '".$nm_leng."', tempat_lahir = '".$tmp_lahir."', tanggal_lahir = '".$tgl_lahir."', j_kelamin = '".$jk."', status ='".$status."', alamat = '".$alamat."', rt = '".$rt."', rw ='".$rw."', kelurahan = '".$kelurahan."', kecamatan = '".$kecamatan."', kabupaten = '".$kab."', agama = '".$agama."', bangsa = '".$bangsa."', pekerjaan = '".$pekerjaan."', password = '".$pass."' where nik = '".$nik."'";

			$query= mysql_query($sql) or die (mysql_error());
			if ($query) {
				
				if($_SESSION["level"] == "petugas"){
					//header("location:homeadmin.php?ptgs=lihat_Pdk");
					header('location:http://localhost/simpel/admin/homeadmin.php?ptgs=lihat_Pdk');
				}else{
					//header("location:homeadmin.php?adm=penduduk");
					header('location:http://localhost/simpel/admin/homeadmin.php?adm=penduduk');
				}
			}else{
				echo '<div class="alert alert-success"> Data Gagal</div>';
			} 
			

		}
	}
?>
