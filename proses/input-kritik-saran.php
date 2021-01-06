<?php
include 'koneksi.php';
error_reporting(0);
if(isset($_POST["btn-save"])){
	$nik = $_POST["nik"];
	$ks = $_POST["txt-ks"];
	$kps = $_POST["kps"];

	if(!empty($nik)&& !empty($ks) && !empty($kps)){	
		$sql = "insert into kritik_saran values('','".$nik."','".$ks."','".date("Y-m-d")."','','".$kps."')";

		mysql_query($sql);

		echo '<div class="alert alert-info">Kritik dan Saran Anda sudah dikirim</div>';
	}else{
		echo '<div class="alert alert-warning">Harus Diisi</div>';
	}
}
?>