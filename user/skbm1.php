<div id="print-surat">
<div class="box-surat">
<div class="head-data">
<div class="pinggir-data">
<div class="table-data">
<?php
	$date=getdate();
	$hari=$date['weekday'];
	$tgl=$date['mday'];
	$bln=$date['month'];
	$tahun=$date['year'];
	$jam=$date["hours"];
	$menit=$date["minutes"];
	$detik=$date["seconds"];
?>
<table class="table-data" width=75% border=0>
<center><img src="gambar/kopsurat.png" width="100%" height="125px"></center>
	<tr><td colspan="2" class="head-data" align="left"><pre></br></br>Nomor	:<?php echo $dataSurat["id_surat"]; ?>/<?php echo $dataSurat["jenis_surat"]; ?>/KESOS</br>Perihal	: Surat Keterangan Belum Menikah</br>Lampiran: -</pre></br></td></tr>
	<tr><td colspan="2" class="head-data" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Kelurahan menerangkan dengan sesungguhnya bahwa :</br></br></td></tr>
	<tr><td class="pinggir-data"><pre>Nama Lengkap		:</pre></td><td class="pinggir-data"><?php echo strtoupper ($dataUser["nama"]); ?></td></tr>
	<tr><td class="pinggir-data"><pre>Jenis Kelamin		:</pre></td><td class="pinggir-data"><?php echo ucfirst($dataUser["j_kelamin"]); ?></td></tr>
	<tr><td class="pinggir-data"><pre>No KTP			:</pre></td><td class="pinggir-data"><?php echo $dataUser["nik"]; ?></td></tr>
	<tr><td class="pinggir-data"><pre>Kewarganegaraan		:</pre></td><td class="pinggir-data"><?php echo ucfirst ($dataUser["bangsa"]); ?></td></tr>
	<tr><td class="pinggir-data"><pre>Agama			:</pre></td><td class="pinggir-data"><?php echo ucfirst ($dataUser["agama"]); ?></td></tr>
	<tr><td class="pinggir-data"><pre>Pekerjaan		:</pre></td><td class="pinggir-data"><?php echo ucfirst ($dataUser["pekerjaan"]);?></td></tr>
	<tr><td class="pinggir-data"><pre>Alamat			:</pre></td><td class="pinggir-data"><?php echo  ucfirst ($dataUser["alamat"]);?>,' RT <?php echo $dataUser["rt"]; ?>,'/',RW <?php echo $dataUser["rw"]; ?>,KEL. <?php echo  ucfirst ($dataUser["kelurahan"]);?> KEC <?php echo  ucfirst ($dataUser["kecamatan"]); ?>,' KAB.<?php echo  ucfirst ($dataUser["kabupaten"]); ?></td></tr>
	<tr><td colspan="2" class="head-data" align="justify"></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bersangkutan adalah benar warga kami yang bertempat tinggal pada alamat tersebut di atas. Berdasarkan Keterangan dari Ketua RT.<?php echo $dataUser["rt"]; ?> dan Ketua RW.<?php echo $dataUser["rw"]; ?> serta menurut pengakuannya sampai saat ini orang tersebut belum pernah menikah.</br></br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</br></td></tr>
	<tr><td class="pinggir-data">&nbsp;</td><td class="pinggir-data">&nbsp;</td></tr>
	<tr><td class="pinggir-data">&nbsp;</td><td class="pinggir-data"><center></br>KEPALA KELURAHAN<center></td></tr>
	<tr><td class="pinggir-data">&nbsp;</td><td class="pinggir-data">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;<img src="gambar/ttdstempel.png" width="180px" height="100px"></td></tr>
	<tr><td class="pinggir-data">&nbsp;</td><td class="pinggir-data"><center>( <u>MUHAMMAD KOSIM S,STP M,Si.</u> )</center></td></tr>

</div>
</div>
</div>
</div>
</div>
</table></td></tr></td></tr></table></div></div></div></div></div>
 <script>  
  window.load = print_d();  
  function print_d(){  
   window.print();  
  }  
 </script> 
</center></br></br>
