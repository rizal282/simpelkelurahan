<?php
if(isset($_POST["btn-edit"])){
	$id_admin = $_POST["id_admin"];
	$nip = $_POST["nip"];
	$nama_admin = $_POST["nama_admin"];
	$password = $_POST["pass"];
	$level = $_POST["level"];

	$query = "update admin set nama_admin = '".$nama_admin."', nip = '".$nip."', password = '".$password."', level = '".$level."' where id_admin = '".$id_admin."'";

	mysql_query($query);

	echo '<script>alert("Data Sudah Diperbarui!");</script>';
	header("location:homeadmin.php?adm=administrator");
}

?>