<?php 
if ($_SESSION["nik"] && $_SESSION["nama"] && $_SESSION["password"]) {
  	$sql = "SELECT * FROM penduduk WHERE nik = '".$_SESSION["nik"]."'";
  	$getSQL = mysql_query($sql);
  	$dataUser = mysql_fetch_array($getSQL);

  	//memanggil data di tabel surat
  	$sqlSurat = "select * from surat where nik = '".$_SESSION["nik"]."' and jenis_surat = 'SKIR' order by id_surat desc";
  	$getDataSurat = mysql_query($sqlSurat);
  	$dataSurat = mysql_fetch_array($getDataSurat);

  	if(isset($_GET["view"])){
  		$view = $_GET["view"];

  		if($view == "v_surat"){
  			include 'skir.php';
  		}
  	}else{
  		include 'page_form_skir.php';
  	}
 }
?>
