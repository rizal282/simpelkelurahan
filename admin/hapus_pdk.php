<?php
	session_start();
	
	include "../proses/koneksi.php";

	if($_SESSION["id_admin"] && $_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"]){

			if(isset($_GET["ed"])){
				$ed = $_GET["ed"];

				$sql = "delete from penduduk where nik = '".$ed."'";

				mysql_query($sql);

				if($_SESSION["level"] == "petugas"){
					header("location:homeadmin.php?ptgs=lihat_Pdk");
				}else{
					header("location:homeadmin.php?adm=penduduk");
				}
			}

	}

	
?>