-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2017 at 10:33 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ukk2017_ronypermadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` varchar(13) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `noisbn` varchar(13) NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `penerbit` varchar(45) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `stok` int(3) NOT NULL,
  `harga_pokok` float NOT NULL,
  `harga_jual` float NOT NULL,
  `ppn` int(2) NOT NULL,
  `diskon` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` longtext NOT NULL,
  PRIMARY KEY  (`id_buku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `noisbn`, `penulis`, `penerbit`, `tahun`, `stok`, `harga_pokok`, `harga_jual`, `ppn`, `diskon`, `foto`, `keterangan`) VALUES
('9789792959857', 'Sapu Bersih Soal Ujian Fisika Smp/Mts Kelas VII,VIII,IX', '9789792959857', 'Yani Oktavia Dan Agus Kamaludin', 'ANDI OFFSET', '2017', 100, 60000, 65000, 10, 5, '9789792959857_smp-mts_kl_7_8_9_sapu_bersih_soal_ujian_fisika_ed.lkp.jpeg', 'Buku Sapu Bersih Soal Ujian FISIKA SMP/MTs Kelas VII,VIII,IX dikhususkan untuk siswa SMP dalam menghadapi semua ujian baik Ulangan Harian (UH), Ujian Tengah Semester (UTS), Ujian Akhir Semester (UAS), Ujian Sekolah (US), Ujian Nasional (UN) atau Ujian Masuk SMA Favorit. Buku ini disusun dengan bahasa yang sederhana dan to the point sehingga menjadikan belajar FISIKA SMP menjadi lebih asyik dan enteng untuk dibaca dan dipahami.\r\nApa saja kelebihan buku ini?\r\nâ€¢	Teori praktis dengan konsep yang mudah\r\nâ€¢	Soal-soal pilihan, ter-update dan terlengkap\r\nâ€¢	Trik-trik cara praktis untuk mengerjakan dan menghafalnya\r\nâ€¢	Pembahasan secara cepat dan lengkap\r\nDengan mempelajari materi dan mengerjakan soal-soal yang dirancang khusus oleh penulis ini, diharapkan siswa da[at mengambil intisari dari tiap babnya dan sukses dalam mneghadapi segala ujian.\r\nYakinlah bersama kami, Anda pasti bisa!!! '),
('9786023757787', 'Top Sukses Juara US/M SD/MI 2017', '9786023757787', 'Uly Amalia & Anggia Eka Purwanti', 'Grasindo', '2017', 89, 50000, 55000, 10, 5, 'sukses_juara_sd.jpg', 'Ujian Sekolah (US) merupakan jembatan bagi kawan-kawan yang saat ini berada di tingkat akhir Sekolah Dasar (SD), menuju ke tingkat pendidikan yang lebih tinggi, yaitu Sekolah Menengah Pertama (SMP). Agar kawan-kawan siap untuk menghadapi US tahun ini, buku Top Sukses Juara US SD/MI hadir untuk mendampingi setiap persiapan yang akan kawan-kawan lakukan. Banyak berlatih mengerjakan soalsoal latihan yang tersedia di buku ini, baik contoh soal di tiap bab mata pelajaran, soal bahas US 2016, maupun soal prediksi US 2017, niscaya dapat meningkatkan kemampuan kawan-kawan dalam menyelesaikan berbagai tipe soal dengan tingkat kesulitan berbeda. Impian kawan-kawan untuk menjadi siswa siswi di SMP favorit pun akan menjadi kenyataan. Selamat berlatih! '),
('9789792960402', 'Super Soal Matematika Untuk Smp/Mts Kelas IX', '9789792960402', 'Examaster', 'Examaster', '2010', 100, 65000, 70000, 10, 5, '9789792960402_smp-mts_kl_9_super_soal_matematika_try_out_soal2.jpeg', 'Buku Super Soal Matematika untuk SMP/MTs kelas IX ini berisi beragam Soal try ouot dan latihan-latihan soal sesuai dengan kurikulum dan kisi-kisi ujian nasional matematika SMP/MTs. Pembahasan diuraikan secara sistematis dan rincian agar siswa dapat lebih memahami proses pengerjaan soal hingga mendapatkan solusi berupa jawaban yang diharapkan. Buku ini sekaligus merupakan suplemen buku â€œSapu Bersih Ujian Matematika SMP/MTsâ€ yang berfokus pada rangkuman teori dan konsep pokok matematika. Kedua buku ini saling melengkapi dalam rangka mempersiapkan siswa menghadapi ujian nasional matematika SMP/MTs. Harapannya, siswa menguasai materi dan mahir mengerjakan soal-soal matematika, yang pada gilirannya mempu meraih nilai maksimal dalam ujian nasional. '),
('9789792960129', 'Sapu Bersih Ujian Kimia Sma/Ma, Kelas X, Xi & Xii', '9789792960129', 'Agus Kamaludin', 'ANDI OFFSET', '2017', 100, 70000, 78000, 10, 5, '9789792960129_sma-ma_kl_10_11_12_sapu_bersih_ujian_kimia.jpeg', 'Buku Sapu Bersih Ujian KIMIA SMA/MA Kelas X.XI dan XII dikhususkan untuk siswa SMA dalam menghadapi semua ujian baik Ulangan Harian (UH), Ujian Tengah Semester (UTS), Ujian Akhir Semester (UAS), Ujian Sekolah (US), Ujian Nasional (UN) atau Ujian Masuk Perguruan Tinggi Favorit (UM dan SBMPTN). Buku ini disusun dengan bahasa yang sederhana dan to the point sehingga menjadikan belajar KIMIA SMA menjadi lebih asyik dan enteng untuk dibaca dan dipahami.\r\nApa saja kelebihan buku ini?\r\nâ€¢	Teori praktis dengan konsep yang mudah\r\nâ€¢	Soal-soal pilihan, ter-update dan terlengkap\r\nâ€¢	Trik-trik berupa cara praktis untuk mengerjakan dan menghafalnya\r\nâ€¢	Pembahasan secara cepat dan lengkap\r\nDengan mempelajari materi dan mengerjakan soal-soal yang dirancang khusus oleh penulis ini, siswa diharapkan dapat mengambil intisari dari tiap babnya dan sukses mengahadapi segala ujian.\r\nYakinlah bersama kami, anda pasti bisa!!! '),
('9786021179932', 'Kiat Sukses Melalui Kecerdasan Emosional dan Kemandirian Bel', '9786021179932', 'Dra. Wiwik Suciati, M.pd.', 'Rasi Terbit', '2017', 99, 70000, 75000, 10, 5, 'ID_RTE2017MTH01KSMKEDKB_C.jpg', 'Kemandirian dipengaruhi oleh dua faktor, yakni (faktor internal), faktor yang berasal dari dalam dan (faktor eksternal), faktor yang berasal dari luar individu. Faktor yang berasal dari dalam diri antara lain faktor kematangan usia, kekuatan iman dan taqwa serta intelegensi (kecerdasan) (Prasetya, 2006). Prestasi belajar adalah salah satu bentuk dari keberhasilan siswa, apakah tujuan pendidikan telah berhasil, karena prestasi belajar sebagai tolo ukur dan bukti dari hasil yang telah dicapai. Jika siswanya memperoleh prestasi yang rendah berarti tujuan pendidikan dan pembelajaran belum tercapai, sebaliknya jika prestasi belajarnya tinggi berarti tujuan pendidikan sebagian disekolah telah dinyatakan berhasil (Ahmad, 2009).Tingkat kecerdasan emosional seseorang diduga dapat berpengaruh terhadap kemandirian belajar siswa, sehingga prestasi belajarnya cendrung meningkat atau tinggi. '),
('9789792960372', 'Jujur (Jurus Juara) Un Sd/Mi, 100% Siap Masuk Smp Pilihan', '9789792960372', 'Tim Pena Eksakta', 'ANDI OFFSET', '2017', 100, 80000, 90000, 10, 5, '9789792960372_jujur_jurus_juara_un_sd-mi_100_siap_masuk_smp_pilihan.jpeg', 'Buku JUJUR (Jurus Juara) UN SMP/MTs hadir sebagai media belajar yang tepat dalam menyusun strategi dan berlatih mengahadapi UN. Penyajian buku ini dibahas secara urut, lengkap dan tuntas sesuai dengan kisi-kisi Ujian sekarang yang dibagi menjadi 4 tahapan, yaitu:\r\n-	Pendalaman materi\r\n-	Telaah ; Tipe Soal UN\r\n-	Uji Tipe Soal UN\r\n-	Prediksi UN\r\nBuku ini berisi banyak soal yang mampu membentuk kepercayaan diri dalam menghadapi UN tahun ini. '),
('9786023757626', 'Bedah Kisi-kisi US SD/MI 2017', '9786023757626', 'Tim Guru Kreatif', 'Grasindo', '2017', 96, 75000, 80000, 10, 5, '9786023757626_bedah-kisi-kisi-us-sd_mi-2017_1.jpg', 'Bedah Kisi-Kisi US SD 2017 merupakan buku yang dirancang untuk siswa agar dapat berlatih dan mempersiapkan diri menghadapi Ujian Sekolah SD/MI 2017. Buku ini disusun berdasarkan kisi-kisi Ujian Sekolah terbaru. Materinya sudah menjadi jaminan sebagai materi yang pasti keluar dalam Ujian Sekolah. '),
('9786023757633', 'Bedah Kisi-kisi UN SMP/MTs 2017', '9786023757633', 'Tim Guru Kreatif', 'Grasindo', '2017', 87, 80000, 85000, 10, 5, '9786023757633_bedah-kisi-kisi-un-smp_mts-2017_1.jpg', 'Bedah Kisi-Kisi UN SMP/MTs 2017 merupakan buku yang dirancang untuk siswa agar dapat berlatih dan mem persiapkan diri menghadapi Ujian Nasional SMP/MTs 2017. Buku ini disusun berdasarkan kisi-kisi Ujian Nasional terbaru. Materinya sudah menjadi jaminan sebagai materi yang pasti keluar dalam Ujian Nasional. '),
('9786023758425', 'Strategi Kuasai Matematika Kelas 4, 5, 6', '9786023758425', 'Tim Smart Nusantara', 'Grasindo', '2017', 100, 70000, 75000, 10, 5, 'ID_GRAS2017MTH02SKMK_C.jpg', 'Matematika merupakan salah satu mata pelajaran yang diujikan dalam Ujian Sekolah (US). Akan tetapi masih banyak siswa yang menganggap matematika adalah pelajaran yang menakutkan. Anggapan inilah yang menjadikan siswa menolak untuk belajar lebih dalam sehingga mengalami banyak kesulitan ketika harus menyelesaikan soal-soal matematika.Banyak berlatih, aktif bertanya di kelas, dan buat kegiatan belajar dalam kelompok merupakan beberapa cara yang dapat kamu lakukan untuk mengasah kemampuanmu di mata pelajaran matematika. Buku STRATEGI KUASAI MATEMATIKA SD/MI KELAS 4, 5, 6 dapat kamu jadikan sebagai bahan pembelajaran baik secara mandiri maupun kelompok. Ringkasan materi dari kelas 4 sampai kelas 6 yang disajikan secara singkat dan mudah dipahami, diharapkan dapat membantu kalian untuk mengingat kembali materi-materi yang telah dipelajari sebelumnya. Disajikan pula latihan soal dan bank soal UN matematika lengkap dengan kunci jawaban dan pembahasan yang mudah dipahami. Semakin banyak berlatih kamu akan semakin percaya diri untuk menghadapi soal-soal matematika di berbagai ujian, seperti ulangan harian, Ujian Tengah Semester, Ujian Kenaikan, maupun Ujian Sekolah. '),
('9786023758401', 'Strategi Kuasai Bahasa Inggris Kelas 4, 5, 6', '9786023758401', 'Tim Smart Nusantara', 'Grasindo', '2017', 100, 80000, 87000, 10, 5, 'ID_GRAS2017MTH02SKBIK_C.jpg', 'Bahasa Inggris merupakan mata pelajaran bahasa asing yang wajib dipelajari oleh siswa dari mulai tingkat Sekolah Dasar. Mendapatkan pemahaman materi Bahasa Inggris mulai dari tingkat dasar sangat penting dimiliki sebagai modal siswa di masa yang akan datang.Banyak berlatih, aktif bertanya di kelas dan buat kegiatan belajar dalam kelompok merupakan beberapa cara yang dapat kamu lakukan untuk mengasah kemampuanmu di mata pelajaran Bahasa Inggris. Buku STRATEGI KUASAI BAHASA INGGRIS SD/MI KELAS 4, 5, 6 dapat kamu jadikan sebagai bahan pembelajaran baik secara mandiri maupun kelompok. Ringkasan materi dari kelas 4 sampai kelas 6 yang disajikan secara singkat dan mudah dipahami. Diharapkan siswa semakin banyak memperoleh kemampuan pengembangan vocabulary (perbendaharaan kata), reading (membaca), writing (menulis) dan translating (menerjemahkan).Semakin banyak berlatih kamu akan semakin percaya diri untuk menghadapi soal-soal matematika di berbagai ujian, seperti ulangan harian, Ujian Tengah Semester, Ujian Kenaikan, maupun Ujian Sekolah. '),
('9786023758098', 'Strategi Jitu SBMPTN SOSHUM', '9786023758098', 'Tim Smart Eduka', 'Pt. Gramedia Widiasarana', '2017', 99, 67000, 70000, 10, 5, 'ID_GRAS2017MTH02SJSS1_C.jpg', '"STRATEGI JITU LOLOS SBMPTN SBMPTN adalah salah satu cara masuk ke Perguruan Tinggi Negeri favorit. Oleh karena itu, persiapan SBMPTN sangat perlu dilakukan. Hal itu berguna agar kamu mendapatkan nilai tinggi dan dapat bersaing dengan peserta SBMPTN lainnya. Buku ini membahas strategi yang bisa kamu terapkan dalam proses belajar. \r\n\r\nINFO PASSING GRADE PTN DAN CARA MENGHITUNGNYA Passing grade adalah satu ukuran standar yang diperoleh dari perhitungan sederhana terhadap hasil ujian SBMPTN yang menggambarkan perkiraan seorang peserta dapat memenuhi urutan peringkat kuota penerimaan jurusan yang dipilihnya tersebut."'),
('9786023758135', 'Strategi Cerdas Kupas Tuntas SBMPTN SAINTEK', '9786023758135', 'Tim Smart Nusantara', 'Grasindo', '2017', 100, 67000, 70000, 10, 5, 'ID_GRAS2017MTH02SCKTSS1_C.jpg', 'Buku STRATEGI CERDAS KUPAS TUNTAS SBMPTN SAINTEK ini hadir sebagai sumber pembelajaran bagi kalian siswa dan siswi SMA/MA untuk berlatih mengerjakan soal-soal yang paling sering muncul di SBMPTN. Buku ini menyediakan paket 5 tahun soal-soal SBMPTN ditambah 2 paket prediksi yang seluruhya dilengkapi dengan pembahasan, sehingga semakin memudahkan kalian untuk berlatih memecahkan berbagai tipe soal yang akan diujikan. Dalam buku ini pula kalian bisa mendapatkan informasi umum seputar SBMPTN, tata tertib SBMPTN, strategi lolos SBMPTN, strategi memilih jurusan kuliah, kisi-kisi SBMPTN dan petunjuk mengerjakan soal SBMPTN. Semua disajikan secara informatif, sehingga diharapkan kalian semakin percaya diri untuk menghadapi SBMPTN. '),
('9786023758128', 'Strategi Cerdas Kupas Tuntas SBMPTN SOSHUM', '9786023758128', 'Tim Smart Nusantara', 'Grasindo', '2017', 100, 70000, 75000, 10, 5, 'ID_GRAS2017MTH02SCKTSS_C.jpg', 'Buku STRATEGI CERDAS KUPAS TUNTAS SBMPTN SOSHUM ini hadir sebagai sumber pembelajaran bagi kalian siswa dan siswi SMA/MA untuk berlatih mengerjakan soal-soal yang paling sering muncul di SBMPTN. Buku ini menyediakan paket 5 tahun soal-soal SBMPTN ditambah 2 paket prediksi yang seluruhya dilengkapi dengan pembahasan, sehingga semakin memudahkan kalian untuk berlatih memecahkan berbagai tipe soal yang akan diujikan. Dalam buku ini pula kalian bisa mendapatkan informasi umum seputar SBMPTN, tata tertib SBMPTN, strategi lolos SBMPTN, strategi memilih jurusan kuliah, kisi-kisi SBMPTN dan petunjuk mengerjakan soal SBMPTN. Semua disajikan secara informatif, sehingga diharapkan kalian semakin percaya diri untuk menghadapi SBMPTN. '),
('9786023758081', 'Strategi Jitu SBMPTN SAINTEK', '9786023758081', 'Tim Smart Eduka', 'Grasindo', '2017', 87, 70000, 75000, 10, 5, 'ID_GRAS2017MTH02SJSS_C.jpg', 'STRATEGI JITU LOLOS SBMPTN SBMPTN adalah salah satu cara masuk ke Perguruan Tinggi Negeri favorit. Oleh karena itu, persiapan SBMPTN sangat perlu dilakukan. Hal itu berguna agar kamu mendapatkan nilai tinggi dan dapat bersaing dengan peserta SBMPTN lainnya. Buku ini membahas strategi yang bisa kamu terapkan dalam proses belajar. INFO PASSING GRADE PTN DAN CARA MENGHITUNGNYA Passing grade adalah satu ukuran standar yang diperoleh dari perhitungan sederhana terhadap hasil ujian SBMPTN yang menggambarkan perkiraan seorang peserta dapat memenuhi urutan peringkat kuota penerimaan jurusan yang dipilihnya tersebut. '),
('9786023758364', 'Primagama Smart Solution USM PKN STAN', '9786023758364', 'Tim Primagama', 'Grasindo', '2017', 100, 67000, 70000, 10, 5, 'ID_GRAS2017MTH02PSSUPS_C.jpg', 'Lulus USM PKN STAN merupakan impian setiap siswa SMA, selain belajar dengan giat dan tekun kita juga perlu mempersiapkan dan memerhatikan banyak hal. Setiap tahun peminat USM PKN STAN selalu meningkat dan sayangnya kuota PKN STAN tidak bisa menerima semua pendaftar. Sehingga, perlu adanya perjuangan yang sungguh-sungguh.Grasindo bekerjasama dengan PT Prima Edu Pendamping Belajar turut serta berpartisipasi membantu meningkatkan mutu pendidikan nasional, dengan mengembangkan inovasi sarana pendukung belajar yang diperlukan siswa. Oleh karena itu, Grasindo dan PT Prima Edu Pendamping Belajar menerbitkan buku Primagama Smart Solution Lolos USM PKN STAN yang berisi bahasan soal USM PKN STAN tahun 2014, 2015, dan 2016 yang dilengkapi dengan soal Prediksi USM PKN STAN.Buku ini diterbitkan dengan tujuan memberikan gambaran dan informasi kepada siswa untuk lebih mengenal karakter, tipe soal, dan tingkat kesulitan soal USM PKN STAN sesuai bidang studi yang diujikan dari tahun ke tahun. Buku ini diharapkan dapat membantu siswa untuk belajar mandiri dan siswa menjadi lebih siap dalam menghadapi USM PKN STAN di tahun berikutnya.Selamat belajar dan raih kesuksesan lolos USM PKN STAN.');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE IF NOT EXISTS `detail_pemesanan` (
  `kode_pemesanan` varchar(15) NOT NULL,
  `harga_pemesanan` double NOT NULL,
  `jumlah_pemesanan` double NOT NULL,
  `id_buku` varchar(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `detail_pemesanan`
--
DROP TRIGGER IF EXISTS `ukk2017_ronypermadi`.`pemesanan`;
DELIMITER //
CREATE TRIGGER `ukk2017_ronypermadi`.`pemesanan` AFTER INSERT ON `ukk2017_ronypermadi`.`detail_pemesanan`
 FOR EACH ROW BEGIN UPDATE buku SET stok=stok-NEW.jumlah_pemesanan WHERE id_buku=NEW.id_buku;
END
//
DELIMITER ;

--
-- Dumping data for table `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`kode_pemesanan`, `harga_pemesanan`, `jumlah_pemesanan`, `id_buku`) VALUES
('20170222-105004', 90000, 1, '9789792960372'),
('20170222-105004', 85000, 1, '9786023757633'),
('20170222-122715', 85000, 2, '9786023757633'),
('20170222-122715', 80000, 1, '9786023757626'),
('20170222-123618', 70000, 4, '9786023758135'),
('20170222-123618', 70000, 3, '9786023758098'),
('20170222-123618', 75000, 6, '9786023758128'),
('20170227-195141', 80000, 2, '9786023757626'),
('20170227-195141', 85000, 1, '9786023757633'),
('20170222-124802', 75000, 6, '9786023758128'),
('20170222-124958', 85000, 4, '9786023757633'),
('20170222-131313', 70000, 1, '9786023758135'),
('20170223-072333', 80000, 1, '9786023757626'),
('20170223-092555', 85000, 1, '9786023757633'),
('20170223-122048', 85000, 6, '9786023757633'),
('20170223-122048', 80000, 1, '9786023757626'),
('20170228-211731', 85000, 5, '9786023757633');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE IF NOT EXISTS `kasir` (
  `id_kasir` int(2) NOT NULL auto_increment,
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `status` varchar(1) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(45) NOT NULL,
  `akses` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_kasir`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama`, `alamat`, `telepon`, `status`, `username`, `password`, `akses`, `foto`) VALUES
