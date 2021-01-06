<?php
    $idBerita = $_GET["idBerita"];

    $sql = "select * from tabel_berita where id_berita = '".$idBerita."'";
    $result = mysql_query($sql);
    $row_berita = mysql_fetch_array($result);
?>

<div class="box-sejarah" style="margin-top: 150px;" >
    <div class="container" style="min-height: 500px;margin-top:0px;">
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img src="img/<?php echo $row_berita["foto"] ?>" alt="<?php echo $row_berita["foto"] ?>" width="200" height="200" >
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><?php echo $row_berita["judul"] ?></h4>
            <p>
                <?php echo $row_berita["berita"] ?>
            </p>
          </div>
        </div>
    </div>
</div>