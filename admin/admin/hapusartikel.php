<?php
include '../../proses/koneksi.php';

if($_GET["IDHapus"]){
	$idBerita = $_GET["IDHapus"];
	$sqlhapusartikel = "delete from tabel_berita where id_berita = '".$idBerita."'";

	$sql = "select foto from tabel_berita where id_berita = '".$idBerita."'";
	$result = mysql_query($sql);
	$data_foto = mysql_fetch_array($result);
	$folder = "../../img/".$data_foto["foto"];
	unlink($folder);
	mysql_query($sqlhapusartikel);

	//ganti url nya pakai www....
	header("location:http://localhost/simpel/admin/homeadmin.php?adm=artikel");
}

?>