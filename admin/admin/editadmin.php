<?php
include "../proses/edit_admin.php";

if(isset($_GET["idedit"])){
	$id = $_GET["idedit"];

	$sql = "select * from admin where id_admin = '".$id."'";

	$result = mysql_query($sql);

	$row_admin = mysql_fetch_array($result);

	extract($row_admin);
}

?>
<form action="" method="post">
			<div class="form-group">
				<label>ID Admin</label>
				<input class="form-control" type="text" name="id_admin" value="<?php echo $id_admin; ?>" readonly>
			</div>
		
			<div class="form-group">
				<label>NIP Admin</label>
				<input class="form-control" type="text" name="nip" value="<?php echo $nip; ?>">
			</div>
		
			<div class="form-group">
				<label>Nama Admin</label>
				<input class="form-control" type="text" name="nama_admin" value="<?php echo $nama_admin; ?>">
			</div>
		
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="text" name="pass" value="<?php echo $password; ?>">
			</div>
		
			<div class="form-group">
				<label>Level</label>
				<select name="level" class="form-control">
					<option value="lurah">Lurah</option>
					<option value="petugas">Petugas</option>
				</select>
			</div>
		

		<button type="submit" name="btn-edit" class="btn btn-primary">Perbarui</button>
		<a href="homeadmin.php?adm=administrator" class="btn btn-warning">Kembali</a>
	
</form>