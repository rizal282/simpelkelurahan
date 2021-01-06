<?php
session_start();

if($_SESSION["id_admin"] && $_SESSION["nip"] && $_SESSION["nama"] && $_SESSION["password"] && $_SESSION["level"]){
include "../proses/koneksi.php";

	if(isset($_POST["cek-jenis"])){
		$kat = $_POST["kategori"];

		if($kat == "all"){
			// memanggil library FPDF
			require('../lib_fpdf/fpdf.php');
			// intance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('l','mm','Legal');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			//$start_awal = $pdf->GetX(); 
			//$get_xxx = $pdf->GetX();
			//$get_yyy = $pdf->GetY();

			//$width_cell = 40;  
			//$height_cell = 7;

			$pdf->SetMargins(15,10);
			$pdf->SetFont('Arial','B',16);
			// mencetak string 
			//$pdf->Cell(355.6,7,'PT VICTORIA CARE INDONESIA',0,1,'C');
			//$pdf->SetFont('Arial','B',12);
			$pdf->Cell(355.6,7,'LAPORAN DATA SURAT',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(20,7,'',0,1);
			//$pdf->Cell(6);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'No',1,0);
			$pdf->Cell(50,6,'NIK',1,0);
			$pdf->Cell(20,6,'No Surat',1,0);
			$pdf->Cell(110,6,'Nama Surat',1,0);
			$pdf->Cell(25,6,'Jenis Surat',1,0);
			$pdf->Cell(40,6,'Tanggal Pengajuan',1,0);
			$pdf->Cell(40,6,'Tanggal Verifikasi',1,1);

			 
			$pdf->SetFont('Arial','',10);
			 
			//include 'koneksi.php';
			$sql_pdf = "select * from surat where status='Sudah Terverifikasi' order by id_surat desc";

			$result = mysql_query($sql_pdf);
			$no = 1;
			while ($row = mysql_fetch_array($result)){
			    $pdf->Cell(10,6,$no,1,0);
			    $pdf->Cell(50,6,$row['nik'],1,0);
			    $pdf->Cell(20,6,$row['id_surat'],1,0);
			    $pdf->Cell(110,6,$row['nama_surat'],1,0); 
			    $pdf->Cell(25,6,$row['jenis_surat'],1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tanggal"])),1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tgl_verifikasi"])),1,1); 
			    $no ++;
			}

			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'Purwakarta, '.date("d M Y"),0,1);

			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,$_SESSION["nama"],'B',1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'NIP '.$_SESSION["nip"],0,1);

			$pdf->Output();
		}elseif($kat == "spkck"){
			// memanggil library FPDF
			require('../lib_fpdf/fpdf.php');
			// intance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('l','mm','Legal');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			//$start_awal = $pdf->GetX(); 
			//$get_xxx = $pdf->GetX();
			//$get_yyy = $pdf->GetY();

			//$width_cell = 40;  
			//$height_cell = 7;

			$pdf->SetMargins(15,10);
			$pdf->SetFont('Arial','B',16);
			// mencetak string 
			//$pdf->Cell(355.6,7,'PT VICTORIA CARE INDONESIA',0,1,'C');
			//$pdf->SetFont('Arial','B',12);
			$pdf->Cell(355.6,7,'LAPORAN DATA SURAT',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(20,7,'',0,1);
			//$pdf->Cell(6);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'No',1,0);
			$pdf->Cell(50,6,'NIK',1,0);
			$pdf->Cell(20,6,'No Surat',1,0);
			$pdf->Cell(110,6,'Nama Surat',1,0);
			$pdf->Cell(25,6,'Jenis Surat',1,0);
			$pdf->Cell(40,6,'Tanggal Pengajuan',1,0);
			$pdf->Cell(40,6,'Tgl Verifikasi',1,1);

			 
			$pdf->SetFont('Arial','',10);
			 
			//include 'koneksi.php';
			$sql_pdf = "select * from surat where id_admin = '".$_SESSION["id_admin"]."' and jenis_surat = '".strtolower($kat)."' order by id_surat desc";

			$result = mysql_query($sql_pdf);
			$no = 1;
			while ($row = mysql_fetch_array($result)){
			    $pdf->Cell(10,6,$no,1,0);
			    $pdf->Cell(50,6,$row['nik'],1,0);
			    $pdf->Cell(20,6,$row['id_surat'],1,0);
			    $pdf->Cell(110,6,$row['nama_surat'],1,0); 
			    $pdf->Cell(25,6,$row['jenis_surat'],1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tanggal"])),1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tgl_verifikasi"])),1,1); 
			    $no ++;
			}

			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'Purwakarta, '.date("d M Y"),0,1);

			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,$_SESSION["nama"],'B',1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'NIP '.$_SESSION["nip"],0,1);

			$pdf->Output();
		}elseif($kat == "skir"){
			// memanggil library FPDF
			require('../lib_fpdf/fpdf.php');
			// intance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('l','mm','Legal');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			//$start_awal = $pdf->GetX(); 
			//$get_xxx = $pdf->GetX();
			//$get_yyy = $pdf->GetY();

			//$width_cell = 40;  
			//$height_cell = 7;

			$pdf->SetMargins(15,10);
			$pdf->SetFont('Arial','B',16);
			// mencetak string 
			//$pdf->Cell(355.6,7,'PT VICTORIA CARE INDONESIA',0,1,'C');
			//$pdf->SetFont('Arial','B',12);
			$pdf->Cell(355.6,7,'LAPORAN DATA SURAT',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(20,7,'',0,1);
			//$pdf->Cell(6);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'No',1,0);
			$pdf->Cell(50,6,'NIK',1,0);
			$pdf->Cell(20,6,'No Surat',1,0);
			$pdf->Cell(110,6,'Nama Surat',1,0);
			$pdf->Cell(25,6,'Jenis Surat',1,0);
			$pdf->Cell(40,6,'Tanggal Pengajuan',1,0);
			$pdf->Cell(40,6,'Tgl Verifikasi',1,1);

			 
			$pdf->SetFont('Arial','',10);
			 
			//include 'koneksi.php';
			$sql_pdf = "select * from surat where id_admin = '".$_SESSION["id_admin"]."' and jenis_surat = '".strtolower($kat)."' order by id_surat desc";

			$result = mysql_query($sql_pdf);
			$no = 1;
			while ($row = mysql_fetch_array($result)){
			    $pdf->Cell(10,6,$no,1,0);
			    $pdf->Cell(50,6,$row['nik'],1,0);
			    $pdf->Cell(20,6,$row['id_surat'],1,0);
			    $pdf->Cell(110,6,$row['nama_surat'],1,0); 
			    $pdf->Cell(25,6,$row['jenis_surat'],1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tanggal"])),1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tgl_verifikasi"])),1,1); 
			    $no ++;
			}

			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'Purwakarta, '.date("d M Y"),0,1);

			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,$_SESSION["nama"],'B',1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'NIP '.$_SESSION["nip"],0,1);

			$pdf->Output();
		}elseif($kat == "sku"){
				// memanggil library FPDF
			require('../lib_fpdf/fpdf.php');
			// intance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('l','mm','Legal');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			//$start_awal = $pdf->GetX(); 
			//$get_xxx = $pdf->GetX();
			//$get_yyy = $pdf->GetY();

			//$width_cell = 40;  
			//$height_cell = 7;

			$pdf->SetMargins(15,10);
			$pdf->SetFont('Arial','B',16);
			// mencetak string 
			//$pdf->Cell(355.6,7,'PT VICTORIA CARE INDONESIA',0,1,'C');
			//$pdf->SetFont('Arial','B',12);
			$pdf->Cell(355.6,7,'LAPORAN DATA SURAT',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(20,7,'',0,1);
			//$pdf->Cell(6);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'No',1,0);
			$pdf->Cell(50,6,'NIK',1,0);
			$pdf->Cell(20,6,'No Surat',1,0);
			$pdf->Cell(110,6,'Nama Surat',1,0);
			$pdf->Cell(25,6,'Jenis Surat',1,0);
			$pdf->Cell(40,6,'Tanggal Pengajuan',1,0);
			$pdf->Cell(40,6,'Tgl Verifikasi',1,1);

			 
			$pdf->SetFont('Arial','',10);
			 
			//include 'koneksi.php';
			$sql_pdf = "select * from surat where id_admin = '".$_SESSION["id_admin"]."' and jenis_surat = '".strtolower($kat)."' order by id_surat desc";

			$result = mysql_query($sql_pdf);
			$no = 1;
			while ($row = mysql_fetch_array($result)){
			    $pdf->Cell(10,6,$no,1,0);
			    $pdf->Cell(50,6,$row['nik'],1,0);
			    $pdf->Cell(20,6,$row['id_surat'],1,0);
			    $pdf->Cell(110,6,$row['nama_surat'],1,0); 
			    $pdf->Cell(25,6,$row['jenis_surat'],1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tanggal"])),1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tgl_verifikasi"])),1,1); 
			    $no ++;
			}

			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'Purwakarta, '.date("d M Y"),0,1);

			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,$_SESSION["nama"],'B',1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'NIP '.$_SESSION["nip"],0,1);

			$pdf->Output();

		}elseif($kat == "sktm"){
				// memanggil library FPDF
			require('../lib_fpdf/fpdf.php');
			// intance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('l','mm','Legal');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			//$start_awal = $pdf->GetX(); 
			//$get_xxx = $pdf->GetX();
			//$get_yyy = $pdf->GetY();

			//$width_cell = 40;  
			//$height_cell = 7;

			$pdf->SetMargins(15,10);
			$pdf->SetFont('Arial','B',16);
			// mencetak string 
			//$pdf->Cell(355.6,7,'PT VICTORIA CARE INDONESIA',0,1,'C');
			//$pdf->SetFont('Arial','B',12);
			$pdf->Cell(355.6,7,'LAPORAN DATA SURAT',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(20,7,'',0,1);
			//$pdf->Cell(6);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'No',1,0);
			$pdf->Cell(50,6,'Nik',1,0);
			$pdf->Cell(20,6,'No Surat',1,0);
			$pdf->Cell(110,6,'Nama Surat',1,0);
			$pdf->Cell(25,6,'Jenis Surat',1,0);
			$pdf->Cell(40,6,'Tanggal Pengajuan',1,0);
			$pdf->Cell(40,6,'Tgl Verifikasi',1,1);

			 
			$pdf->SetFont('Arial','',10);
			 
			//include 'koneksi.php';
			$sql_pdf = "select * from surat where id_admin = '".$_SESSION["id_admin"]."' and jenis_surat = '".strtolower($kat)."' order by id_surat desc";

			$result = mysql_query($sql_pdf);
			$no = 1;
			while ($row = mysql_fetch_array($result)){
			    $pdf->Cell(10,6,$no,1,0);
			    $pdf->Cell(50,6,$row['nik'],1,0);
			    $pdf->Cell(20,6,$row['id_surat'],1,0);
			    $pdf->Cell(110,6,$row['nama_surat'],1,0); 
			    $pdf->Cell(25,6,$row['jenis_surat'],1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tanggal"])),1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tgl_verifikasi"])),1,1); 
			    $no ++;
			}

			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'Purwakarta, '.date("d M Y"),0,1);

			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,$_SESSION["nama"],'B',1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'NIP '.$_SESSION["nip"],0,1);

			$pdf->Output();

		}elseif($kat == "spkp"){
				// memanggil library FPDF
			require('../lib_fpdf/fpdf.php');
			// intance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('l','mm','Legal');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			//$start_awal = $pdf->GetX(); 
			//$get_xxx = $pdf->GetX();
			//$get_yyy = $pdf->GetY();

			//$width_cell = 40;  
			//$height_cell = 7;

			$pdf->SetMargins(15,10);
			$pdf->SetFont('Arial','B',16);
			// mencetak string 
			//$pdf->Cell(355.6,7,'PT VICTORIA CARE INDONESIA',0,1,'C');
			//$pdf->SetFont('Arial','B',12);
			$pdf->Cell(355.6,7,'LAPORAN DATA SURAT',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(20,7,'',0,1);
			//$pdf->Cell(6);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'No',1,0);
			$pdf->Cell(50,6,'Nik',1,0);
			$pdf->Cell(20,6,'No Surat',1,0);
			$pdf->Cell(110,6,'Nama Surat',1,0);
			$pdf->Cell(25,6,'Jenis Surat',1,0);
			$pdf->Cell(40,6,'Tanggal Pengajuan',1,0);
			$pdf->Cell(40,6,'Tgl Verifikasi',1,1);

			 
			$pdf->SetFont('Arial','',10);
			 
			//include 'koneksi.php';
			$sql_pdf = "select * from surat where id_admin = '".$_SESSION["id_admin"]."' and jenis_surat = '".strtolower($kat)."' order by id_surat desc";

			$result = mysql_query($sql_pdf);
			$no = 1;
			while ($row = mysql_fetch_array($result)){
			    $pdf->Cell(10,6,$no,1,0);
			    $pdf->Cell(50,6,$row['nik'],1,0);
			    $pdf->Cell(20,6,$row['id_surat'],1,0);
			    $pdf->Cell(110,6,$row['nama_surat'],1,0); 
			    $pdf->Cell(25,6,$row['jenis_surat'],1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tanggal"])),1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tgl_verifikasi"])),1,1); 
			    $no ++;
			}

			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'Purwakarta, '.date("d M Y"),0,1);

			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,$_SESSION["nama"],'B',1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'NIP '.$_SESSION["nip"],0,1);

			$pdf->Output();

		}elseif($kat == "skdom"){
				// memanggil library FPDF
			require('../lib_fpdf/fpdf.php');
			// intance object dan memberikan pengaturan halaman PDF
			$pdf = new FPDF('l','mm','Legal');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			//$start_awal = $pdf->GetX(); 
			//$get_xxx = $pdf->GetX();
			//$get_yyy = $pdf->GetY();

			//$width_cell = 40;  
			//$height_cell = 7;

			$pdf->SetMargins(15,10);
			$pdf->SetFont('Arial','B',16);
			// mencetak string 
			//$pdf->Cell(355.6,7,'PT VICTORIA CARE INDONESIA',0,1,'C');
			//$pdf->SetFont('Arial','B',12);
			$pdf->Cell(355.6,7,'LAPORAN DATA SURAT',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(20,7,'',0,1);
			//$pdf->Cell(6);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'No',1,0);
			$pdf->Cell(50,6,'Nik',1,0);
			$pdf->Cell(20,6,'No Surat',1,0);
			$pdf->Cell(110,6,'Nama Surat',1,0);
			$pdf->Cell(25,6,'Jenis Surat',1,0);
			$pdf->Cell(40,6,'Tanggal Pengajuan',1,0);
			$pdf->Cell(40,6,'Tgl Verifikasi',1,1);

			 
			$pdf->SetFont('Arial','',10);
			 
			//include 'koneksi.php';
			$sql_pdf = "select * from surat where id_admin = '".$_SESSION["id_admin"]."' and jenis_surat = '".strtolower($kat)."' order by id_surat desc";

			$result = mysql_query($sql_pdf);
			$no = 1;
			while ($row = mysql_fetch_array($result)){
			    $pdf->Cell(10,6,$no,1,0);
			    $pdf->Cell(50,6,$row['nik'],1,0);
			    $pdf->Cell(20,6,$row['id_surat'],1,0);
			    $pdf->Cell(110,6,$row['nama_surat'],1,0); 
			    $pdf->Cell(25,6,$row['jenis_surat'],1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tanggal"])),1,0);
			    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tgl_verifikasi"])),1,1); 
			    $no ++;
			}

			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'Purwakarta, '.date("d M Y"),0,1);

			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);
			$pdf->Cell(20,7,'',0,1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,$_SESSION["nama"],'B',1);

			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(50,6,'',0,0);
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(110,6,'',0,0);
			$pdf->Cell(25,6,'',0,0);
			$pdf->Cell(50,6,'NIP '.$_SESSION["nip"],0,1);

			$pdf->Output();

		}
	}elseif(isset($_POST["cek-nik"])){
		$nik = $_POST["no_nik"];

		// memanggil library FPDF
		require('../lib_fpdf/fpdf.php');
		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('l','mm','Legal');
		// membuat halaman baru
		$pdf->AddPage();
		// setting jenis font yang akan digunakan
		//$start_awal = $pdf->GetX(); 
		//$get_xxx = $pdf->GetX();
		//$get_yyy = $pdf->GetY();

		//$width_cell = 40;  
		//$height_cell = 7;

		$pdf->SetMargins(15,10);
		$pdf->SetFont('Arial','B',16);
		// mencetak string 
		//$pdf->Cell(355.6,7,'PT VICTORIA CARE INDONESIA',0,1,'C');
		//$pdf->SetFont('Arial','B',12);
		$pdf->Cell(355.6,7,'LAPORAN DATA SURAT',0,1,'C');
		 
		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(20,7,'',0,1);
		//$pdf->Cell(6);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(10,6,'No',1,0);
		$pdf->Cell(50,6,'Nik',1,0);
		$pdf->Cell(20,6,'No Surat',1,0);
		$pdf->Cell(110,6,'Nama Surat',1,0);
		$pdf->Cell(25,6,'Jenis Surat',1,0);
		$pdf->Cell(40,6,'Tanggal Pengajuan',1,0);
		$pdf->Cell(40,6,'Tgl Verifikasi',1,1);

		 
		$pdf->SetFont('Arial','',10);
		 
		//include 'koneksi.php';
		$sql_pdf = "select * from surat where id_admin = '".$_SESSION["id_admin"]."' AND nik ='".$nik."' order by id_surat desc";

		$result = mysql_query($sql_pdf);
		$no = 1;
		while ($row = mysql_fetch_array($result)){
		    $pdf->Cell(10,6,$no,1,0);
		    $pdf->Cell(50,6,$row['nik'],1,0);
		    $pdf->Cell(20,6,$row['id_surat'],1,0);
		    $pdf->Cell(110,6,$row['nama_surat'],1,0); 
		    $pdf->Cell(25,6,$row['jenis_surat'],1,0);
		    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tanggal"])),1,0);
		    $pdf->Cell(40,6,date("d-m-Y", strtotime($row["tgl_verifikasi"])),1,1); 
		    $no ++;
		}

		$pdf->Cell(20,7,'',0,1);

		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(50,6,'',0,0);
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(110,6,'',0,0);
		$pdf->Cell(25,6,'',0,0);
		$pdf->Cell(50,6,'Purwakarta, '.date("d M Y"),0,1);

		$pdf->Cell(20,7,'',0,1);
		$pdf->Cell(20,7,'',0,1);
		$pdf->Cell(20,7,'',0,1);
		$pdf->Cell(20,7,'',0,1);

		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(50,6,'',0,0);
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(110,6,'',0,0);
		$pdf->Cell(25,6,'',0,0);
		$pdf->Cell(50,6,$_SESSION["nama"],'B',1);

		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(50,6,'',0,0);
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(110,6,'',0,0);
		$pdf->Cell(25,6,'',0,0);
		$pdf->Cell(50,6,'NIP '.$_SESSION["nip"],0,1);

		$pdf->Output();
	}

}

?>
