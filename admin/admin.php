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
			<a class="navbar-brand" target="http://localhost/simpel/" href="#">
				Kelurahan Tegal Munjul
			</a>
			
			
			
		</div>
			<ul class="nav navbar-nav navbar-right">
				<li style=""><a href="">Welcome <?php echo $_SESSION["nama"]; ?></a></li>
			</ul>
		<!-- Collect the nav links, forms, and other content for toggling -->
		
			</form>
			
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
					<li class="active"><a href="homeadmin.php"><span class="glyphicon glyphicon-home"></span>Beranda</a></li>
					<li class="active"><a href="?adm=administrator"><span class="glyphicon glyphicon-certificate"></span>Administrator</a></li>
					<li class="active"><a href="?adm=penduduk"><span class="glyphicon glyphicon-user"></span>Penduduk</a></li>
					<li class="active"><a href="?adm=artikel"><span class="glyphicon glyphicon-th-list"></span>Artikel</a></li>
					<li class="active"><a href="?adm=galeri"><span class="glyphicon glyphicon-th"></span>Galeri Foto</a></li>
					<li class="active"><a href="?adm=surat"><span class="glyphicon glyphicon-envelope"></span>Surat</a></li>
					<li class="active"><a href="?adm=laporan"><span class="glyphicon glyphicon-list-alt"></span>Laporan</a></li>
					<li class="active"><a href="?adm=kritiksaran"><span class="glyphicon glyphicon-inbox"></span>Kritik Saran</a></li>
					<li class="active"><a href="?adm=log_user"><span class="glyphicon glyphicon-menu-hamburger"></span>Log User (Penduduk)</a></li>
					<li class="active"><a href="../admin/index.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
					
					
					
					
					
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  			<?php 
  				if(isset($_GET["adm"])){
  					$adm = $_GET["adm"];

  					if($adm == "administrator"){
  						include "administrator.php";
  					}elseif($adm == "penduduk"){
  						include "penduduk.php";
  					}elseif($adm == "artikel"){
  						include 'admin/artikel.php';
  					}elseif($adm == "galeri"){
  						include 'admin/galeri.php';
  					}elseif($adm == "surat"){
  						include 'surat.php';
  					}elseif($adm == "laporan"){
  						include 'laporan.php';
  					}elseif ($adm == "kritiksaran") {
  						include 'admin/kritiksaran.php';
  					}elseif ($adm == "log_user") {
  						include 'log_user.php';
  					}
  				}else{
  					include "admin/welcomeadmin.php";
  				}
  			?>
  		</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				<center> Copyright &COPY; 2018 Asep Sutisna</a></center>
  			</p>
  		</footer>
  	</div>
  