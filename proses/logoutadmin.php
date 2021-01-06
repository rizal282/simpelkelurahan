<?php
session_start();

if($_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"] && $_SESSION["level"] == "lurah"){
	session_destroy();
	header("Location:../admin/loginadmin.php");

}elseif ($_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"] && $_SESSION["level"] == "admin") {
	session_destroy();
	header("Location:../admin/loginadmin.php");
}elseif ($_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"] && $_SESSION["level"] == "petugas") {
	session_destroy();
	header("Location: );
}

?>