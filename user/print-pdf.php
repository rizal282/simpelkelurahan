<?php
session_start();
include '../proses/koneksi.php';
//include 'headeruser.php';

if($_SESSION["nik"] && $_SESSION["nama"] && $_SESSION["password"]){
	if(isset($_GET["print"]) && isset($_GET["idSurat"])){
		$print = $_GET["print"];
		$idSurat = $_GET["idSurat"];

		
	}
}else{
	echo "Cannot Access This Page!";
}
?>