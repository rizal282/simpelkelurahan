<?php 
include 'koneksi.php';
if(isset($_POST["daftar"])){
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $nohp = $_POST["no_hp"];

    //variable untuk KTP
    $nama_ktp = $_FILES["u_ktp"]["name"];
    $type_ktp = $_FILES["u_ktp"]["type"];
    $size_ktp = $_FILES["u_ktp"]["size"];
    $temp_ktp = $_FILES["u_ktp"]["tmp_name"];

    //variable untuk kk
    $nama_kk = $_FILES["u_kk"]["name"];
    $type_kk = $_FILES["u_kk"]["type"];
    $size_kk = $_FILES["u_kk"]["size"];
    $temp_kk = $_FILES["u_kk"]["tmp_name"];

  //variable untuk skp
    $nama_skp = $_FILES["u_skp"]["name"];
    $type_skp= $_FILES["u_skp"]["type"];
    $size_skp = $_FILES["u_skp"]["size"];
    $temp_skp = $_FILES["u_skp"]["tmp_name"];

    $new_name_ktp = date('YmdHis').$nama_ktp;
    $new_name_kk = date('YmdHis').$nama_kk;
    $new_name_skp = date('YmdHis').$nama_skp;

    $lokasi = "../assets/daftarbaru/";

    if(!empty($nik)){
        if(!empty($nama)){
        if(!empty($no_hp)){  
            if(($type_ktp == "image/jpg" || $type_ktp == "image/jpeg" || $type_ktp == "image/png") && ($type_kk == "image/jpg" || $type_kk == "image/jpeg" || $type_kk == "image/png")&& ($type_skp == "image/jpg" || $type_skp == "image/jpeg" || $type_skpkp == "image/png")){
                if($size_ktp < 3000000 && $size_kk < 3000000 && $size_skp < 3000000){


                    $sql = "insert into daftar values('".$nik."','".$nama."','".$u_ktp."','".$u_kk."','".$u_skp."','".$no_hp."')";

                    move_uploaded_file($temp_ktp, $lokasi.$new_name_ktp);
                    move_uploaded_file($temp_kk, $lokasi.$new_name_kk);
                    move_uploaded_file($temp_skp, $lokasi.$new_name_skp);
                    mysql_query($sql);

                    echo '<div class="alert alert-info">Surat Anda Telah Dibuat. Silahkan</div>';

            }else{
                    echo '<script>alert("Ukuran Berkas Jangan Melebihi 3 MB!")</script>';
                }
            }else{
                echo '<script>alert("Tolong Isi format file yang sesuai. harus jpg atau png!")</script>';
            }
      }else{
            echo '<script>alert("Tolong Isi Alamat Usaha Anda!")</script>';
        }
    }else{
        echo '<script>alert("Tolong Isi Keperluan Surat Anda!")</script>';
    }
}


?>