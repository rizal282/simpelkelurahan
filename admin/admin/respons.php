<?php
	$sql = "select * from kritik_saran inner join penduduk on kritik_saran.nik = penduduk.nik where kritik_saran.id_ks = '".$respons."'";
	$result = mysql_query($sql);
	$rowRespons = mysql_fetch_array($result);
?>

<div class="panel panel-danger">
	<div class="panel-heading">Respon Untuk Kritik dan Saran dari Warga</div>
	<div class="panel panel-body">
		<div class="col-md-offset-3 col-md-6">

			<?php include '../proses/input_respons.php'; ?>

			<form class="form-horizontal" method="post">
				<div class="form-group">
					<label>ID</label>
					<input class="form-control" type="text" name="id_ks" value="<?php echo $rowRespons["id_ks"]; ?>" readonly="readonly">
				</div>
				<div class="form-group">
					<label>NIK</label>
					<input class="form-control" type="text" name="nik_ks" value="<?php echo $rowRespons["nik"]; ?>" readonly="readonly">
				</div>
				<div class="form-group">
					<label>Nama Pengirim</label>
					<input class="form-control" type="text" name="nama_ks" value="<?php echo $rowRespons["nama"]; ?>" readonly="readonly">
				</div>
				<div class="form-group">
					<label>Kritik dan Saran Warga</label>
					<p><?php echo $rowRespons["kritik_saran"]; ?></p>
				</div>
				<div class="form-group">
					<label>Tanggal</label>
					<input class="form-control" type="text" name="tgl_ks" value="<?php echo date('d-m-Y', strtotime($rowRespons["tanggal"])); ?>" readonly="readonly">
				</div>
				<div class="form-group">
					<label>Tanggapan Kelurahan</label>
					<textarea name="tgp_ks" class="form-control"></textarea>
				</div>

				<button class="btn btn-info" type="submit" name="btn-respons">Tanggapi</button>
				<a href="http://localhost/simpel/admin/homeadmin.php?adm=kritiksaran" class="btn btn-danger">Kembali <span class="glyphicon glyphicon-log-out"></span></a>
			</form>
		</div>
	</div>
</div>