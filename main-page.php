 <link rel="stylesheet" href="css/font-awesome.min.css">
<!-- divisi slider header -->
    <div class="container-fluid" style="margin-top: 90px">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li> 
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="assets/img/kelurahan.jpg" alt="...">
              <div class="carousel-caption">
                    <!-- <h4><p>aaaaaaaaa</p></h4> -->
              </div>
            </div>

            <div class="item">
              <img src="assets/img/anggotakelurahan.jpg" alt="...">
              <div class="carousel-caption">
             <!--   asasa -->
              </div>
            </div>
            <div class="item">
              <img src="assets/img/background.jpg" alt="...">
              <div class="carousel-caption">
          </div>
          </div>
            <div class="item">
              <img src="assets/img/sampurasun.png" alt="...">
              <div class="carousel-caption">
          </div>
          </div>
            <div class="item">
              <img src="assets/img/asiangames.jpg" alt="...">
              <div class="carousel-caption">
          </div>
          </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class=" fa fa-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span> 
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>

 <script type="text/javascript" src="js/jssor.min.js"></script> 
 
        <section id="blog" class="container-fluid" style="margin-bottom: 0px;">           
            <div align="center">
                <ol class="breadcrumb">
                    <li><a href=""> <h1 style="color:black "><b>SEKILAS BERITA</b></h1></a></li>
                </ol>
            </div>        
            <div class="blog">
                        <div class="blog-item">
                            <div class="container-fluid">
                                <div id="khas_kelurahan">
                                    <div class="row">             
                                        <?php
                                            $sql = "select * from tabel_berita where kategori = 'khas kelurahan' order by id_berita limit 3";
                                            $result = mysql_query($sql);
                                            $count_berita = mysql_num_rows($result);

                                            if($count_berita == 0){
                                                echo '<div class="alert alert-info">Tidak Ada Berita</div>';
                                            }else{
                                                echo '<div class="alert alert-info">Kategori Khas Kelurahan</div>';
                                                while($row_berita = mysql_fetch_array($result)){
                                        ?>
                                            <div class="col-sm-2 col-md-2">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">
                                                          <?php echo $row_berita["judul"]; ?>
                                                      </div>
                                                      <div class="panel-body">
                                                             <img class="media-object" src="img/<?php echo $row_berita["foto"]; ?>" alt="<?php echo $row_berita["foto"]; ?>" height="120px" width="100%" >
                                                             <br> <br>
                                                           
                                                            <?php echo $row_berita["deskripsi_singkat"]; ?>
                                                            <p>...</p>
                                                            <p> <a class="btn btn-primary" href="?idBerita=<?php echo $row_berita["id_berita"]; ?>">Selengkapnya... |<span class="fa fa-eye"></span></a> </p>
                                                       </div>
                                                    </div>
                                                </div>     
                                           
                                        <?php
                                                }
                                            }
                                        ?>                     
                                    </div> 
                                </div> 
                                <p>&nbsp;</p>
                                <div id="sosial_budaya">
                                    <div class="row">
                                        <?php
                                            $sql = "select * from tabel_berita where kategori = 'sosial & budaya' order by id_berita limit 3";
                                            $result = mysql_query($sql);
                                            $count_berita = mysql_num_rows($result);

                                            if($count_berita == 0){
                                                echo '<div class="alert alert-info">Tidak Ada Berita</div>';
                                            }else{
                                                echo '<div class="alert alert-info">Kategori Sosial</div>';
                                                while($row_berita = mysql_fetch_array($result)){
                                        ?>


                                        <!-- tes -->
                                           
                                                <div class="col-sm-2 col-md-2">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">
                                                          <?php echo $row_berita["judul"]; ?>
                                                      </div>
                                                      <div class="panel-body">
                                                             <img class="media-object" src="img/<?php echo $row_berita["foto"]; ?>" alt="<?php echo $row_berita["foto"]; ?>" height="120px" width="100%" >
                                                             <br> <br>
                                                           
                                                            <?php echo $row_berita["deskripsi_singkat"]; ?>
                                                            <p>...</p>
                                                            <p> <a class="btn btn-primary" href="?idBerita=<?php echo $row_berita["id_berita"]; ?>">Selengkapnya... |<span class="fa fa-eye"></span></a> </p>
                                                       </div>
                                                    </div>
                                                </div>
                                            
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                <div id="ekonomi">
                                    <div class="row">
                                        <?php
                                            $sql = "select * from tabel_berita where kategori = 'ekonomi' order by id_berita limit 3";
                                            $result = mysql_query($sql);
                                            $count_berita = mysql_num_rows($result);

                                            if($count_berita == 0){
                                                echo '<div class="alert alert-info">Tidak Ada Berita</div>';
                                            }else{
                                                echo '<div class="alert alert-info">Ekonomi</div>';
                                                while($row_berita = mysql_fetch_array($result)){
                                        ?>
                                           <div class="col-sm-2 col-md-2">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">
                                                          <?php echo $row_berita["judul"]; ?>
                                                      </div>
                                                      <div class="panel-body">
                                                             <img class="media-object" src="img/<?php echo $row_berita["foto"]; ?>" alt="<?php echo $row_berita["foto"]; ?>" height="120px" width="100%" >
                                                             <br> <br>
                                                           
                                                            <?php echo $row_berita["deskripsi_singkat"]; ?>
                                                            <p>...</p>
                                                            <p> <a class="btn btn-primary" href="?idBerita=<?php echo $row_berita["id_berita"]; ?>">Selengkapnya... |<span class="fa fa-eye"></span></a> </p>
                                                       </div>
                                                    </div>
                                                </div>    

                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                <div id="wisata_daerah">
                                    <div class="row">
                                        <?php
                                            $sql = "select * from tabel_berita where kategori = 'wisata daerah' order by id_berita limit 3";
                                            $result = mysql_query($sql);
                                            $count_berita = mysql_num_rows($result);

                                            if($count_berita == 0){
                                                echo '<div class="alert alert-info">Tidak Ada Berita</div>';
                                            }else{
                                                echo '<div class="alert alert-info">Wisata Daerah</div>';
                                                while($row_berita = mysql_fetch_array($result)){
                                        ?>
                                            <div class="col-sm-2 col-md-2">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">
                                                          <?php echo $row_berita["judul"]; ?>
                                                      </div>
                                                      <div class="panel-body">
                                                             <img class="media-object" src="img/<?php echo $row_berita["foto"]; ?>" alt="<?php echo $row_berita["foto"]; ?>" height="120px" width="100%" >
                                                             <br> <br>
                                                           
                                                            <?php echo $row_berita["deskripsi_singkat"]; ?>
                                                            <p>...</p>
                                                            <p> <a class="btn btn-primary" href="?idBerita=<?php echo $row_berita["id_berita"]; ?>">Selengkapnya... |<span class="fa fa-eye"></span></a> </p>
                                                       </div>
                                                    </div>
                                                </div>    
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                            </div>  
                        </div><!--/.blog-item-->
        </div>
    </section><!--/#blog-->
    <div align="center">
                <ol class="breadcrumb">
                    <li><a href=""> <h1 style="color:black "><b>Galeri Kelurahan</b></h1></a></li>
                </ol>
            </div>  
  <div class="container">
    <?php
      if(isset($_GET["see_photo"])){
        $see_photo = $_GET["see_photo"];

        $sql = "select * from galeri where id_galeri = '".$see_photo."'";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        extract($row);
    ?>
              <div class="thumbnail">
                  <img src="assets/galeri_desa/<?php echo $foto; ?>"   alt="..." class="img-rounded" width="700" height="500">
                  <div class="caption">
                    <h3><?php echo $deskripsi; ?></h3>
                  </div>
                  <a class="btn btn-danger" href="?main=galeri"><span class=" fa fa-mail-reply"> Kembali</a>
                </div>


    <?php
      }else{
    ?>
  <div id="galeri" style="margin-top:2px">
      <?php
        $sql = "SELECT * FROM galeri";
        $result = mysql_query($sql);

        while($rowsGaleri = mysql_fetch_array($result)){
          extract($rowsGaleri);
      ?>
        <div class="col-lg-4">
          <div class="thumbnail">
              <img src="assets/galeri_desa/<?php echo $foto; ?>" alt="..." class="img-rounded">
              <div class="caption">
                <h3><?php echo $deskripsi; ?></h3>
              </div>
              <a class="btn btn-primary" href="?main=galeri&see_photo=<?php echo $id_galeri; ?>"><span class="fa fa-image"></span>Lihat Foto</a>
            </div>
        </div>

      <?php
        }
      ?>

    <?php
      }
    ?>
  </div>

</div>
<div id="kritiksaran" style="margin-top: 10px">
    <?php include 'kritik-saran.php'; ?>
</div>