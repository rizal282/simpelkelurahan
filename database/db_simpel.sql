-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Sep 2018 pada 16.03
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `nip` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `nip`, `password`, `level`) VALUES
(1, 'Muhammad Kosim', '195907231982031005', 'kosim', 'lurah'),
(2, 'Nila Asmwati', '196902032007012006', 'nila', 'admin'),
(3, 'Ai Nurhasanah', '196902062007012006', 'nurhasanah', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `u_ktp` varchar(50) NOT NULL,
  `u_kk` varchar(50) NOT NULL,
  `u_skp` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_admin`, `foto`, `deskripsi`, `tgl`) VALUES
(11, 2, '20180705064020rajaban.jpg', 'Kegiatan Rajaban Kelurahan Tegal Munjul Kab. Purwakarta', '2018-07-05'),
(12, 2, '20180705064219potensi1.jpg', 'Kegiatan Memajukan Potensi Kelurahan Tegal Munjul Kab. Purwakarta', '2018-07-05'),
(14, 2, '20180705065924kegiatan1.jpg', 'Kegiatan Sosialiasi Kepada Masyarakat Tegal Munjul', '2018-07-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_ks` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `kritik_saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `respon` text NOT NULL,
  `kepuasan_warga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_ks`, `nik`, `kritik_saran`, `tanggal`, `respon`, `kepuasan_warga`) VALUES
(1, 3214010810940005, 'Mantap Website, Maju Terus Kelurahan Tegal Munjul', '2018-07-17', 'Terimkasih Sudah, Kami Siap Melayani Anda!', 'Sangat Puas'),
(2, 3214010810940005, 'Mantap Website, Maju Terus Kelurahan Tegal Munjul', '2018-07-17', 'terimkasih', 'Sangat Puas'),
(3, 3214011010580004, 'Kurang Respon min !!', '2018-07-17', 'Makasih Saranya, Kita Terus Meningkatkan Pelayanan\r\n#adminkelurahan ', 'Puas'),
(4, 3214010810940005, 'mantap', '2018-07-28', '', 'Sangat Puas'),
(5, 3214010810940005, 'Good Government', '2018-08-06', '', 'Puas'),
(6, 3214010810940005, 'ok', '2018-08-09', 'ok', 'Sangat Puas'),
(7, 3214010810940005, 'ok', '2018-08-09', '', 'Sangat Puas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `j_kelamin` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `bangsa` varchar(10) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `j_kelamin`, `status`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `agama`, `bangsa`, `pekerjaan`, `password`) VALUES
(3214010209970007, 'Muhammad Rizal Septian', 'Purwakarta', '1997-07-09', 'Laki-Laki', 'Belum Kawin', 'Ceuli Badak', '002', '005', 'Tegal Munjul', 'Purwakarta', 'Purwakarta', 'Islam', 'Indonesia', 'Mahasiswa', '07-09-1997'),
(3214010810940005, 'Asep Sutisna', 'Purwakarta', '1994-10-08', 'Laki-laki', 'Belum Kawin', 'Kp Ceuli Badak', '001', '005', 'Tegal Munjul', 'Purwakarta', 'Purwakarta', 'Islam', 'Indonesia', 'Mahasiswa', '08-10-1994'),
(3214010810940006, 'Agus', 'Purwakarta', '1996-08-08', 'Laki-Laki', 'Belum Kawin', 'Kp Ceulibadak', '001', '005', 'Tegal Munjul', 'Purwakarta', 'Purwakarta', 'Islam', 'Indonesia', 'Mahasiswa', '08-08-96'),
(3214011010580004, 'Kusnadi', 'Purwakarta', '2018-07-13', 'Laki-Laki', 'Kawin', 'Kp Ceuli Badak', '001', '005', 'Tegal Munjul', 'Purwakarta', 'Purwakarta', 'Islam', 'Indonesia', 'Karyawan Swasta', '1234'),
(3214014610630002, 'Titin', 'Purwakarta', '1963-10-06', 'Perempuan', 'Kawin', 'Kp Ceuli Badak', '001', '005', 'Tegal Munjul', 'Purwakarta', 'Purwakarta', 'Islam', 'Indonesia', 'Ibu Rumah Tangga', '10-06-1963');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(8) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `jenis_surat` varchar(10) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `keperluan_surat` text NOT NULL,
  `alamat_surat` text NOT NULL,
  `foto_1` varchar(100) NOT NULL,
  `foto_2` varchar(100) NOT NULL,
  `foto_3` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `waktu_acara` date NOT NULL,
  `hiburan` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tgl_verifikasi` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `vrf_lurah` varchar(20) NOT NULL,
  `sts_print` varchar(20) NOT NULL,
  `tgl_print` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `nik`, `jenis_surat`, `nama_surat`, `keperluan_surat`, `alamat_surat`, `foto_1`, `foto_2`, `foto_3`, `status`, `waktu_acara`, `hiburan`, `tanggal`, `tgl_verifikasi`, `id_admin`, `vrf_lurah`, `sts_print`, `tgl_print`) VALUES
