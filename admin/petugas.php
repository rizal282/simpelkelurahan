   
 <link rel="stylesheet" href="assets/icons/fontawesome/styles.min.css">
  <link rel="stylesheet" href="lib/css/chartist.min.css">
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
				<img src="../assets/img/pwk.png">
			</a>
			<a class="navbar-brand" href="#">
				Kelurahan Tegal Munjul
			</a>
			
			
			
		</div>
			<ul class="nav navbar-nav navbar-right">
				<li style=""><a href="">Welcome <?php echo $_SESSION["nama"]; ?></a></li>
			</ul>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		
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
					<li class="active"><a href="http://localhost/simpel/admin/homeadmin.php?"><i class="fa fa-home"></i></span> Beranda</a></li>
					<li class="active"><a href="?ptgs=lihat_Pdk"><i class="fa fa-users"></i></span> Penduduk</a></li>
					<li class="active"><a href="?ptgs=surat"><i class="fa fa-envelope-o"></i></span> Surat</a></li>
					<li class="active"><a href="?ptgs=ks"><i class="fa fa-commenting-o"></i></span> Kritik Saran </a></li>
					<li class="active"><a href="?ptgs=laporan"><i class="fa fa-area-chart"></i> <span> Laporan</span></a></li>
					<li class="active"><a href="?ptgs=gantipass"><i class="fa fa-cog"></i> <span> Ganti Password</span></a></li>
					<li class="active"> <a href="../admin/index.php"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>

				
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  		<?php 
  				if(isset($_GET["ptgs"])){
  					$ptgs = $_GET["ptgs"];
  					if($ptgs == "lihat_Pdk"){
  						include "penduduk.php";
  					}elseif($ptgs == "surat"){
  						include "surat.php";
  					}elseif($ptgs == "laporan"){
  						include"laporan.php";
  					}elseif($ptgs == "ks"){
  						include "admin/kritiksaran.php";
  					}elseif($ptgs == "gantipass"){
  						include "admin/gantipass.php";
  					}
  				}else{
  					include "admin/welcomeadmin.php";
  				}
  		?>
  		</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2018 Asep Sutisna</a>
  			</p>
  		</footer>
  	</div>