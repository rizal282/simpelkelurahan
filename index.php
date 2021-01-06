<?php 
include 'assets/url.php'; 
include 'proses/koneksi.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="assets/img/favicon.png"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Desa xxx">
        <title>KELURAHAN TEGALMUNJUL</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/icons/fontawesome/styles.min.css">   
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">-->
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">      
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.src.js"></script>
        <!-- =======================================================
            Theme Name: Gp
            Theme URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-templat/
            Author: BootstrapMade
            Author URL: https://bootstrapmade.com
        ======================================================= -->  

    </head>



    <body class="homepage">   
        <header id="header">
            <nav class="navbar navbar-fixed-top" role="banner">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                            <a class="navbar-brand" href="home">
                                <img src="assets/img/photo-jpglogopwk.png" width="55" height="55">

                            </a>
                            <a class="navbar-brand" href="http://localhost/simpel/?home=beranda" style="padding-left: 6px"><h3 style="color: #E8CE0E;">    Kelurahan Tegal Munjul</h3>
                            </a>                    
                    </div>

                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="?home=beranda">Beranda</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">Profil Kelurahan <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="?main=sejarah-singkat">Sejarah Singkat</a></li>
                                  <!--<li><a href="sejarah-kades">Sejarah KaDes</a></li>-->
                                  <li><a href="?main=struktur-desa">Struktur Kelurahan</a></li>
                                  <li><a href="?main=sambutan-kades">Sambutan Kepala Lurah</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">Potensi Kelurahan<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#khas_kelurahan">Khas Kelurahan</a></li>
                                  <!--<li><a href="sejarah-kades">Sejarah KaDes</a></li>-->
                                  <li><a href="#sosial_budaya">Sosial & Budaya</a></li>
                                  <li><a href="#ekonomi">Ekonomi</a></li>
                                   <li><a href="#wisata_daerah">Wisata Daerah</a></li>
                                  </ul>
                                  </li>
                            </li>
                            <li><a href="user/loginuser.php">Pelayanan Online</a></li>
                            <li><a href="?home=beranda#galeri">Galleri</a></li>
                            </li>
                            <li><a href="?home=beranda#kritiksaran">Kritik & Saran</a></li>

                            <!-- <li><a href="about-us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li> 
                            <li><a href="contact-us.html">Contact</a></li>  -->                       
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->

        </header><!--/header-->
       
        <div>
            
                 <?php 
                    if(isset($_GET["main"])){
                        $main = $_GET["main"];

                        if($main == "sejarah-singkat"){
                            include 'sejarah-singkat.php';
                        }elseif($main == "struktur-desa"){
                            include 'struktur-desa.php';
                        }elseif($main == "sambutan-kades"){
                            include 'sambutan-kades.php';
                        }elseif($main == "galeri"){
                            include 'gallery.php';
                        }
                    }elseif(isset($_GET["idBerita"])){
                        include "detail_berita.php";
                    }else{
                        include 'main-page.php';
                    } 
                ?>
        </div>
       

    <footer id="footer" class="midnight-blue navbar navbar-fixed-bottom" style="position: relative;" >
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="credits">
                        &copy; <?php=date('Y');?>2018 Site by <a href="#">Kelurahan Tegal Munjul Purwakarta</a>
                        Copyright <a href="">@Asep Sutisna</a>
                    </div>
                </div>

                </div>
            </div>
            

    </footer><!--/#footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- <script src="js/jquery.prettyPhoto.js"></script>-->
    <!-- <script src="js/jquery.isotope.min.js"></script> -->  
    <!-- <script src="js/wow.min.js"></script>-->
    <!-- <script src="js/main.js"></script>-->
    <!--<script src="js/jquery.js"></script>-->
    
    <!--<script src="js/highcharts.js"></script>  -->  

        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   
</body>

</html>