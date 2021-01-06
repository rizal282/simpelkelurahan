<?php 
	session_start(); 
	error_reporting(0);
	include '../proses/koneksi.php';
	
?>

<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"/>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/simpelstyle.css" rel="stylesheet">
    <link href="../assets/dataTables/datatables.min.css" rel="stylesheet">
	<title>ADMIN-TEGALMUNJUL</title>
</head>
<body>
<?php
	if($_SESSION["id_admin"] && $_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"] && $_SESSION["level"] == "lurah"){
		include 'lurah.php';

	}elseif($_SESSION["id_admin"] && $_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"] && $_SESSION["level"] == "admin"){
		include 'admin.php';

	}elseif($_SESSION["id_admin"] && $_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"] && $_SESSION["level"] == "petugas"){
		include 'petugas.php';

	}else{
		echo '<div class="container"><div class="jumbotron">
			<h4>Anda Dilarang Masuk</h4>
		</div></div>';
	}

?>

	<script src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/dataTables/datatables.min.js"></script>
    <script src="../assets/js/simpel.js"></script>	

</body>
</html>