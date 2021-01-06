<?php include 'headeruser.php'; ?>

<?php 
session_start();
//error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
include '../proses/koneksi.php'; 
if ($_SESSION["nik"] && $_SESSION["nama"] && $_SESSION["password"]) {
?>

<nav class="navbar navbar-default">
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
				<img src="../assets/img/pwk.png">
			</a>
			<a class="navbar-brand" href="#">
				Kelurahan Tegal Munjul
			</a>
			
			
			
		</div>
			<ul class="nav navbar-nav navbar-right">
				<li style=""><a href="">Welcome <?php echo $_SESSION["nama"]; ?></a></li>
			</ul>
		<!-- Collect the nav links, forms, and other content for toggling -->
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
					<li class="active"><a href="http://localhost/simpel/user/homeuser.php"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl2">
							<span class="glyphicon glyphicon-envelope"></span> Surat Keterangan <span class="caret"></span>
						</a>

						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl2" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li class="active"><a href="?pelayanan=spkck">SPK Catatan Kepolisian</a></li>
									<li class="active"><a href="?pelayanan=skir">SK Ijin Rame-Rame</a></li>
									<li class="active"><a href="?pelayanan=sku">SK Usaha</a></li>
									<li class="active"><a href="?pelayanan=sktm">SK Tidak Mampu</a></li>
									<li class="active"><a href="?pelayanan=skbm">SK Belum Nikah</a></li>
									<li class="active"><a href="?pelayanan=spkp">SK Pindah</a></li>
									<li class="active"><a href="?pelayanan=skdom">SK Domisili</a></li>
									
								</ul>
							</div>
						</div>
					</li>
					<li class="active"><a href="?v_status=cek"><span class="glyphicon glyphicon-ok"></span> Status Surat</a></li>
					<li class="active"><a href="?pelayanan=ganti_pass"><span class="glyphicon glyphicon-cog"></span> Ganti Password</a></li>
					<li class="active"><a href="../index.php"><span class="glyphicon glyphicon-off"></span> Keluar</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  			<?php
  				if(isset($_GET["pelayanan"])){
  					$ply = $_GET["pelayanan"];

  					if($ply == "spkck"){
  						include 'form_spkck.php';
  					}elseif ($ply == "skir") {
  						include 'form_skir.php';
  					}elseif($ply == "sku"){
  						include 'form_sku.php';
  					}elseif($ply == "sktm"){
  						include 'form_sktm.php';
  					}elseif($ply == "skbm"){
  						include 'form_skbm.php';
  					}elseif($ply == "spkp"){
  						include 'form_spkp.php';
  					}elseif($ply == "skdom"){
  						include 'form_skdom.php';
  					}elseif($ply == "ganti_pass"){
  						include 'ganti_pass.php';
  					}
  				}elseif(isset($_GET["v_status"])){
  					$sts = $_GET["v_status"];

  					if($sts == 'cek'){
  						include 'status-surat.php';
  					}
  				}else{
  					echo '<div class="jumbotron">
  						<h3>-Selamat Datang di Pelayanan E-Government Kelurahan Tegal Munjul-</h3><br>
  						<p> Alur Pembuatan Surat Keterangan: </p>
  						<p>1. Silahkan Pilih Surat Keterangan Yang Anda Akan Ajukan </p>
  						<p>2. Cek data diri Anda,jika data Keliru Langsung Hubungi Petugas kelurahan.</p>
  						<p>3. Isi yang diperlukan dengan Benar Sesuai Surat Pengajuan.</p>
  						<p>4. Waktu verifikasi 1x24 Jam Setelah Pengajuan Surat.</p>
  						<p>5. Lihat di Status Surat , Jika sudah Di verifikasi Langsung Bisa Cetak.</p>

  						<h2><marquee><code><a>.:SURAT YANG SUDAH DI CETAK TIDAK DAPAT DI CETAK KEMBALI:.</marquee></code> </p></h2>


  					</div>';
  				}
  			?>
  		</div>
  		<footer class="pull-left footer" style="text-align: center;">
  			<p class="col-md-12 ">
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