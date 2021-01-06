<?php
	$halaman = 5;
	$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
	$sql = "select * from kritik_saran inner join penduduk on kritik_saran.nik = penduduk.nik";
	$result = mysql_query($sql);
	$countData = mysql_num_rows($result);
	$pages = ceil($countData/$halaman);
	$sql = mysql_query("select * from kritik_saran inner join penduduk on kritik_saran.nik = penduduk.nik LIMIT $mulai, $halaman")or die(mysql_error);
  	$no =$mulai+1;


	if($countData == 0){
?>
	<div class="alert alert-info">Tidak Ada Kritik atau Saran</div>
<?php
	}else{

		//cek jika ada get dari respons
		if(isset($_GET["respons"])){
			$respons = $_GET["respons"];

			if($respons == $_GET["respons"]){
				include 'admin/respons.php';
			}
		}else{
			include 'admin/list_kritik_saran.php';
		}

	}
?>