<?php include 'headeruser.php'; ?>


<div class="panel panel-primary">
	<div class="panel-heading">
		<h4 align="center"> Ganti Password</h4> 
</div>
	<div class="panel-body">
  		<?php
  			include "update_password.php";
  		?>
  		<form method="post">
		  <div class="form-group">
		    <label >Password Lama</label>
		    <input type="password" class="form-control" name="password_lama" placeholder="Masukkan Password Lama">
		  </div>
		   <div class="form-group">
   		    <label >Password Baru</label>
		    <input type="password" class="form-control" name="password_baru" placeholder="Masukkan Password Baru">
		  </div>
		  <div class="form-group">
   		    <label >Konfirmasi Password</label>
		    <input type="password" class="form-control" name="konf_password" placeholder="Masukkan Password Baru">
		  </div>
  <button type="submit" class="btn btn-warning btn-block" name="submit"> <span class="glyphicon glyphicon-edit"></span> Ganti Password</button>
  <br>
  :: Perhatian !! ::.<br>
<i>Demi Keamanan Akun Anda, Harap Selalu Mengganti password Secara Berkala !!</i>
</form>