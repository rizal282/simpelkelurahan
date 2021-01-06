<?php
	if(isset($_POST["btn-save"])){
		$nik = $_POST["edit_nik"];
		$nm_leng = ucwords($_POST["edit_nm_leng"]);
		$tmp_lahir = ucfirst($_POST["edit_tmp_lahir"]);
		$tgl_lahir = date("Y-m-d", strtotime($_POST["edit_tgl_lahir"]));
		$jk = ucfirst($_POST["edit_jk"]) ;
		$status = ucwords($_POST["edit_status"]);
		$alamat = ucwords($_POST["edit_alamat"]);
		$rt = $_POST["edit_rt"];
		$rw = $_POST["edit_rw"];
		$kelurahan = ucwords($_POST["edit_kelurahan"]);
		$kecamatan = ucwords($_POST["edit_kecamatan"]);
		$kab = ucwords($_POST["edit_kab"]);
		$agama = ucwords($_POST["edit_agama"]);
		$bangsa = ucwords($_POST["edit_bangsa"]);
		$pekerjaan = ucwords($_POST["edit_pekerjaan"]);
		$pass = $_POST["edit_pass"];

		$sql = "update penduduk set nama = '".$nm_leng."', tempat_lahir = '".$tmp_lahir."', tanggal_lahir = '".$tgl_lahir."', j_kelamin = '".$jk."', status = '".$status."', alamat = '".$alamat."', rt = '".$rt."', rw = '".$rw."', kelurahan = '".$kelurahan."', kecamatan = '".$kecamatan."',kabupaten='".$kab."',agama='".$agama."',bangsa='".$bangsa."',pekerjaan='".$pekerjaan."',password='".$pass."' where nik = '".$nik."' ";
		mysql_query($sql);

		echo '<div class="alert alert-success">Data Penduduk Telah Dirubah</div>';
	}

?>