(1, 3214010810940005, 'SKBM', 'Surat Keterangan Belum Menikah', 'Untuk Menikah', '', '20180808200625kartukeluarga.jpg', '', '', 'Sudah Terverifikasi', '0000-00-00', '', '2018-08-08', '2018-08-08', 3, 'Sudah Terverifikasi', 'Tercetak', '2018-08-08'),
(2, 3214010810940005, 'SPKCK', 'Surat Pengantar Keterangan Catatan Kepolisian\r\n			', 'Melamar Pekerjaan', '', '20180808210406DSC_0006.jpg', '20180808210406asep.jpg', '', 'Sudah Terverifikasi', '0000-00-00', '', '2018-08-08', '2018-08-08', 3, 'Sudah Terverifikasi', 'Tercetak', '2018-08-08'),
(3, 3214010810940005, 'SPKCK', 'Surat Pengantar Keterangan Catatan Kepolisian\r\n			', 'Melamar Pekerjaan', '', '20180809111801kk.jpg', '20180809111801DSC_0006.jpg', '', 'Sudah Terverifikasi', '0000-00-00', '', '2018-08-09', '2018-08-09', 3, 'Sudah Terverifikasi', 'Tercetak', '2018-08-09'),
(4, 3214010810940005, 'SKDOM', 'Surat Keterangan Domisili', '', '', '20180809113048kk.jpg', '20180809113048DSC_0006.jpg', '', 'Sudah Terverifikasi', '0000-00-00', '', '2018-08-09', '2018-09-18', 3, 'Sudah Terverifikasi', 'Tercetak', '2018-09-18'),
(5, 3214010810940005, 'SKTM', 'Surat Keterangan Tidak Mampu', 'Untuk Pengobatan', '', '20180809113250kartukeluarga.jpg', '', '', 'Belum Verifikasi', '0000-00-00', '', '2018-08-09', '0000-00-00', 0, '', '', '0000-00-00'),
(6, 3214010810940005, 'SKIR', 'SURAT KETERANGAN IZIN RAME-RAME', 'Pernikahan', 'Ceulibadak', '20180809114628kartukeluarga.jpg', '20180809114628kegiatan.jpg', '', 'Sudah Terverifikasi', '2018-08-10', 'Organ Tunggal', '2018-08-09', '2018-08-09', 3, 'Sudah Terverifikasi', 'Tercetak', '2018-08-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_berita`
--

CREATE TABLE `tabel_berita` (
  `id_berita` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi_singkat` text NOT NULL,
  `berita` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_berita`
--

INSERT INTO `tabel_berita` (`id_berita`, `id_admin`, `waktu`, `judul`, `deskripsi_singkat`, `berita`, `kategori`, `foto`) VALUES
(10, 2, '2018-07-05 19:11:35', 'Bendo/Iket Sunda', 'Mungkin saja untuk oleh-oleh yang setelah itu yakni bendo atau iket, anda akan tidak asing dengan namanya.', 'Mungkin saja untuk oleh-oleh yang setelah itu yakni bendo atau iket, anda akan tidak asing dengan namanya, lantaran iket atau bendo ini banyak juga yang jual di kota-kota yang lain. serupa dengan belangkon yang miliki khasnya Jogja. Iket sunda sendiri mulai popular pada th. 2013 yang ditujukan untuk golongan pria.\r\n\r\nLantaran manfaat iket dulu adalah sebagai bantalan kepala waktu mengangkut beban. Tetapi untuk saat ini, pemakaian iket cuma untuk aksesori usaha melestarikan budaya. Iket di Jawa Barat sendiri di kenal dengan sebutan iket, totopong, serta udeng.\r\n\r\nUntuk waktu inipun, Bupati Purwakarta senantiasa memakai iket waktu dinas maupun bertandang ke satu diantara daerah di Purwakarta.', 'wisata daerah', '20180705191135images.jpg'),
(11, 2, '2018-07-05 19:13:20', 'Sate Maranggi', 'Apa sih yang ada di pikiran kamu ketika menyebut kuliner apa yang khas dari Purwakarta,Jawa Barat?', 'Apa sih yang ada di pikiran kamu ketika menyebut kuliner apa yang khas dari Purwakarta, Jawa Barat? Pasti banyak yang menyebutkan nama Sate Maranggi. Sate Maranggi ini memang masih menjadi primadona pengunjung dan wisatawan sejak 1990. Rasanya yang begitu khas membuat Maranggi terkenal seantero nusantara.\r\n\r\nTekstur dagingnya yang empuk dan dibumbui dengan irisan tomat, kecap, dan cabe rawit hijau. Daging yang disajikan yaitu daging ayam, kambing, dan sapi yang dibakar hingga renyah.\r\nâ€œDi sini spesialnya yaitu bumbu tomat dan rasanya. Soalnya cuma dari bumbu kecap dan sambal tomat yang diulek. Kalau untuk daging semuanya lokal,â€ kata Rabbulkhair, seorang karyawan, Sate Maranggi Cibungur, Purwakarta, Jawa Barat.\r\n\r\nUntuk lokasinya, warung sate maranggi Cibungur mulai diperluas sejak didirikan tahun 1990 oleh Hj. Yetty. Warung itu kini berisi lebih dari 105 meja dengan lahan parkir yang luas di kelilingi hutan jati. Total ada 200 karyawan yang bekerja di sana.\r\n\r\nBagi kamu ingin mencoba dan memang harus mencobanya, kamu bisa datang ke Jalan Raya Bungursari, Bungursari, Purwakarta, Kabupaten Purwakarta, Jawa Barat.Mengenai harganya, Sate Maranggi tergolong cukup murah dan terjangkau. Harga sate per tusuk hanya Rp4 ribu, sedangkan untuk satu porsi yaitu Rp40 ribu.', 'ekonomi', '20180705191320sate-maranggi1.JPG'),
(12, 2, '2018-07-30 09:20:48', 'Angin Puting Beliung', 'Bantuan dari Kelurahan Tegal Munjul untuk warga yang terkena angin puting beliung', 'Lurah Tegal Munjul, Abah Ocim mengatakan, puluhan warga yang rumahnya rusak berat akibat puting beliung membutuhkan bantuan material bangunan untuk perbaikan rumah mereka. Warga, kata Bah Ocim, hingga saat ini masih menggunakan bahan seadanya untuk perbaikan rumah yang terkena puting beliung . pada kesempatan ini abah ocim menggalang bantuan kepada warga sekitar dengan segenap jajarannya.\r\n\r\n', 'sosial & budaya', '20180730092048bantuananginputing.jpg'),
(13, 2, '2018-07-30 09:29:30', ' Kerja Bakti', 'Kerja bakti dilakukan oleh warga dan Kasi Trantib tujuan untuk mempererat warga dan meningkatkan kebiasaan warga.', ' Kelurahan Tegal Munjul tidak hanya fokus melakukan pembangunan fisik semata. Tapi, juga melakukan pembinaan kepada warga agar tetap guyub salah satunya lewat kegiatan kerja bakti. Aksi kerja bakti ini merujuk pada surat edaran wali kota tentang imbauan gotong royong yang dilakukan selama tiga hari dari tanggal 14-16 Juli 2018 â€œKegiatan ini dalam upaya menanamkan budaya dan membangun karakter cinta lingkungan. Karena kebersihan juga sebagian dari iman. Kalau lingkungan bersih dan sehat, kitanya juga jadi nyaman,â€ kata Lurah Tegalmunjul, Muhammad Kosim Alias Abah Ocim saat ditemui di kantornya, (14/07/2017)..', 'khas kelurahan', '20180730092930kerjabakti.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_ks`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
