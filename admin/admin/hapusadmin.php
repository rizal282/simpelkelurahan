<?php
include "../../proses/koneksi.php";

if(isset($_GET["IDHapus"])){
	$id = $_GET["IDHapus"];

	$sql = "delete from admin where id_admin = '".$id."'";

	mysql_query($sql);

	header("location:homeadmin.php?adm=administrator");
}

?>