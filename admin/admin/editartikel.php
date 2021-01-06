<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="icon" type="image/png" href="../../assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/simpelstyle.css" rel="stylesheet">
	<title>Administrator</title>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		</button>
			<a class="navbar-brand" href="#">
				<img src="../../assets/img/pwk.png">
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
					<li class="active"><a href="http://localhost/simpel/admin/homeadmin.php"><span class="glyphicon glyphicon-home"></span>Beranda</a></li>
					<li class="active"><a href="?adm=administrator"><span class="glyphicon glyphicon-certificate"></span>Administrator</a></li>
					<li class="active"><a href="?adm=penduduk"><span class="glyphicon glyphicon-user"></span>Penduduk</a></li>
					<li class="active"><a href="?adm=artikel"><span class="glyphicon glyphicon-th-list"></span>Artikel</a></li>
					<li class="active"><a href="?adm=galeri"><span class="glyphicon glyphicon-th"></span>Galeri Foto</a></li>
					<li class="active"><a href="?adm=surat"><span class="glyphicon glyphicon-envelope"></span>Surat</a></li>
					<li class="active"><a href="?adm=laporan"><span class="glyphicon glyphicon-list"></span>Laporan</a></li>
					<li class="active"><a href="?adm=kritiksaran"><span class="glyphicon glyphicon-inbox"></span>Kritik Saran</a></li>
					<li class="active"><a href="?adm=log_user"><span class="glyphicon glyphicon-menu-hamburger"></span>Log User (Penduduk)</a></li>
					<li class="active"><a href="../admin/index.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
					<!-- Dropdown-->
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  		<?php
			include '../../proses/koneksi.php';

			if($_GET["IDEdit"]){
				$idBerita = $_GET["IDEdit"];

				$sqldataEdit = "select * from tabel_berita where id_berita = '".$idBerita."'";
				$executesql = mysql_query($sqldataEdit);
				$getdataArtikel = mysql_fetch_array($executesql);

			?>

			<?php 
				include 'proses_edit_artikel.php';

				if(isset($_GET["hapusfoto"])){
					$idfoto = $_GET["hapusfoto"];
					if($idfoto == $idBerita){
						$sqlhapusfoto = "update tabel_berita set foto = '' where id_berita = '".$idfoto."'";
						mysql_query($sqlhapusfoto);

						unlink("../../img/".$getdataArtikel["foto"]);
						//header('location:http://localhost/simpel/admin/admin/editartikel.php?IDEdit=$idfoto');
						//ini fungsi php untuk menghapus file

						echo "<script>alert('Foto Terhapus');</script>";
					}
				}
			?>

			<form method="post" enctype="multipart/form-data">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<div class="form-group">
								<label>Judul</label>
								<input type="hidden" name="id_berita" value="<?php echo $getdataArtikel["id_berita"]; ?>">
								<input type="text" name="judul" class="form-control" value="<?php echo $getdataArtikel["judul"]; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pilih Kategori</label>
								<select name="kategori" class="form-control">
									<option value="khas kelurahan">Khas Kelurahan</option>
									<option value="sosial & budaya">Sosial & Budaya</option>
									<option value="ekonomi">Ekonomi</option>
									<option value="wisata daerah">Wisata Daerah</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Deskripsi Singkat</label>
								<input type="text" name="des" class="form-control" value="<?php echo $getdataArtikel["deskripsi_singkat"]; ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Isi Berita</label>
								<textarea name="berita" class="form-control" ><?php echo $getdataArtikel["berita"]; ?></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Foto</label>
								<input type="file" name="foto">
							</div>
							<div class="form-group">
								<img src="../../img/<?php echo $getdataArtikel["foto"]; ?>" width="150" height="100">
							</div>
							<div class="form-group">
								<a class="btn btn-danger" href="editartikel.php?IDEdit=<?php echo $idBerita; ?>&hapusfoto=<?php echo $idBerita; ?>" onclick="return confirm('Yakin Hapus Foto?')"><span class="glyphicon glyphicon-trash">Hapus</span></a>
								<button class="btn btn-primary" type="submit" name="btn-update"><span class="glyphicon glyphicon-share">Update</span></button>
								<a class="btn btn-warning" href="http://localhost/simpel/admin/homeadmin.php?berita=artikel"><span class="glyphicon glyphicon-arrow-left">Kembali</span></a>
							</div>
						</div>
					</div>
				</div>
			</form>



			<?php


			}

			?>
  		</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2018 <a> Asep Sutisna</a>
  			</p>
  		</footer>
  	</div>


	<script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/simpel.js"></script>
</body>
</html>