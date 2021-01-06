<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FORMULIR PENDAFTARAN PENDUDUK BARU</title>
    <!-- BOOTSTRAP STYLE SHEET -->
    <?php include 'headeruser.php'; ?>
     <!-- CUSTOM STYLE CSS -->
    <style type="text/css">
        body {
            background-image: url('../assets/img/bck.jpg');
            background-size: cover;
            background-color:#f4f4f4;
             font-family: 'Open Sans Condensed', sans-serif;
             font-size:17px;
        }
      
        .panel-set {
            border-radius:0px;
        }
    </style>
</head>
<body>
    <div class="container back">
    
            <div class="row text-center pad-top">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <br /><br />
                </div>
                
                </div>         
              
            <!-- ROW END -->
        <div class="row ">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="panel panel-primary panel-set">
                            <div class="panel-heading">
                            <center>
                             Pendaftaran Penduduk Baru<br>
                             <b>Kelurahan Tegal Munjul Purwakarta</b>
                            </center> 
                            </div>
                    <form method="post" action="proses/simpan_daftar.php" enctype="multipart/form-data">        
                            <div class="panel-body"> 
                    <label>NIK (Nomor Induk Kependudukan)*</label>
                    <input type="text" class="form-control" name="nik" id="nik" required >
                    <label>Nama Lengkap*</label>
                    <input type="text" class="form-control" name="nama" id="nama" required >
                    <label>Upload KTP* </label>
                    <input type="file" class="form-control" name="u_ktp" id="u_ktp" required>
                    <label>Upload Kartu Keluarga*</label>
                    <input type="file" class="form-control" name="u_kk" id="u_kp" required>
                    <label>Upload Surat Keterangan Pindah* </label>
                    <input type="file" class="form-control" name="u_skp" id="u_skp" required>
                    <label>No Handphone*</label>
                    <input type="text" class="form-control col-sm-3" name="no_hp" id="nomor_telp" required>
                    <hr />
                    <button type="submit" name="daftar" id="daftar" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i>&nbsp;DAFTAR</button>
                    <hr /> 
                    <p class="small" align="center">
                        Untuk Warga Pendatang Baru Silahkan Isi Form Dengan Benar *Wajib Diisi !! Untuk Password Akan Diinformasikan Melalui <code>SMS</code> 1x24 Jam Mohon Ditunggu. Terima Kasih 				
                    </p>
                        <a href="http://localhost/simpel/" class="btn btn-default center-block">Kembali ke halaman utama</a>    
                                

                    </div>
   
					
                    </form>
   
                            </div>
                        </div>
                </div>
         <!-- ROW END -->
          
    </div>
    <!-- CONATINER END -->

    <!-- REQUIRED SCRIPTS FILES -->
    <!-- CORE JQUERY FILE -->
   <?php include 'footeruser.php'; ?>
</body>

</html>
