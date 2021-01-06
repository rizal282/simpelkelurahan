<?php
$no_nik = $_POST["no_nik"];

					$sql = "select * from surat where nik = '".$no_nik."'";
					$result = mysql_query($sql);
?>
					<table class="table table-hovered">
						<th>No</th>
						<th>NIK</th>
						<th>No Surat</th>
						<th>Nama Surat</th>
						<th>Jenis Surat</th>
						<th>Tgl Pengajuan</th>
						<th>Tgl Verifikasi</th>

						<?php
								$no = 1;
								while($data_surat = mysql_fetch_assoc($result)){
						?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $data_surat["nik"]; ?></td>
									<td><?php echo $data_surat["id_surat"]; ?></td>
									<td><?php echo $data_surat["nama_surat"]; ?></td>
									<td><?php echo $data_surat["jenis_surat"]; ?></td>
									<td><?php echo date("d-m-Y", strtotime($data_surat["tanggal"])); ?></td>
									<td><?php echo date("d-m-Y", strtotime($data_surat["tgl_verifikasi"])); ?></td>
								</tr>
						<?php
									$no ++;
								}
						?>
					</table>