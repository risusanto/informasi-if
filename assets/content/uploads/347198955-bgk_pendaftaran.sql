-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2018 at 01:58 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgk_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('pbgk2018', '39093b54e0a00b30c04e564d7bfaa658');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_peserta` bigint(20) NOT NULL,
  `khs` varchar(255) DEFAULT NULL,
  `ktm` varchar(255) DEFAULT NULL,
  `foto_seluruh_badan` varchar(255) DEFAULT NULL,
  `foto_closeup` varchar(255) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_peserta`, `khs`, `ktm`, `foto_seluruh_badan`, `foto_closeup`, `bukti_pembayaran`) VALUES
(10, '', '', '', '', ''),
(11, 'IMG_3979.jpg', 'KPM_001.jpg', 'full_body_Namirah.jpg', 'Close_up_Namirah.jpg', 'faba78c2-fe2a-4f5b-ad59-83a6e26b736d_(1).jpg'),
(12, 'AIK_lengkap_KHS.pdf', 'AIK_lengkap_Ktm.pdf', 'AIK_lengkap-foto_seluruh_badan.jpg', 'AIK_lengkap-foto_closeup.jpg', 'AIK_lengkap-bukti_pembayaran.pdf'),
(13, 'Nama_lengkap-KHS.jpg', 'Nama_lengkap-KTM.jpg', 'Nama_lengkap-Foto_seluruh_badan.jpg', 'Nama_lengkap-Foto_closeup.jpg', 'Nama_lengkap-Bukti_pembayaran.jpg'),
(14, 'jpg_20181106_0003.jpg', 'jpg_20181106_0001.jpg', 'b.jpg', 'b.jpg', 'jpg_20181106_0002.jpg'),
(15, 'Screenshot_20181102-143604.png', 'IMG_20181102_135738.jpg', 'PicsArt_09-27-08.22.20.jpg', 'IMG_20180923_124728.jpg', 'Screenshot_20181102-145730.png'),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, 'Anistasya_Permata_Syafira-KHS.jpg', 'Anistasya_Permata_Syafira-KTM.jpg', 'ANISTASYA_PERMATA_SYAFIRA-Foto_seluruh_badan.jpeg', 'ANISTASYA_PERMATA_SYAFIRA-Foto_Closeup.jpeg', 'ANISTASYA_PERMATA_SYAFIRA-Bukti_pembayaran.jpg'),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, 'Tri_Meliasari_-_KHS.pdf', 'Tri_Meliasari_-_KTM.pdf', 'Tri_Meliasari_-_Foto_Seluruh_Badan.jpg', 'Tri_Meliasari_-_Foto_Close_Up.pdf', 'Tri_Meliasari_-_Pembayaran.pdf'),
(22, '1541504927614.jpg', '1541504849005.jpg', 'IMG-20181104-WA0088.jpg', 'IMG-20181104-WA0103.jpg', ''),
(23, '8092E3D4-4C2A-46EF-A2FC-88F10CD29AE0.jpeg', 'BE22B5AC-082E-4DC2-BEC2-4B72FB97EB89.jpeg', '43A0E27A-1AFF-4730-BD03-792B5FEFA5C6.jpeg', 'C5C88920-CC1E-4766-B154-5FAFD81E272C.jpeg', '1A5EBC6B-7F2C-49EF-A7CE-F438E726EAA3.jpeg'),
(24, '', '', '', '', ''),
(25, 'Drefinia_Nova_L-KHS.jpg', 'Drefinia_Nova_L-KTM.jpg', 'Drefinia_Nova_L-Foto_Seluruh_Badan.jpg', 'drefinia_Nova_L-Foto_Close_Up.jpg', 'Drefinia_Nova_L-Bukti_Pembayaran.jpg'),
(26, 'M.ZAHIZAN_PUTRA-KHS.jpg', 'M.ZAHIZAN_PUTRA-KTM.jpg', 'M.ZAHIZAN_PUTRA-_Full_Body_4R.jpg', 'M.ZAHIZAN_PUTRA_Close-up_4R.jpg', 'M.ZAHIZAN_PUTRA-Bukti_Pembayaran.jpg'),
(27, '1541862050543468125927039934397.jpg', 'IMG_20181110_214942.jpg', 'MAKEUP_20181109201559_save.jpg', 'MAKEUP_20181109201816_save.jpg', 'IMG_20181110_215023.jpg'),
(28, 'Siti_Ayu_Gerhani_Rahayu-KHS.pdf', 'Siti_Ayu_Gerhani__Rahayu-KTM.pdf', 'Siti_Ayu_Gerhani_Rahayu-Foto_Seluruh_Badan.jpg', 'Siti_Ayu_Gerhani_Rahayu-Foto_Closeup.jpg', 'Siti_Ayu_Gerhani_Rahayu-Bukti_Pembayaran.jpg'),
(29, 'CESSY_CAMILA_AMALYA-KHS.doc', 'A3F21A69-DC0A-4C7C-A475-56573FF50C46.jpeg', '02175E92-16A1-484C-9D2F-16AF241AAC42.jpeg', 'A6B88F16-C3A9-44EE-B682-21CBF332CC3F.jpeg', '62EA16F2-E8ED-49CA-8D7E-55524D2B1DE2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tahun_kepengurusan` varchar(20) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `asal_kampus` varchar(255) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`id`, `nama`, `tahun_kepengurusan`, `jabatan`, `asal_kampus`, `foto`) VALUES
(1, 'Ridho Rajiyanto', '2017', 'Favorit Bujang', '-', '59036-ridho.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `no_peserta` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(20) DEFAULT NULL,
  `email` text NOT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ortu` varchar(255) DEFAULT NULL,
  `alamat_ortu` text,
  `telepon_ortu` varchar(20) DEFAULT NULL,
  `prestasi` text,
  `hobi` varchar(255) DEFAULT NULL,
  `bakat` varchar(255) DEFAULT NULL,
  `ipk` varchar(10) DEFAULT NULL,
  `tinggi` int(10) DEFAULT NULL,
  `berat` int(10) DEFAULT NULL,
  `riwayat_penyakit` varchar(255) DEFAULT '-',
  `motivasi` text,
  `pendapat` text,
  `nama_org_terdekat` varchar(255) DEFAULT NULL,
  `telepon_org_terdekat` varchar(20) DEFAULT NULL,
  `ttl` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `agama` varchar(20) NOT NULL,
  `universitas` varchar(150) NOT NULL,
  `jurusan` varchar(150) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`no_peserta`, `username`, `password`, `nama_lengkap`, `nama_panggilan`, `alamat`, `telepon`, `email`, `nama_ayah`, `nama_ibu`, `pekerjaan_ortu`, `alamat_ortu`, `telepon_ortu`, `prestasi`, `hobi`, `bakat`, `ipk`, `tinggi`, `berat`, `riwayat_penyakit`, `motivasi`, `pendapat`, `nama_org_terdekat`, `telepon_org_terdekat`, `ttl`, `jenis_kelamin`, `agama`, `universitas`, `jurusan`, `semester`, `status`) VALUES
(10, 'Annisyanufaliza', 'dd6c6654edaae85bd1df0024773ed928', 'Annisya Nufaliza', 'Ica', 'Jalan Mayor Salim Batubara Lorong Langgar RT.001/RW.001 No.78 Kelurahan 20 Ilir II Kecamatan Kemuning', '082186602103', 'annisyanufaliza@gmail.com', 'M.Fauzi Kurniadi', 'Nurul Husna', 'Wiraswasta dan Medis', ' Jalan May Sabara Lrg. Langgar RT.001/RW.001 No.78', '082378648555', 'Finalis Azzura Models Palembang 2018, Juara 1 Kompetensi Sains Madrasah Cab.Olimpiade Matematika 2015 seKota Palembang, Juara 3 Kompetensi Sains Madrasah Cab.Olimpiade Matematika 2015 seProvinsi Sumatera Selatan, Juara 1 Teater seKota Palembang 2016, Juara 1 POSPEKOT Cab.Teater Putri seKota Palembang 2016, Juara 2 POSPEDA Cab.Teater Putri 2016 seProvinsi Sumatera Selatan, Peserta Terbaik Ke-IV Latihan Kepemimpinan Siswa 2016 Unit MAN 3 Palembang.', 'Nari dan Berenang', 'Nari,Teater dan Melukis', '3.48', 162, 48, '-', 'Bukan hadiah ataupun status yang ingin saya kejar,melainkan sebuah pengalaman yang belum saya temui dan sebuah kemajuan didalam diri untuk terus menjadi yang lebih baik. Dengan kemampuan yang ada dalam diri saya, saya ingin lebih mengeksplorasi diri serta mengembangkan kemampuan yang ada dan saya ingin memperluas jaringan sosial agar dapat saling memotivasi serta sharing didalam Ikatan Bujang Gadis Kampus Sumatera Selatan.', 'Saya sangat tertarik dengan BGKSS,karena bukan hanya\r\nsekedar ajang pemilihan bujang gadis saja tetapi merupakan suatu wadah untuk mengembangkan diri serta berkompeten di bidang pendidikan.Bukan hanya itu saja, yang saya tahu BGKSS ini juga banyak melakukan kegiatan-kegiatan yang bermanfaat,jadi akan sangat beruntung jika dapat bergabung ke dalam BGKSS.', 'Nurul Husna', '082378648555', 'Palembang,7 April 1999', 'perempuan', 'Islam', 'Universitas Sriwijaya', 'D3 Akuntansi', 3, 1),
(11, 'namirahrachmalia', 'fb405242c54c21212eb16f217e40a046', 'Namirah Rachmalia', 'Namirah', 'Jalan Flamboyan 1 Blok L1 no.3 Sako', '083149001521', 'namirahrachmalia@gmail.com', 'is nuzulur rochman', 'yulia muziarti', 'pensiun dan guru', 'Jalan Flamboyan 1 Blok L1 no.3 Sako', '081373106593', '1. Presenter PALTV 2018\r\n2. Semifinalis Bujang Gadis Palembang 2018\r\n3. Model Iklan Baju Anifa di stasiun PALTV 2018\r\n4. Model Iklan Baju Musi Mania di stasiun PALTV 2018\r\n5. Juara Harapan 1 Lomba Essay se-SumSel 2017\r\n6. Delegasi Diskusi Pelajar se-SumSel di Bkkbn 2016', 'Menggambar', '1. Menari 2. Bermain Gitar', '3.51', 168, 53, '-', 'untuk memperluas wawasan saya mengenai pendidikan dan budaya Sumatera Selatan , dan juga saya ingin melatih diri saya untuk dapat bersosialisasi dan berinteraksi dengan sesama makhluk sosial serta memperbayak pengalaman dan relasi.', 'BGK merupakah salah satu wadah saya untuk mengembangkan bakat dan potensi yang ada di dalam diri saya.', 'Nuzulur Rochman', '08153577106', 'Palembang , 18 Februari 2000', 'perempuan', 'Islam', 'universitas sriwijaya', 'Manajemen', 3, 1),
(12, 'Aik', '4d654e34a9f8412b1613bdecd6a7eea0', 'Aik', 'teteh', 'Desa Sumber Agung ,Kec.Keluang,Kab.Musi Banyuasin', '082375093321', 'aikfkm15@gmail.com', 'Rahmat', 'Karsinah', 'Petani', 'Desa Sumber Agung ,Kec.Keluang,Kab.Musi Banyuasin', '085378114607', 'juara 2 lomba bazar intrepreneur di fkm, peserta jambore hipmi perguruan tinggi himpi se asean di bandung tahun 2016', 'wirausaha,nyanyi sholawat,berorganisasi dan mencari pengalaman yang lebih luas lagi', 'interpreneur', '3.02', 150, 51, 'asma', 'ingin sekali ikut dan bergabung di sgala kegiatan yg positif2 di bgk ini,ingin keluar dari zona aman yg slama ini hanya kuliah,organisasi dan ikut bazar wirausaha', 'bgk adalah sesuatu yang sangat menarik bagi saya,karna bgk itu sebuah wadah untuk menampung,menambah bahkan mengksplor kreativitas,inovasi baik untuk pendidikan maupun kebudayaan di sumsel,dengan itu menambah cinta kita ke provinsi kita sendiri dan memajukan pendidikan dan kebudayaan di sumsel', 'Sandi Sarfani', '082372923263', 'Muba ,11-09-1995', 'perempuan', 'Islam', 'sriwijaya', 'kesehatan masyarakat', 7, 1),
(13, 'dindaprameisty', 'f07b95be511779b80ef4e3a87f85a64b', 'Dinda Prameisty', 'Dinda', 'KPR BTN BLOK U NO 9 RT 27 RW 10 Talang Betutu', '089637850036', 'dindaprameisty@gmail.com', 'Suwandi', 'Yuni Farida, S.E.', 'Karyawan Swata', 'KPR BTN BLOK U NO 9 RT 27 RW 10 Talang Betutu', '081367491975', '10 besar UBS Gold Dance Competition Tahun 2016', 'Berenang, Bermain games', 'Menari', '3,58', 160, 55, 'Tidak ada', 'Motivasi saya mengikuti BGK adalah saya ingin berkontribusi dan bertanggung jawab di setiap event yang diadakan oleh BGK, membangun hubungan baik dengan orang banyak, menambah wawasan dan pengalaman saya dalam berorganisasi, serta dapat berkompeten dalam bidang pendidikan.', 'Menurut saya BGK itu menarik. ', 'Namirah Rachmalia', '083149001521', 'Palembang, 24 Mei 1999', 'perempuan', 'Islam', 'Sriwijaya', 'Manajemen', 3, 1),
(14, 'Ndriyanii0501@gmail.com', '03a49b6e817b314610c12360acebe1ba', 'Indriyani', 'Riri', 'Jl.simanjuntak Lrg.lebak mulyo pahlawan ', '085367815892', 'ndriyanii0501@gmail.com', 'Edi suherman', 'Yulimar', 'Penjual buah & sayur', 'Jl.simanjuntak \r\nLrg lebak mulyo\r\nPahlawan', '0895600373137', 'THN 2011 JUARA 2 UMUM LEADER TERBAIK SEKOTA MADYA TINGKAT SMP .\r\nTAHUN 2013 JUARA 3 UMUM LOMBA PERTOLONGAN PERTAMA SESMK / SMA / MA \r\nTAHUN 2014 JUARA 2 UMUM PERTOLONGAN PERTAMA SEKOTA PALEMBANG \r\n', 'Nonton & membaca', 'Akting , mc', '3.39', 157, 49, 'Gejalah vertigo ', 'Saya sangat suka berorganisasi apalagi organisasi yang memberikan feedback menarik dalam lingkungan saya. Saya melihat BGK ini sbg organisasi antar kampus yg membuat orang-orang di dlm BGK menjadi lebih berwarna karena banyak partisipan dari berbagai kampus yang mampu memberikan opini dan cara berorganisasi yang beragam . Saya optimis dan yakin dgn BGK ini saya mampu dan bisa memberikan kontribusi lebih kepada masyarakat dan lingkungan disekitar saya .\r\nKarena dengan kepercayaan diri akan memberikan sebuah kesempatan yg akan membawa dampak positif bagi saya dan orang di sekitar saya.', 'BGK adalah sebuah  ajang pemersatu antara unit kampus yang menjadi wadah bagi para indfluencer untuk merubah dan memberikan perubahan bagi diri sendiri , masyarakat & lingkungan sekitar .', 'Nurbaiti', '082282199692', 'Muntok , 05 Januari 1998', 'perempuan', 'Islam', 'Universitas sriwijaya', 'Ilmu administrasi negara', 5, 1),
(15, 'Egaullang@gmail.com', '92286150cc1496be02a6eb8606c33326', 'Ullang Ega Fazeri', 'Ega', 'Kotabumi Lampung Indonesia', '08127370749', 'egaullang@gmail.com', 'Wardi', 'Indah', 'Ibu dan ayah rumah tangga', 'Kotabumi Lampung Indonesia', '----', 'Puasa Ramadhan 30 hari full tanpa putus', 'Naek gunung asli', 'Bisa minum tanpa makan sehari', '---', 163, 58, 'Pernah Patah rambut', 'Biar di follback sama Maya Anjela', 'Paten bukan kaleng-kaleng', '--', '--', 'Kotabumi 18-10-1998', 'laki-laki', 'Islam', 'Sriwijaya university', 'Animal science', 5, 1),
(16, 'larasatianggra', '869e710e385409b75bea0d2b4121f915', 'Anggraini Larasati', 'Anggi ', 'Jl. H.M. Saleh KM.7 Sukarami Palembang', '082280982238', 'larasatianggra00@gmail.com', 'Indera Supawi', 'Intan Juairiah', 'PNS', 'Pangkalan Balai, Banyuasin', '0811734156', 'Wakil 1 Duta Putri SMA Plus Negeri 2 Pangkalan Balai Tahun 2013, Wakil 1 Gadis FKM Unsri Tahun 2016, Penerima beasiswa pemerintah provinsi Sumatera Selatan Tahun 2015-2018, Harapan 1 Gedis Banyuasin Tahun 2017. ', 'Membaca, Musik, Tari, Nonton Drakor, Public Speaking', 'Menari', '3.09', 160, 58, 'Tifus', 'Saya telah mengikuti perjalanan BGKSS dari tahun 2015. Hingga tahun tersebut, saya sangat ingin mengikuti pemilihan BGKSS. Bukan tidak memiliki keberanian dan pesimis, tapi saya merasa harus meningkatkan kemampuan diri lagi agar lebih siap untuk berdedikasi dalam Ikatan BGKSS. Saya ingin menjadi seseorang yg kreatif, aktif dan inovatif dalam melakukan sesuatu, dan saya yakin orang-orang yang tergabung dlm ikatan BGKSS ini memiliki paket lengkap yang dapat dijadikan motivasi dan inspirasi, sehingga nantinya saya juga dapat menjadi motivator dan inspirator untuk lingkungan sekitar.', 'Menurut saya BGK ini seperti wadah untuk meningkatkan kualitas diri. IBGKSS juga seperti ladang untuk menanam dan mendapatkan Ilmu mengenai Pendidikan dan Budaya yang belum tentu kita dapatkan dalam Perkuliahan. BGK selalu menjalankan program yang sangat bermanfaat dan diminati banyak orang, karena bukan rahasia umum lagi bahwa yang tergabung dalam IBGKSS adalah orang-orang terbaik.', 'Melisa Yuninirmalasari ', '085279552550', 'Palembang, 13 Juli 1997', 'perempuan', 'Islam', 'Universitas Sriwijaya', 'Ilmu Kesehatan Masyarakat', 7, 1),
(17, 'Dediirawan', '437011ca6c0429189e87529fd58385dd', 'Dedi irawan', 'Dedi', 'Jalan S. Suparman Lr. Tukiman Rt 58 Rw 06 Palembang', '082290255381', 'dediirawn24@gmail.com', 'situ', 'misiyem', 'Pedagang', 'Jalan S. Suparman Lr. Tukiman Rt 58 Rw 06 Palembang', '085379021822', 'Finalis Bujang fasilkom UNSRI 2017,Juara 1 sayembara logo HMIF UNSRI', 'Futsal', 'Olahraga', '3.01', 168, 70, 'tidak ada', 'Menjadi bujang kampus sumatera selatan dan ingin menambah ilmu dan pengalaman baru.', 'BGK 2018 merupakan wadah bagi mahasiswa di sumatera selatan untuk mengembangkan diri tentunya untuk menambah wawasan agar menjadi pribadi yang berilmu dan beretika yang baik', 'jodi alhafiz', '085764136946', 'Palembang,24 Desember 1997', 'laki-laki', 'Islam', 'Universitas Sriwijaya', 'Teknik Informatika', 5, 1),
(18, 'anistasyaps', '9ac7db4721dd274a1ce39d5ef5cfb93d', 'Anistasya Permata Syafira', 'Tasya', 'Jalan Nusantara, Gang Buntu. Kostan Pondok Lestari. Indralaya - Sumsel', '081367246164', 'tsyafira39@gmail.com', 'MUHAMMAD SYAFIK', 'DEWI RASTUTI', 'Pensiunan', 'Jalan A. yani no.35 Kesambe Baru, Curup Timur. Kab. Rejang Lebong - Bengkulu', '08127818600', '1.	The best performance StoryTelling Competition MEDC 2016\r\n\r\n2.	Juara 2 solosong Umum putri se.Prov Bengkulu 2016\r\n\r\n3.	Juara 1 Solosong Putri Festival GAS se-Prov Bengkulu 2016\r\n\r\n4.	Juara 1 English singing competition tingkat umum 2017\r\n\r\n5.	Juara 2 Nasyid Tingkat Prov.Bengkulu Cendana Fair 2017\r\n\r\n6.	The Best Costume StoryTelling Competition se- sumbagsel NEWS 2017\r\n\r\n\r\n7.	Juara 1 Lagu Solo Daerah seKab.Rejang Lebong 2017\r\n\r\n\r\n8.	Perwakilan Delegasi Bengkulu ISYF 2017\r\n\r\n\r\n9.	Juara 2 Story Telling Sec-ionare sesumbagsel 2017\r\n\r\n10. Juara 2 story telling Haflah Muharram se.Prov Bengkulu 2017\r\n\r\n11. Juara 1 Tari Kreasi Daerah HUT KOTA CURUP 2017\r\n\r\n\r\n12. Juara 3 band REBORN ROCK FESTIVAL 2018\r\n\r\n13. Delegasi Paguyuban Pelajar Istimewa 2018\r\n\r\n14. Favorit Dewan Juri Unjuk Bakat WBA 2018\r\n\r\n15 . Juara 2 Solosong MathFes se-Sumsel 2018\r\n', 'Menyanyi, Menari', 'Menyanyi, Menari', '-', 52, 158, 'tidak ada', 'menambah eksplorasi pengalaman, relasi, dan kegiatan. berbagi ilmu dan menerapkan ilmu tersebut terhadap lingkungan sekitar dan masyarakat. ', 'BGK adalah wadah mahasiswa dan mahasiswi yang saling bertukar pikiran. penambahan ilmu baru yang bermanfaat, karakter, dan tentunya bersosialisasi. disini belajar, berloyalitas, bertanggung jawab, berkomitmen. dan belajar seyogya yogyanya manusia. yang tentunya sebagai motivasi dan pengembangan diri untuk terus maju menjadi pribadi yang lebih baik daripada sebelumnya.', '  Ricki ', '08276314867', 'Bengkulu & 19 Oktober 2000', 'perempuan', 'Islam', 'Sriwijaya', 'Ilmu Hukum', 1, 1),
(19, 'Tia kinah', 'd4388c4d4b47c6655b16fe5b13184b32', 'Utiah sakinah', 'Yayak', 'Jalan lebak rejo no 847 ,sekip', '089606591575', 'utiah.sakinah@gmail.com', 'Zaki indra kesuma jaya', 'Silva open hartiek', 'Wiraswatsa', 'Jalan sangkuriang no 27, prabumulih timur', '0823 7262 2970', 'Lomba menyanyi tahun 2017 & 2018, lomba pemilihan pageant difakultas 2017,puteri terbaik pbak 2017, lomba baca puisi 2013', 'Menyanyi dan baca puisi', 'Nyanyi', '3,59', 157, 47, '', 'Motivasi.\r\n1. Membuka wawasan dan ikut dalam organisasi.\r\n2. Mencari pengalaman untuk mengasah life skill dalam diri.\r\n3. Belajar dalam berorganisasi agar mampu bersaing di era millenial saat ini.', 'Pendapat.\r\n1. BGK merupakan wadah bagi para Mahasiswa untuk mengasah life skill.\r\n2. BGK adalah organisasi yang sangat interaktif dan selalu mengadakan Event bagi Mahasiswa \r\n3. BGK merupakan tolak ukur untuk mahasiswa agar mampu bersaing di dunia kerja.', 'Vandra baaligho biniat', '081366357697', 'Prabumulih 28 september 1999', 'perempuan', 'Islam', 'UIN Raden Fatah Palembang', 'Komunikasi penyiaran islam', 3, 1),
(20, '06031181621062', 'f260bb844228b74287c988d5b3399ebf', 'Anggun Selliani', 'Anggun', 'jl.nusantara kos pondok mahasiswa indah, inderalaya', '085669853860', 'anggunselliani@gmail.com', 'Muhammad s', 'Nelly wati', 'Wiraswasta', 'Pagaralam', '085788423832', 'Juara 1 tilawatil qur\'an tahun 2013', 'Badminton, traveling', 'Tilawah, menyanyi', '3.53', 164, 53, '', 'Melihat banyaknya orang-orang yang tidak hanya berintelektualitas tapi sekaligus juga dapat memberi kebermanfaatan kepada orang lain membuat saya termotivasi ingin mengikuti PBGK dan ingin bergabung dengan orang orang hebat didalamnya. ', 'BGK adalah suatu ajang dimana setiap mahasiswa/i dapat menyalurkan bakatnya yang beragam sehingga dapat juga melatih kepercayaan diri. ', 'Ayu Novitasari', '+6285377037479', 'Pagaralam,  11 Agustus 1998', 'perempuan', 'Islam', 'Universitas Sriwijaya', 'Pendidikan Ekonomi ', 5, 1),
(21, 'trimeliasari', '30e3ffc43cb373c863b3cdce9f2bbaad', 'Tri Meliasari', 'Meli', 'Jl. Mayorzen lr. Iwari 1 no. 45 RT 34 RW 01 Kelurahan Sei Selincah Kecamatan Kalidoni, Palembang, Sumatera Selatan', '089624557578', 'trimeliasari@gmail.com', 'Ali Udin', 'Susilawati', 'Guru', 'Jl. Mayorzen lr. Iwari 1 no. 45 RT 34 RW 01 Kelurahan Sei Selincah Kecamatan Kalidoni, Palembang, Sumatera Selatan', '081278285937', 'Perwakilan Sumatera Selatan dalam lomba Musik Tradisional ajang Festival Lomba Seni Siswa Nasional (FLS2N) 2013, Juara 3 Vocal Group FLS2N 2012, 12 Besar Erlangga English Speech Contest 2014, Juara 1 Lomba Band SMA Xaverius 3 Palembang 2014', 'Bernyanyi, Bermain Gitar, Membaca Novel', 'Bernyanyi', '3,06', 159, 55, '-', 'Motivasi saya mengikuti PBGKSS 2018 adalah melatih diri saya untuk belajar dengan sungguh-sungguh bagaimana saya bisa menjadi seseorang yang mendapatkan dirinya bisa berubah lebih baik, lebih kompeten, dan berkembang baik itu secara softskill maupun hardskill melalui suatu organisasi yaitu BGKSS ini. Saya sebagai seorang mahasiswi ingin berupaya dan membuktikan bahwa di dalam organisasi ini, saya bisa mengeluarkan semangat juang saya untuk menjadi pengorganisasi yang baik yaitu pengorganisasi yang mampu dengan baik bekerja di dalam suatu tim, berakhlak, beretika, bertanggungjawab atas kewajiban yang diemban dan juga tentunya bisa berpola pikir lebih baik serta matang lagi dengan adanya segala pembelajaran dari BGKSS nantinya apabila insyaallah saya terpilih.', 'Menurut saya, PBGKSS 2018 adalah program yang sangat baik sekali untuk dilaksanakan. PBGKSS menjadi penjembatan bagi mahasiswa/i Sumatera Selatan untuk dapat mengeksplorasikan diri mereka lebih baik lagi, berbondong-bondong berjuang memperlihatkan segala skill dan kepantasan diri yang positif agar dapat terpilih sebagai duta pendidikan dan budaya Sumatera Selatan. Banyaknya stand pendaftaran yang disediakan PBGKSS tentunya mempermudah langkah pendaftar sehingga memilih stand yang jaraknya lebih dekat dengan pendaftar tersebut, lalu juga mengenai berbagai promo pendaftaran BGKSS yang menjadi salah satu daya tarik, dan masih banyak lagi hal positif dari PBGKSS ini.', 'Oka Kurniasari', '08117826700', 'Palembang, 26 Mei 1999', 'perempuan', 'Islam', 'Universitas Sriwijaya', 'Teknik Kimia', 5, 1),
(22, 'Ariinannisa', '71e8f0fc1c469b83990d7617e2342f97', 'Arin Annisa', 'Arin', 'Jl.Payodurian 2 no.22A rt.58 rw.01 perumnas sako', '081368654981', 'arinannisa9797@gmail.com', 'Herman Syahril', 'Puji Rohyati', 'Guru', 'Jl.payodurian 2 no.22A rt.58 rw.01 perumnas sako ', '081532750564', 'Finalis Gadis Fakultas Ilmu Tarbiyah & Keguruan Tahun 2017', 'Travelling, Menari', 'Menari', '3,75', 160, 60, 'Magh', 'Mengikuti pemilihan BGKS\'18 merupakan keinginan saya sendiri, dengan alasan saya ingin ikut terlibat menjadi anggota ikatan bujang gadis kampus sumsel, mengembangkan kemampuan saya yang tidak pernah saya dapatkan di bangku sekolah,menjalin relasi lebih luas sehingga wawasan dan pengetahuan saya akan terus bertambah, saya juga ingin terlibat sebagai muda produktif dan mengharumkan sumatera selatan. Karena sebaik-baik manusia adalah yang bermanfaat bagi manusia lainnya.', 'BGKS merupakan wadah yang didalamnya terdapat orang-orang yang smart, kreatif inovatif serta memiliki pengetahuan di bidang pendidikan. BGKS merupakan icon muda/i di bidang pendidikan dan seni. BGKS juga memiliki berbagai macam program kerja yang juga sangat menarik namun tetap melibatkan pendidikan dan prestasi, menurut saya kegiatan-kegiatan yang diselenggarakan oleh  BGKS bisa memicu kecerdasan masyarakat sekitar.', 'Puji Rohyati', '081532750564', 'Palembang, 09 Juli 1997', 'perempuan', 'Islam', 'UIN Raden Fatah Palembang', 'Manajemen Pendidikan Islam', 7, 1),
(23, 'bungabyz', '5dca80780ff27632a442bfc3996a5a9f', 'Bunga Yuza Zulkarnain', 'Bunga', 'Perumahan Pondok Palem Indah Blok E1, No. 14, Kel. Talang Kelapa, Kec. Alang-Alang Lebar, Palembang, Sumatera Selatan.', '081369134697', 'bungabyz@gmail.com', 'Zanzibar Zulkarnain', 'Yuli Margareta', 'POLRI', 'Perumahan Pondok Palem Indah Blok E1, No. 14, Kel. Talang Kelapa, Kec. Alang-Alang Lebar, Palembang, Sumatera Selatan.', '081373101515', 'Juara 2 News Reader (Dallas Solidarity Competition 2016), Juara 2 Teater (The 3rd Teenagers Competition Of Mandupa), Harapan 1 Gadis Palembang 2017.', 'Menari dan Membaca', 'Menari', '-', 165, 57, '-', 'Ingin ikut serta mengambil bagian dalam pengembangan pendidikan dan budaya di Sumatera Selatan, menggali potensi diri khususnya dalam kegiatan keorganisasian, serta menambah relasi.', 'Menurut pandangan saya, Bujang Gadis Kampus Sumatera Selatan merupakan wadah kreativitas bagi para mahasiswa untuk mengembangkan hal hal positif yang ada disekitar, sehingga dapat menginspirasi serta bermanfaat bagi banyak pihak. Oleh karena ktu, sangat disayangkan jika saya melewatkan kesempatan mengikuti pemilihan Bujang Gadis Kampus Sumatera Selatan tahun 2018 ini.', 'Imel', '082258348287', 'Palembang, 9 Juni 1999', 'perempuan', 'Islam', 'Universitas Sriwijaya', 'Manajemen', 1, 1),
(24, 'junidaputra_', '03328fcc23f3938a10b19d1aee8368d5', 'Junida Putrabrata', 'Jun', 'Jalan Mayor Zen Perumahan YuriPark NO.C2 RT.34/02 Palembang', '0877-9498-9795 ', 'junidaputra8471@yahoo.com', 'Aidhilluddin Fitri', 'Cucu Amalullah', 'Swasta', 'Jalan Mayor Zen Perumahan Yuri Park NO.C2 RT.34/02 Palembang', '0878-6999-1974', 'Harapan 1 Lomba Mading BNN Tingkat SMA (2014), Favorit Bujang FKM UNSRI (2017)', 'Menyanyi, menulis cerpen', 'Menari, dan Menyanyi.', '3,05', 170, 80, '-', 'Saya ingin mengembangkan kemampuan, potensi yang ada didalam diri saya, kemudian saya mengikuti BGK ini saya ingin menjadi contoh baik bagi seluruh kaula muda yang ada di sumatra selatan, kemudian saya ingin membanggakan kedua orang tua saya dan saya ingin lebih bermanfaat lagi bagi orang lain karena sebaik-baik manusia ialah manusia yang bermanfaat bagi orang lain.', 'BGK ini adalah suatu tempat dimana didalamnya terdapat banyak sekali orang-orang hebat yang senantiasa menginspirasi. BGK juga membantu meningkatkan pendidikan di sumatera selatan, yang dimana orang-orang hebat didalamnya yang senantisa mencontohkan hal-hal baik yang dapat memacu motivasi mahasiswa/i yang ada di sumatera selatan menjadi lebih baik lagi kedepannya. ', '-', '-', 'Bandung, 11 Juni 1998', 'laki-laki', 'Islam', 'Universitas Sriwijaya', 'Ilmu Kesehatan Masyarakat', 5, 1),
(25, 'drefinia', '500aa4ac7407772b7e987dfcee4da312', 'Drefinia Nova Lestarie', 'Fini', 'Lorong Yakin 4, Karya Jasa 2, Plaju', '082181492215', 'drefinia99@gmail.com', 'Sudairi', 'Misnah', 'Pensiunan BUMN & Ibu Rumah Tangga', 'Komplek PLTA Bsai, Sumberjaya, Lampung Barat', '081541012517', 'Finalis FIKSI tingkat Nasional (2016), Juara 2 OSN Kebumian tingkat kabupaten (2017), Juara 1 FLS2N Desain Poster Putri (2017), Finalis Creanovation Awards Udinus tingkat nasional (2017)', 'Membuat doodle', 'Menari', '86 (SKHU)', 163, 56, '-', 'Motivasi saya mengikuti BGK yaitu untuk menambah pengalaman, menambah relasi, serta mengasah hard skill dan soft skill yang ada dalam diri saya.', 'Menurut saya, BGK ialah sebuah media untuk mengasah potensi yang ada dalam diri seseorang dan tempat belajar bagaimana cara berorganisasi yang baik.', 'Dervina', '085606195552', 'Palembang, 5 November 1999', 'perempuan', 'Islam', 'Universitas Sriwijaya', 'Administrasi Negara', 1, 1),
(26, 'zahizan26', 'a3ba8ba41030e26bc92b596c4af4335d', 'M.Zahizan Putra', 'Izan', 'Jln.Lintas Timur Km.40 Dusun III Desa Tanjung Gelam Kec.Indralaya Kab.Ogan Ilir', '082175210764 (Hp) ', 'm.zahizanputra26@gmail.com', 'Kailani', 'Nazila', 'PNS (Ayah), Swasta (Ibu)', 'Jln.Lintas Timur Km.40 Dusun III Desa Tanjung Gelam Kec.Indralaya Kab.Ogan Ilir', '085268628999', 'Juara 1 Marching Band Gebyar Smansagel ke-4, Juara 2 Marching Band Display Smanda Event ke-6, Juara 3 Marching Band Kejuaraan Hari Sumpah Pemuda 2015 oleh KODIM 0418 dan KADISDIKPORA Kota Palembang, Juara 2 Display Divisi Umum Kejuaraan SOMC 2016', 'Bermain Terompet, Berenang, Bermain Badminton ', 'Memainkan alat musik Terompet', '3.27', 171, 53, '-', 'Panggilan hati untuk menjadi pribadi yang berkarakter baik, dapat berorganisasi dengan orang-orang yeng memiliki kreativitas dan motivasi yang tinggi, serta dapat ikut serta dalam memberikan nilai positif, semangat positif kepada banyak orang bahwa saya generasi muda yang peduli akan budaya diri sendiri yaitu Sumatera Selatan.', 'Menurut saya, Ikatan Bujang Gadis Kampus Sumatera Selatan adalah suatu organisasi yang memiliki visi dan misi yang jelas, serta berkontribusi dalam setiap kegiatan yang ada. ', 'Nazila', '081367575905', 'Indralaya, 26 Oktober 1999', 'laki-laki', 'Islam', 'Universitas Sriwijaya', 'Peternakan', 3, 1),
(27, 'renimeylindaa', 'b609d618dbd7dae2f69e3dbac1295fd0', 'Reni Meilinda', 'Mei', 'Jalan inspektur marzuki rt03 rw08', '085769180882', 'renimeilinda6@gmail.com', 'Rozali', 'Erni yuhana', 'Wiraswasta', 'Pakjo', '085273846825', '- Peserta Olimpiade Sains Madrasah TK.Nasional\r\n- TOP 50 duta genre', 'Membaca', 'Storytelling,ceramah,monolog', '2,85', 157, 50, '-', 'Motivasi saya mengikuti bgk karena saya ingin menjadi generasi muda yang mengispirasi,berkualitas,dan berperan aktif dalam mempromosikan pendidikkan dan budaya di SUMSEL', 'BGK merupakan wadah untuk bisa menjadi pribadi yang bisa bermanfaat bagi orang lain', 'Rozali', '085273174265', 'Palembang , 6 Mei 1998', 'perempuan', 'Islam', 'UNSRI', 'Kedokteran Gigi', 5, 1),
(28, 'ayusteger', '18fc47328d3ebb7680291ede9ab0f3f8', 'Siti Ayu Gerhani Rahayu', 'Ayu', 'Jl.Jaya No 1557 RT 30 RW 09 Plaju Palembang', '085664790759', 'sitiayugr@gmail.com', 'Suhendar', 'Desti Natalinda', 'Swasta', 'Jl.Jaya No 1557 RT 30 RW 09 Plaju   Palembang', '085379150260', 'Juara 1 Lomba Photography EFFECT 2016,Juara 3 Akustik Chemical Engineering  Art & Competition 2016,Finalis Gadis Polsri 2018', 'Membaca, Bernyanyi dan Bermain Musik', 'Bermain Biola', '3.36', 158, 42, '', 'Mengeksplorasi dan mengembangkan  kemampuan yang ada pada diri saya ,Melatih kemampuan di bidang Organisasi melalui Bujang Gadis Kampus dan memperluas relasi.', 'Semakin maju dan inovatif dilihat dari Program Kerja nya yang berhasil dan memberikan dampak positif bagi para peserta yang terlibat serta memberikan inspirasi kepada peserta didik lain nya di Sumatera Selatan', 'Desti Natalinda', '085379150260', 'Palembang,17 September 1997', 'perempuan', 'Islam', 'Politeknik Negeri Sriwijaya', 'Teknik Kimia Prodi Teknik Energi', 7, 1),
(29, 'Cessycamila', '17c3d073f337b33943929b716fe43514', 'Cessy Camila Amalya', 'Cessy', 'Komplek pertamina kenten no 9 ilir timur II, Palembang', '082186442554', 'cessycamila@gmail.com', 'H Subandi Z, S.H., M.H.', 'Hj Noviani Delia Roza', 'Karyawan BUMN', 'Komplek Pertamina Kenten no 9 Ilir Timur II Palembang', '081367322972', 'Best Delegate of Asean Youth Culture Exposure, Kuala Lumpur 2016.', 'Travelling', 'Public speaking', '3.14', 158, 50, '', 'Saya ingin mengukur seberapa jauh diri saya mampu untuk melakukan hal-hal yang baru yang bertolak belakang dari latar belakang saya.', 'BGK adalah sebuah organisasi yang mewadahi mahasiswa yang berintelektual tinggi, berkepribadian yang baik dan berpenampilan menarik di wilayah Sumatera Selatan', 'Verina vrilyana', '081367932114', 'Palembang & 8 Juni 1998', 'perempuan', 'Islam', 'Universitas Sriwijaya', 'Akuntansi', 7, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`no_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `no_peserta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `fk_id_peserta` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`no_peserta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
