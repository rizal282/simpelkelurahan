	<?php
		include "../../proses/koneksi.php";
		
			if(isset($_GET["rmv"])){
				$rmv = $_GET["rmv"];

				$sql = "delete from galeri where id_galeri = '".$rmv."'";
				unlink('../assets/galeri_desa/'.$foto);
				mysql_query($sql);

				$glr = "Foto Sudah Dihapus";

				header('location:http://localhost/simpel/admin/homeadmin.php?adm=galeri&reportGlr='.$glr);
			}
		?>