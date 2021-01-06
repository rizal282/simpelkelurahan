 <?php ob_start(); ?>
 <link rel="icon" type="image/png" href="../assets/img/favicon.png"/>
 <link rel="stylesheet" href="assets/icons/fontawesome/styles.min.css">
 <link rel="stylesheet" href="lib/css/chartist.min.css">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			</button>
			<a class="navbar-brand" href="#">
				<img src="../assets/img/pwk.png">
			</a>
			<a class="navbar-brand" href="#">
				Kelurahan Tegal Munjul
			</a>
			
			
			
			<ul class="nav navbar-nav navbar-right">
				<li style=""><a href="">Welcome <?php echo $_SESSION["nama"]; ?></a></li>
			</ul>
		</div>

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
					<li class="active"><a href="homeadmin.php"><span class=" fa fa-home"></span> Beranda</a></li>
					<li class="active"><a href="?lurah=surat"><span class="fa fa-envelope"></span> Surat</a></li>
					<li class="active"><a href="?lurah=laporan"><span class="fa fa-book"></span> Laporan</a></li>
					<li class="active"><a href="?lurah=gantipass"><i class="fa fa-cog"></i> <span> Ganti Password</span></a></li>
					<li class="active"><a href="../admin/index.php"><span class="fa fa-power-off"></span> Keluar</a></li>

					
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  			  <?php
  			  	if(isset($_GET["lurah"])){
  			  		$lurah = $_GET["lurah"];

  			  	if($lurah == "surat"){
  						include "suratlurah.php";
  					}elseif($lurah == "laporan"){
  						include "laporan.php";
  					}elseif($lurah == "gantipass"){
  						include "admin/gantipass.php";


  			  	}
  				}else{
  					include "admin/welcomeadmin.php";
  				}  			  ?>
  			  	
</div>
  		</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider"><center>Copyright &COPY; 2018 Asep Sutisna</a></center>
  				
  			</p>
  		</footer>
  	</div>
<?php ob_flush(); ?>