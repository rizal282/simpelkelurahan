<?php
	if(isset($_POST["tgp_ks"])){
		$id_ks = $_POST["id_ks"];
		$nik_ks = $_POST["nik_ks"];
		$tgp_ks = $_POST["tgp_ks"];

		if(!empty($tgp_ks)){
			$sql = "update kritik_saran set respon = '".$tgp_ks."' where id_ks = '".$id_ks."'";

			mysql_query($sql) or die(mysql_error());

			echo '<div class="alert alert-success">Anda Telah Menanggapi Kritik dan Saran dari NIK '.$nik_ks.'.</div>';
		}else{
			echo '<div class="alert alert-warning">Anda harus mengisi kolom tanggapan. Jika tidak, klik Kembali untuk membatalkan.</div>';
		}
	}

?>