<div class="box-kritik" style="margin-top: 0;">
	<div class="container-fluid">
			<div align="center">
                <ol class="breadcrumb">
                    <li><a href=""> <h1 style="color:black "><b>Kritik & Saran</b></h1></a></li>
                </ol>
            </div>  
		<div class="col-lg-5">
			<?php include 'proses/input-kritik-saran.php'; ?>
			<form method="post">
				<div class="form-group">
					<label>NIK</label>
					<input class="form-control" type="text" name="nik" placeholder="Masukkan NIK Anda">
					<small><p class="text-warning">*Wajib diisi</p></small>
				</div>
				<div class="form-group">
					<label>Kritik atau Saran</label>
					<textarea class="form-control" name="txt-ks"></textarea>
				</div>

				<div class="form-group">
					<label>Apakah Anda Puas dengan Pelayanan Kami?</label> <br>
					<input type="radio" name="kps" value="Sangat Puas"> Sangat Puas
					<input type="radio" name="kps" value="Puas"> Puas
					<input type="radio" name="kps" value="Biasa"> Biasa
					<input type="radio" name="kps" value="Tidak Puas"> Tidak Puas
					<input type="radio" name="kps" value="Kecewa"> Kecewa
				</div>

				<button class="btn btn-primary" name="btn-save" type="submit"> <span class=" fa fa-send"> Kirim</span></button>
			</form>
			<p>&nbsp;</p>
			
			<legend>Respon Kelurahan</legend>

			<div class="scroll-respon">
				<?php
					$sql = "select * from penduduk inner join kritik_saran on penduduk.nik = kritik_saran.nik where kritik_saran.respon != ''";
					$result = mysql_query($sql);
				?>
				<div class="respon-kelurahan">
				<?php
					while($row = mysql_fetch_assoc($result)){
				?>
					
						<div class="box-respon">
							<table>
								<tr>
									<td>Nama </td>
									<td>&nbsp; : &nbsp;</td>
									<td><?php echo $row["nama"]; ?></td>
								</tr>
								<tr>
									<td>Kritik & Saran </td>
									<td>&nbsp; : &nbsp;</td>
									<td><?php echo $row["kritik_saran"]; ?></td>
								</tr>
								<tr>
									<td>Respon </td>
									<td>&nbsp; : &nbsp;</td>
									<td><?php echo $row["respon"]; ?></td>
								</tr>
							</table>
						</div>
					
				<?php
					}
				?>
				</div>
			</div>
			
		</div>
		<div class="col-lg-7">
			<script type="text/javascript">
				var chart1; // globally available
				$(document).ready(function() {
				      chart1 = new Highcharts.Chart({
				         chart: {
				            renderTo: 'container-status',
				            type: 'column'
				         },   
				         title: {
				            text: 'Grafik Jumlah Kritik & Saran '
				         },
				         xAxis: {
				            categories: ['Kepuasan']
				         },
				         yAxis: {
				            title: {
				               text: 'Jumlah Kritik & Saran'
				            }
				         },
				              series:             
				            [
				            <?php 
				             //include('config.php');
				               $sql   = "SELECT kepuasan_warga, count(kepuasan_warga) as 'jumlah'  FROM kritik_saran GROUP BY kepuasan_warga";
				                $query = mysql_query( $sql )  or die(mysql_error());
				                while( $ret = mysql_fetch_array( $query ) ){
				                 $status = $ret['kepuasan_warga'];                     
				                  $jumlah = $ret["jumlah"];                
				                      ?>
				                      {
				                          name: '<?php echo ucfirst($status); ?>',
				                          data: [<?php echo $jumlah; ?>]
				                      },
				                  <?php } ?>
				            ]
				      });
				   }); 
				</script>

				<div id='container-status'>
					..
				</div>
		</div>
	</div>
</div>