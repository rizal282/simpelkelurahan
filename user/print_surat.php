<?php
session_start();
include '../proses/koneksi.php';
include 'headeruser.php';

if($_SESSION["nik"] && $_SESSION["nama"] && $_SESSION["password"]){
?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				Welcome <?php echo $_SESSION["nama"]; ?>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://www.pingpong-labs.com" target="_blank">Visit Site</a></li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Akun
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li class=""><a href="#">Ganti Password</a></li>
							<li class="divider"></li>
							<li><a href="../proses/logoutuser.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>  	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="http://localhost/simpel/user/homeuser.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl2">
							<span class="glyphicon glyphicon-list"></span> Surat Keterangan <span class="caret"></span>
						</a>

						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl2" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="?pelayanan=spkck">SPK Catatan Kepolisian</a></li>
									<li><a href="?pelayanan=skdom">SK Domisili Usaha</a></li>
									<li><a href="?pelayanan=skir">SK Ijin Rame-Rame</a></li>
									<li><a href="?pelayanan=sku">SK Usaha</a></li>
									<li><a href="?pelayanan=sktm">SK Tidak Mampu</a></li>
									<li><a href="?pelayanan=skbm">SK Belum Nikah</a></li>
									<li><a href="?pelayanan=spkp">SK Pindah</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="active"><a href="?v_status=cek"><span class="glyphicon glyphicon-dashboard"></span> Status Surat</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  			<div class="col-md-12">
  				
  			</div>
  			<?php
				if(isset($_GET["print"]) && isset($_GET["idSurat"])){
						$print = $_GET["print"];
						$idSurat = $_GET["idSurat"];

						//mengambil data user nya
						$sql = "SELECT * FROM penduduk WHERE nik = '".$_SESSION["nik"]."'";
						$getSQL = mysql_query($sql);
						$dataUser = mysql_fetch_array($getSQL);

						//memanggil data surat di tabel surat
						$sqlSurat = "select * from surat where nik = '".$_SESSION["nik"]."' and jenis_surat = '".strtoupper($print)."' and id_surat = '".$idSurat."'";
						$getDataSurat = mysql_query($sqlSurat);
						$dataSurat = mysql_fetch_array($getDataSurat);

						/*
						if($dataSurat["sts_print"] == ''){
							echo '<a href="print_surat.php?print='.strtolower($dataSurat["jenis_surat"]).'&idSurat='.$dataSurat["id_surat"].'&po=print_out" class="btn btn-primary" onclick="printDiv(print-surat)">Print ke PDF</a>';
						}else{
							echo '<div class="alert alert-info">Sudah Dicetak pada tanggal '.date("d-m-Y", strtotime($dataSurat["tgl_print"])).'</div>';
						}*/

						
						if(isset($_GET["po"])){
							$po = $_GET["po"];
 
							$sql = "update surat set sts_print = 'Tercetak', tgl_print = '".date("Y-m-d")."' where id_surat = '".$idSurat."' and nik = '".$_SESSION["nik"]."'";

							mysql_query($sql);
						}
					?>
						<script type="text/javascript">
		  					function printDiv(divName) {
							     var printContents = document.getElementById(divName).innerHTML;
							     //var originalContents = document.body.innerHTML;

							     document.body.innerHTML = printContents;
							     document.title = "<?php echo $dataSurat['jenis_surat'] ?>";
							     //window.open('about:blank', 'print_preview', "resizable=yes,scrollbars=yes,status=yes");
							     window.print();
							     return false;
							     //document.body.innerHTML = originalContents;
							}
		  				</script>

  						<button class="btn btn-primary" onclick="printDiv('print-surat')"><span class="glyphicon glyphicon-print">Print PDF</button>
					<?php

						if($print == 'sku'){
						  	include 'sku.php';
						}elseif($print == 'spkck'){
							include 'spkck.php';
						}elseif($print == 'skbm'){
							include 'skbm.php';
						}elseif($print == 'sktm'){
							include 'sktm.php';
						}elseif($print == 'skir'){
							include 'skir.php';
						}elseif ($print=='skdom'){
							include'skdom.php';
						}elseif ($print=='spkp'){
							include'spkp.php';
						}
					}

  			?>
  		</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2018 Asep Sutisna 
  			</p>
  		</footer>
  	</div>


<?php
}else{
	echo "Cannot Access This Page!";
}
?>


<?php include 'footeruser.php'; ?>
