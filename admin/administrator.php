<div class="row">
	<div class="col-lg-offset-7 col-lg-5">
		<form class="form-inline" action="" method="post">
				
	</div>
</div>
<p>&nbsp;</p>
<div class="panel panel-primary">
	<div class="panel-heading">
		Data Pegawai Kelurahan
	</div>
	<div class="panel-body">
				<?php
					if(isset($_POST["nip_actions"])){
						$nip_select = $_POST["nip_select"];
						$nip_actions = $_POST["nip_actions"];

						if($nip_actions == 'hapus'){
							$hapus = "delete from admin where nip = '".$nip_select."'";
							mysql_query($hapus);
							echo '<script>alert("Data Sudah Terhapus!");</script>';
							echo '<script>window.href.location("homeadmin.php?adm=administrator");</script>';
						}elseif($nik_actions == 'edit'){
							include "admin/edit_admin.php";
						}
								
					}else{
				?>
					<?php
						if(isset($_GET["idedit"])){
							include "admin/editadmin.php";
						}else{
							$query = "select * from admin where id_admin != '".$_SESSION["id_admin"]."'";
							$result = mysql_query($query);
							$count_admin = mysql_num_rows($result);

							if($count_admin == 0){
								echo '<div class="alert alert-info" role="alert">Tidak Ada Data Admin</div>';
							}else{
					?>
						<table class="table-responsive">
						  <table class="table table-striped table-bordered">
					<tr>
						<td >No</td>
						<td>ID Admin</td>
						<td>NIP</td>
						<td>Nama Pegawai</td>
						<td>Password</td>
						<td>Level</td>
						<td colspan="2" align="center">Action</td>
					</tr>

						  <?php
						  	$i = 0 + 1;
						  	while($row_adm = mysql_fetch_array($result)){
						  ?>
						  	<tr>	
						  		<td style="text-align: center;"><?php echo $i; ?></td>	
						  		<td><?php echo $row_adm["id_admin"]; ?></td>
						  		<td><?php echo $row_adm["nip"]; ?></td>
						  		<td><?php echo $row_adm["nama_admin"]; ?></td>
						  		<td><?php echo $row_adm["password"]; ?></td>
						  		<td><?php echo $row_adm["level"]; ?></td>
						  		<td style="text-align: center;"><a class="btn btn-sm btn-primary" href="?adm=administrator&idedit=<?php echo $row_adm['id_admin'];?>"> <span class="glyphicon glyphicon-pencil"> Ubah</a> 
						  		<a href="admin/hapusadmin.php?IDHapus=<?php echo $row_adm['id_admin'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus Data?')"> <span class="glyphicon glyphicon-trash"> Hapus</span></a>
						</td>
						

						  	</tr>
						   <?php
						      $i++;
						      }
						    ?>
						</table>
					<?php
						}
						}
					?>


				<?php
					}
				?>
	</div>
</div>