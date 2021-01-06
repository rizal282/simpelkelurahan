<?php
	if(isset($_POST["btn-save"])){
		$_SESSION["nik"]=$nik = $_POST["nik"];
		$_SESSION["nm_leng"]=$nm_leng = ucwords($_POST["nm_leng"]);
		$_SESSION["tmp_lahir"]=$tmp_lahir = ucfirst($_POST["tmp_lahir"]);
		$_SESSION["tgl_lahir"]= $tgl_lahir = date("Y-m-d", strtotime($_POST["tgl_lahir"]));
		$_SESSION["jk"] =$jk = ucfirst($_POST["jk"]) ;
		$_SESSION["status"] =$status = ucwords($_POST["status"]);
		$_SESSION["alamat"]= $alamat = ucwords($_POST["alamat"]);
		$_SESSION["rt"]=$rt = $_POST["rt"];
		$_SESSION["rw"]=$rw = $_POST["rw"];
		$_SESSION["kelurahan"]= $kelurahan = ucwords($_POST["kelurahan"]);
		$_SESSION["kecamatan"]=$kecamatan = ucwords($_POST["kecamatan"]);
		$_SESSION["kab"] =$kab = ucwords($_POST["kab"]);
		$_SESSION["agama"] =$agama = ucwords($_POST["agama"]);
		$_SESSION["bangsa"] =$bangsa = ucwords($_POST["bangsa"]);
		$_SESSION["pekerjaan"]=$pekerjaan = ucwords($_POST["pekerjaan"]);
		$_SESSION["pass"]=$pass = $_POST["pass"];

		//setting session
		$_SESSION["nik"]=$nik;
		$_SESSION["nm_leng"]=$nm_leng;
		$_SESSION["tmp_lahir"]=$tmp_lahir;
		$_SESSION["tgl_lahir"]= $tgl_lahir;
		$_SESSION["jk"] =$jk;
		$_SESSION["status"] =$status;
		$_SESSION["alamat"]= $alamat;
		$_SESSION["rt"]=$rt;
		$_SESSION["rw"]=$rw;
		$_SESSION["kelurahan"]= $kelurahan;
		$_SESSION["kecamatan"]=$kecamatan;
		$_SESSION["kab"] =$kab;
		$_SESSION["agama"] =$agama;
		$_SESSION["bangsa"] =$bangsa;
		$_SESSION["pekerjaan"]=$pekerjaan;
		$_SESSION["pass"]=$pass;

		//$limit= 16;

		if(!empty($nik) &&!empty($nm_leng) &&!empty ($tmp_lahir) && !empty($tgl_lahir) && !empty($jk) && !empty ($status) && !empty ($alamat) && !empty ($rt) && !empty($rw) && !empty($kelurahan) && !empty ($kecamatan) && !empty ($kab) && !empty ($agama) && !empty ($bangsa) && !empty ($pekerjaan) && !empty ($pass)){
		if(is_numeric($nik)){

				$sql = "insert into penduduk values('".$nik."','".$nm_leng."','".$tmp_lahir."','".$tgl_lahir."','".$jk."','".$status."','".$alamat."','".$rt."','".$rw."','".$kelurahan."','".$kecamatan."','".$kab."','".$agama."','".$bangsa."','".$pekerjaan."','".$pass."')";
				
				mysql_query($sql);

				unset($_SESSION["nik"]);
				unset($_SESSION["nm_leng"]);
				unset($_SESSION["tmp_lahir"]);
				unset($_SESSION["tgl_lahir"]);	
				unset($_SESSION["jk"]);
				unset($_SESSION["status"]); 
				unset($_SESSION["alamat"]);
				unset($_SESSION["rt"]);
				unset($_SESSION["rw"]);
				unset($_SESSION["kelurahan"]);
				unset($_SESSION["kecamatan"]);
				unset($_SESSION["kab"]);
				unset($_SESSION["agama"]);
				unset($_SESSION["bangsa"]);
				unset($_SESSION["pekerjaan"]);
				unset($_SESSION["pass"]);


				echo '<div class="alert alert-success">Data Penduduk Baru Telah Disimpan</div>';
			}else{
				echo '<script>alert("NIK harus Berupa Angka!!");</script>';
			}
			
		}else{
			echo '<script>alert("Form Harus Disi!!");</script>';
		}
		

	}

?>