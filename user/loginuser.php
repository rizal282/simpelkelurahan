<?php include 'headeruser.php'; ?>
<style>
		body
		{
			background-image: url('../assets/img/images.jpg');
			background-size: cover;
		}
		</style>
  <head>
	<body>
		<div class="login">
			<img src="../assets/img/users.jpg" class="user">
			<h2>Pelayanan Online</h2>
			<?php include '../proses/prosesloginuser.php'; ?>
		  	<form class="form-horizontal" method="post" action="">
				<p>NIK</p>
				<input type="text" name="nik" placeholder="Masukkan N I K">
				<p>Password</p>
				<input type="password" name="password" placeholder="********">
				<input type="submit" name="login" value="Masuk">
				<a class="btn btn-primary" href="http://localhost/simpel"><span class="glyphicon glyphicon-arrow-left">Kembali</span></a>
				<a href="#">Lupa Password?</a>
				<br>
				<a href="daftar.php"> Belum Punya Akun? </a>
			</form>
		</div>
	</body>
<?php include 'footeruser.php'; ?>