(1, 'Rony Permadi', 'Klaten', '085602083990', '2', 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 1, 'admin-no-user-image.gif'),
(2, 'Febri Setiyawan', 'Playen', '08567899089', '2', 'febri', '*43211A5853F8DA9D9EFA897CF145B60FD17B81D3', 2, 'febri-no-user-image.gif'),
(14, 'Bayu Pamungkas', 'Wonosari', '085687956464', '2', 'bayu', '*A78392C9E052DA765B802E552B64B828D5E08212', 5, 'bayu-no-user-image.gif'),
(5, 'Ronni Pratama', 'Playen', '08768769877', '1', 'ronni', '*A72A582412907A0169A24000BE71A2639CF41B39', 2, 'ronni-no-user-image.gif'),
(7, 'Fitria Azizah', 'Karangmojo', '085602083990', '2', 'aftrzh27', '*8F0C1021E4AA08BA3C16C087C6E7B3C3B2745A22', 1, 'aftrzh27-no-user-image.gif'),
(8, 'Rio Ilham', 'Playen', '08768769877', '2', 'rio', '*0D8E3BC100540E420507814EC63EDB5DF3231208', 2, 'rio-no-user-image.gif'),
(9, 'Uswatul Ummah', 'Karangmojo', '08768769877', '1', 'ummah', '*A464992E9BFB44086CAC49C8F56BDA1B2F3A9C4C', 3, 'ummah-no-user-image.gif'),
(10, 'Amien Choir', 'Patuk', '08768769877', '2', 'amien', '*957CB8D105D768FE6D77D1037AED338CA27153BF', 4, 'amien-no-user-image.gif'),
(11, 'Ahmad Asnawi', 'Wonosari', '08978665675', '1', 'asnawi', '*EA0EB42580685810727CA4A44BEEF8631C6588BF', 5, 'asnawi-no-user-image.gif'),
(12, 'Alvin Reza Pratama', 'Semin', '0876567587653', '2', 'alvin', '*FBFD34E4561C6E9863547D3521D7A090554E00E6', 5, 'alvin-no-user-image.gif'),
(15, 'Ristanti Dwi Lestari', 'Karangmojo', '0856897988', '1', 'ristanti', '*8B18D20D102C91C382824D3BB2FF0CF795E5DBB6', 3, 'ristanti-no-user-image.gif'),
(16, 'Dewi Fatimah', 'Playen', '085687956', '2', 'dewi', '*30A3B77D80765E32A2AC7B17915178F07EFCB99E', 3, 'dewi-no-user-image.gif');

