<?php
session_start();

if($_SESSION["nik"] && $_SESSION["nama"] && $_SESSION["password"]){

	session_destroy();
	header("location:../user/loginuser.php");
}
?>