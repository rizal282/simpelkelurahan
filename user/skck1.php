<div id="print-surat">
<div class="box-surat">
<div class="head-data">
<div class="pinggir-data">
<div class="table-data">
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
	<tr><td colspan="2" class="head-data" align="justify"></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahwa nama tersebut diatas adalah benar warga kami dan berdasarkan Surat Pengantar dari Pengurus RT/RW setempat serta Catatan yang ada pada kami bahwa orang tersebut diatas tidak terlibat Kasus Narkoba, Miras, Kriminal dan Lain-lain.</br></br>
	&nbsp;&nbsp;Surat Keterangan ini dipergunakan untuk: <b><i><u><?php echo strtoupper($dataSurat["keperluan_surat"]); ?></u></i></b></BR></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.
<tr><td class="pinggir-data">&nbsp;</td><td class="pinggir-data">&nbsp;</td></tr>
	<tr><td class="pinggir-data">&nbsp;</td><td class="pinggir-data"><center>Purwakarta</br>KEPALA KELURAHAN<center></td></tr>
	<tr><td class="pinggir-data">&nbsp;</td><td class="pinggir-data">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;<img src="gambar/ttdstempel.png" width="180px" height="100px"></td></tr>
	<tr><td class="pinggir-data">&nbsp;</td><td class="pinggir-data"><center>( <u>MUHAMMAD KOSIM S,STP M,Si.</u> )</center></td></tr>
</table>
</center>
</center>
</td></tr></td></tr></table></div></div></div></div></div>