-- --------------------------------------------------------

--
-- Table structure for table `list_akses`
--

CREATE TABLE IF NOT EXISTS `list_akses` (
  `id_akses` int(2) NOT NULL,
  `akses` varchar(15) NOT NULL,
  PRIMARY KEY  (`id_akses`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_akses`
--

INSERT INTO `list_akses` (`id_akses`, `akses`) VALUES
(1, 'Super Admin'),
(2, 'Petugas Gudang'),
(3, 'Kasir'),
(4, 'Pemilik'),
(5, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(11) NOT NULL auto_increment,
  `nominal` double NOT NULL,
  `tgl_kirim` date NOT NULL,
  `bukti_transfer` text NOT NULL,
  `kode_pemesanan` varchar(15) NOT NULL,
  `id_kasir` varchar(2) NOT NULL,
  `bank` varchar(4) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `status` enum('Lunas','Belum Lunas') NOT NULL,
  PRIMARY KEY  (`id_pembayaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nominal`, `tgl_kirim`, `bukti_transfer`, `kode_pemesanan`, `id_kasir`, `bank`, `no_rek`, `status`) VALUES
(1, 90000, '2017-02-23', 'Screenshot_2017-01-05-19-08-24.png', '20170223-072333', '12', 'BRI', '555678', 'Lunas'),
(2, 95000, '2017-02-23', 'Screenshot_2017-01-05-19-08-24.png', '20170223-092555', '12', 'BRI', '555678', 'Lunas'),
(3, 600000, '2017-02-27', 'Screenshot_2017-01-05-19-08-24.png', '20170223-122048', '12', 'BRI', '359201026432000', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `kode_pemesanan` varchar(15) NOT NULL,
  `id_kasir` varchar(2) NOT NULL,
  `total` float NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY  (`kode_pemesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pemesanan`, `id_kasir`, `total`, `tanggal`) VALUES
('20170222-105004', '12', 185000, '2017-02-22'),
('20170222-122715', '12', 260000, '2017-02-22'),
('20170222-123618', '12', 950000, '2017-02-22'),
('20170227-195141', '12', 255000, '2017-02-27'),
('20170222-124802', '12', 460000, '2017-02-22'),
('20170222-124958', '12', 350000, '2017-02-22'),
('20170222-131313', '11', 80000, '2017-02-22'),
('20170223-072333', '12', 90000, '2017-02-23'),
('20170223-092555', '12', 95000, '2017-02-23'),
('20170223-122048', '12', 600000, '2017-02-23'),
('20170228-211731', '14', 435000, '2017-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE IF NOT EXISTS `pengiriman` (
  `kode_pemesanan` varchar(15) NOT NULL,
  `id_kasir` varchar(2) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `nohp` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`kode_pemesanan`, `id_kasir`, `nama`, `alamat`, `kota`, `provinsi`, `kodepos`, `nohp`) VALUES
('20170222-105004', '12', 'Alvin', 'Semin', 'Gunungkidul', 'Yogyakarta', '58862', '09876876978'),
('20170222-122715', '12', 'Alvin', 'Semin', 'Gunungkidul', 'Yogyakarta', '58862', '09876876978'),
('20170222-123618', '12', 'Alvin', 'Semin', 'Gunungkidul', 'Yogyakarta', '58862', '09876876978'),
('20170227-195141', '12', 'Alvin', 'Semin', 'Gunungkidul', 'Yogyakarta', '59877', '087675564564'),
('20170228-211731', '14', 'Bayu Pamungkas', 'Wonosari', 'Gunungkidul', 'Yogyakarta', '59877', '087675564564'),
('20170222-124802', '12', 'Alvin', 'Semin', 'Gunungkidul', 'Yogyakarta', '58862', '09876876978'),
('20170222-124958', '12', 'Alvin', 'Semin', 'Gunungkidul', 'Yogyakarta', '58862', '09876876978'),
('20170222-131313', '11', 'asnawi', 'Saptosari', 'Gunungkidul', 'Yogyakarta', '58862', '09876876987'),
('20170223-072333', '12', 'Raizal', 'Semin', 'Gunungkidul', 'Yogyakarta', '56789', '0858798768'),
('20170223-092555', '12', 'Raizal', 'Semin', 'Gunungkidul', 'Yogyakarta', '56789', '0858798768'),
('20170223-122048', '12', 'Raizal', 'Semin', 'Gunungkidul', 'Yogyakarta', '56789', '0858798768');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id_penjualan` int(6) NOT NULL auto_increment,
  `nonota` int(5) NOT NULL,
  `id_buku` varchar(13) NOT NULL,
  `id_kasir` varchar(2) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `total` float NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY  (`id_penjualan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Triggers `penjualan`
--
DROP TRIGGER IF EXISTS `ukk2017_ronypermadi`.`kurang_stok`;
DELIMITER //
CREATE TRIGGER `ukk2017_ronypermadi`.`kurang_stok` AFTER INSERT ON `ukk2017_ronypermadi`.`penjualan`
 FOR EACH ROW BEGIN UPDATE buku SET stok=stok-NEW.jumlah WHERE id_buku=NEW.id_buku;
END
//
DELIMITER ;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `nonota`, `id_buku`, `id_kasir`, `jumlah`, `total`, `tanggal`) VALUES
(1, 1, '9786023757787', '1', 2, 110000, '2017-02-23'),
(2, 1, '9786023758081', '1', 5, 375000, '2017-02-23'),
(3, 1, '9786023758081', '1', 4, 300000, '2017-02-23'),
(4, 2, '9786023757787', '9', 1, 55000, '2017-02-23'),
(5, 2, '9786023758098', '9', 1, 70000, '2017-02-23'),
(6, 2, '9786023758081', '9', 1, 75000, '2017-02-23'),
(7, 3, '9786023757787', '1', 5, 275000, '2017-02-28');
