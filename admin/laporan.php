<p>&nbsp;</p>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Laporan Surat
		</div>
		<div class="panel-body">
			
			<div class="row">
	<div class="col-md-6">
		<form class="form-inline" method="post" action="print-reports-pdf.php">
			<div class="form-group">
				<label>Sortir Jenis Surat : </label>
				<select class="form-control" name="kategori">
					<option value="all">Semua</option>
					<option value="spkck">SPKCK</option>
					<option value="skir">SKIR</option>
					<option value="sku">SKU</option>
					<option value="sktm">SKTM</option>
					<option value="spkp">SPKP</option>
					<option value="skdom">SKDOM</option>
				</select>

				<button type="submit" name="cek-jenis" class="btn btn-primary"><span class=" 	glyphicon glyphicon-print"></span> Print</button>
			</div>
		</form>
	</div>
	<div class="col-md-6">
		<form class="form-inline" method="post" action="print-reports-pdf.php">
			<div class="form-group">
				<label>Sortir Menurut NIK : </label>
				<input type="text" class="form-control" name="no_nik">
					

				<button type="submit" name="cek-nik" class="btn btn-primary"><span class=" 	glyphicon glyphicon-print"></span> Print</button>
			</div>
		</form>
	</div>
</div>
			

		</div>
	</div>