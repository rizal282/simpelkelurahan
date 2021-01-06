<?php
	$cari_nik = $_POST["cari-nik"]; 

	$sql = "select * from penduduk where nik like '%".$cari_nik."%'";
	$result = mysql_query($sql);
	$rowscount = mysql_num_rows($result);

	if ($rowscount == 0) {
		echo '<script>alert("Data NIK Tidak Ditemukan")</script>';
	}else{
?>
<legend><?php echo $rowscount; ?> Data <?php echo $cari_nik; ?> Ditemukan</legend>
<div class="table-responsive">
<table class="table table-striped table-bordered">
						  <th>NIK</th>
						  <th>Nama</th>
						  <th>Tempat lahir</th>
						  <th>jk</th>
						  <th>Status</th>
						  <th>Alamat</th>
						  <th>Agama</th>
						  <th>Bangsa</th>
						  <th>Pekerjaan</th>
						  <th>Pass</th>
						  <th colspan="2">Action</th>
		<?php
			while($rowsnik = mysql_fetch_array($result)){
				extract($rowsnik);
		?>
			<tr>
				<td><?php echo $nik; ?></td>
				<td><?php echo $nama; ?></td>
				<td><?php echo $tempat_lahir.", ".$tanggal_lahir; ?></td>
				<td><?php echo $j_kelamin; ?></td>
				<td><?php echo $status; ?></td>
				<td><?php echo $alamat; ?></td>
				<td><?php echo $agama; ?></td>
				<td><?php echo $bangsa; ?></td>
				<td><?php echo $pekerjaan; ?></td>
				<td><?php echo $password; ?></td>
				<td>
										<form method="post">
						  				<input type="hidden" name="id_pdk" value="<?php echo $nik; ?>">
						  				<button type="submit" name="btn-edit-pdk" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</button>
						  			</form>
						  		</td>
						  		<td><a class="btn btn-danger" href="hapus_pdk.php?ed=<?php echo $nik; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a></td>
			</tr>
		<?php
			}
		 ?>
	</tbody>
</table>



<?php
	}
 
?>