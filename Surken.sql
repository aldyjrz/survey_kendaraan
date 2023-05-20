/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.19-MariaDB : Database - survey_kendaraan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`survey_kendaraan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `survey_kendaraan`;

/*Table structure for table `tbl_gejala` */

DROP TABLE IF EXISTS `tbl_gejala`;

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(12) NOT NULL,
  `kode_kerusakan` varchar(12) NOT NULL,
  `gejala` text,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_gejala`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_gejala` */

insert  into `tbl_gejala`(`id_gejala`,`kode_gejala`,`kode_kerusakan`,`gejala`,`created_date`) values 
(1,'G001','K001','Mesin tidak mampu memberikan tenaga maksimal pada saat akselerasi atau menanjak','2023-05-18 22:00:00'),
(2,'G002','K001','Mesin membutuhkan waktu lama untuk dihidupkan atau bahkan mati secara tiba-tiba meski sudah distarter berkali-kali','2023-05-18 22:00:00'),
(3,'G003','K001','Jumlah bahan bakar yang digunakan oleh mesin menjadi lebih banyak dari biasanya','2023-05-18 22:00:00'),
(4,'G004','K001','Suara mesin terdengar lebih kasar atau bergetar keras dari biasanya','2023-05-18 22:00:00'),
(5,'G005','K001','Asap knalpot keluar berwarna hitam pekat dan berbau tidak sedap','2023-05-18 22:00:00'),
(6,'G006','K001','Terdapat bau yang tidak sedap di sekitar mesin atau di dalam kabin mobil','2023-05-18 22:00:00'),
(7,'G007','K001','Mesin tidak mampu menjaga kecepatan yang stabil atau mempertahankan putaran mesin yang sesuai','2023-05-18 22:00:00'),
(8,'G008','K001','Lampu check engine yang terletak di dashboard menyala dan tidak mati-mati','2023-05-18 22:00:00'),
(9,'G009','K001','Tekanan bahan bakar pada mesin tidak stabil atau terlalu rendah','2023-05-18 22:00:00'),
(10,'G010','K001','Terdapat kerusakan pada sistem katup atau pompa bahan bakar pada mesin','2023-05-18 22:00:00'),
(11,'G011','K002','Mobil sulit untuk berganti gigi, baik manual maupun otomatis','2023-05-18 22:00:00'),
(12,'G012','K002','Bunyi berisik atau berdengung yang keluar dari bagian transmisi saat mobil berjalan','2023-05-18 22:00:00'),
(13,'G013','K002','Gigi transmisi tidak merespon dengan baik atau terdapat gesekan antara gigi','2023-05-18 22:00:00'),
(14,'G014','K002','Mobil terasa bergetar atau goncangan yang tidak biasa saat transmisi beralih ke gigi lain','2023-05-18 22:00:00'),
(15,'G015','K002','Mobil kesulitan untuk melaju atau terasa tidak bertenaga','2023-05-18 22:00:00'),
(16,'G016','K002','Mobil bergerak mundur saat memasukkan gigi maju atau mundur, terutama pada transmisi otomatis','2023-05-18 22:00:00'),
(17,'G017','K002','Oli transmisi terlihat keruh atau berwarna kecoklatan, serta berbau hangus','2023-05-18 22:00:00'),
(18,'G018','K002','Lampu peringatan transmisi pada dashboard mobil menyala','2023-05-18 22:00:00'),
(19,'G019','K003','Suhu mesin naik secara tiba-tiba dan melebihi batas normal yang menyebabkan mesin overheating','2023-05-18 22:00:00'),
(20,'G020','K003','Air radiator bocor atau hilang secara tiba-tiba yang menyebabkan mesin kekurangan pendingin','2023-05-18 22:00:00'),
(21,'G021','K003','Suhu mesin naik saat mengendarai mobil di jalan tol atau di daerah yang bergelombang','2023-05-18 22:00:00'),
(22,'G022','K003','Radiator kotor, berkarat atau berdebu yang menyebabkan sirkulasi pendingin tidak optimal','2023-05-18 22:00:00'),
(23,'G023','K003','Tidak ada udara dingin yang keluar dari sistem pendingin mesin','2023-05-18 22:00:00'),
(24,'G024','K003','Suhu mesin berubah secara tiba-tiba ketika memasuki jalanan yang berbeda atau saat mobil bergerak dari kecepatan tinggi ke kecepatan rendah','2023-05-18 22:00:00'),
(25,'G025','K003','Mesin mengalami overheating setelah beberapa menit mengendarai mobil','2023-05-18 22:00:00'),
(26,'G026','K003','Munculnya bau amis atau bau aneh yang keluar dari sistem pendingin mesin','2023-05-18 22:00:00'),
(27,'G027','K004','Pedal rem terasa lunak atau keras, tergantung pada kerusakan yang terjadi pada sistem rem','2023-05-18 22:00:00'),
(28,'G028','K004','Bunyi mendengung atau berderit saat pedal rem ditekan','2023-05-18 22:00:00'),
(29,'G029','K004','Lampu peringatan rem menyala di dashboard menandakan ada kerusakan pada sistem rem','2023-05-18 22:00:00'),
(30,'G030','K004','Rem terasa licin atau slip saat menginjak pedal rem','2023-05-18 22:00:00'),
(31,'G031','K004','Terjadi gejala getar atau goyang pada mobil saat menginjak pedal rem','2023-05-18 22:00:00'),
(32,'G032','K004','Terdapat bau tidak sedap yang keluar dari sistem rem','2023-05-18 22:00:00'),
(33,'G033','K004','Pedal rem terasa jauh atau jarak pedal terlalu jauh','2023-05-18 22:00:00'),
(34,'G034','K004','Rem tidak berfungsi secara optimal atau membutuhkan waktu yang lama untuk berhenti','2023-05-18 22:00:00'),
(35,'G035','K005','Lampu atau perangkat listrik lainnya seperti radio atau AC tidak berfungsi atau mati','2023-05-18 22:00:00'),
(36,'G036','K005','Baterai sering mengalami kerusakan atau sulit untuk dicas','2023-05-18 22:00:00'),
(37,'G037','K005','Bunyi aneh atau tidak wajar dari mesin atau sistem listrik seperti suara gemeretak atau berisik','2023-05-18 22:00:00'),
(38,'G038','K005','Starter tidak berfungsi atau sering macet saat dihidupkan','2023-05-18 22:00:00'),
(39,'G039','K005','Mesin tidak mau hidup atau mati mendadak saat sedang digunakan','2023-05-18 22:00:00'),
(40,'G040','K005','Overheat atau panas berlebih pada sistem kelistrikan atau komponen lain, bisa jadi karena terlalu banyak arus listrik yang mengalir','2023-05-18 22:00:00'),
(41,'G041','K005','Adanya percikan api atau ledakan kecil pada sistem kelistrikan','2023-05-18 22:00:00'),
(42,'G042','K005','Terdapat kerusakan pada sistem pengapian atau sistem penyalaan','2023-05-18 22:00:00');

/*Table structure for table `tbl_kerusakan` */

DROP TABLE IF EXISTS `tbl_kerusakan`;

CREATE TABLE `tbl_kerusakan` (
  `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kerusakan` varchar(12) NOT NULL,
  `kerusakan` text NOT NULL,
  `created_date` varchar(64) NOT NULL,
  PRIMARY KEY (`id_kerusakan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kerusakan` */

insert  into `tbl_kerusakan`(`id_kerusakan`,`kode_kerusakan`,`kerusakan`,`created_date`) values 
(2,'K002','Kerusakan pada sistem transmisi','2023-05-18 22:00:00'),
(3,'K003','Masalah pada sistem pendingin','2023-05-18 22:00:00'),
(4,'K004','Kerusakan pada sistem rem','2023-05-18 22:00:00'),
(5,'K005','Kerusakan pada sistem kelistrikan','2023-05-18 22:00:00'),
(6,'K001','Kerusakan pada sistem injeksi bahan bakar','2023-05-18 19:00:13');

/*Table structure for table `tbl_penyebab` */

DROP TABLE IF EXISTS `tbl_penyebab`;

CREATE TABLE `tbl_penyebab` (
  `id_penyebab` int(12) NOT NULL AUTO_INCREMENT,
  `kode_penyebab` varchar(12) NOT NULL,
  `kode_kerusakan` varchar(12) NOT NULL,
  `kode_gejala` varchar(12) NOT NULL,
  `penyebab` text,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_penyebab`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_penyebab` */

insert  into `tbl_penyebab`(`id_penyebab`,`kode_penyebab`,`kode_kerusakan`,`kode_gejala`,`penyebab`,`created_date`) values 
(2,'P001','K001','G001','Aki lemah atau rusak, Kabel busi rusak atau kendor, Alternator rusak',NULL),
(3,'P003','K001','G003','Kerusakan pada sistem injeksi bahan bakar, Tekanan ban tidak sesuai','2023-05-18 22:00:00'),
(4,'P004','K001','G004','Sistem knalpot bocor atau rusak, Kerusakan pada sistem suspensi','2023-05-18 22:00:00'),
(5,'P005','K001','G005','Kerusakan pada sistem injeksi bahan bakar, Filter udara kotor atau mampet, Kerusakan pada sistem knalpot','2023-05-18 22:00:00'),
(6,'P006','K001','G006','Campuran bahan bakar terlalu kaya, filter udara kotor, sensor oksigen rusak','2023-05-18 22:00:00'),
(7,'P007','K001','G007','Kebocoran bahan bakar atau oli, sistem knalpot bocor','2023-05-18 22:00:00'),
(8,'P008','K001','G008','Masalah pada sistem bahan bakar, tekanan bahan bakar rendah, filter bahan bakar kotor, injektor kotor','2023-05-18 22:00:00'),
(9,'P009','K001','G009','Sensor kesalahan pada sistem bahan bakar, sistem kontrol emisi rusak','2023-05-18 22:00:00'),
(10,'P010','K001','G010','Fuel pump rusak, filter bahan bakar kotor','2023-05-18 22:00:00'),
(11,'P011','K002','G011','Katup atau pompa bahan bakar rusak, pengaturan injeksi yang salah','2023-05-18 22:00:00'),
(12,'P012','K002','G012','Masalah pada kopling, tekanan oli transmisi yang tidak cukup, sistem otomatis rusak','2023-05-18 22:00:00'),
(13,'P013','K002','G013','Sistem transmisi rusak, keausan pada gigi transmisi','2023-05-18 22:00:00'),
(14,'P014','K002','G014','Minyak transmisi kotor atau rendah, kopling rusak, gigi transmisi rusak','2023-05-18 22:00:00'),
(15,'P015','K002','G015','Filter udara kotor, Bahan bakar kotor atau tidak sesuai dengan spesifikasi, Kerusakan pada sistem injeksi bahan bakar, Kerusakan pada sistem pembakaran, Kerusakan pada sistem tenaga seperti turbocharger atau intercooler','2023-05-18 22:00:00'),
(16,'P016','K002','G016','Kekurangan atau kelebihan oli transmisi, Kerusakan pada sistem transmisi, Kopling slipping pada mobil manual','2023-05-18 22:00:00'),
(17,'P017','K002','G017','Oli transmisi kotor atau perlu diganti, Kerusakan pada sistem transmisi','2023-05-18 22:00:00'),
(18,'P018','K002','G018','Kerusakan pada sistem transmisi, Kebutuhan perawatan rutin pada sistem transmisi','2023-05-18 22:00:00'),
(19,'P019','K003','G019','Kekurangan atau kelebihan air radiator, Kerusakan pada sistem pendingin mesin seperti kipas, termostat, atau pompa air, Kebocoran pada sistem pendingin mesin','2023-05-18 22:00:00'),
(20,'P020','K003','G020','Kebocoran pada sistem pendingin mesin, Kerusakan pada tangki air radiator','2023-05-18 22:00:00'),
(21,'P021','K003','G021','Radiator tersumbat oleh kotoran atau kotoran, sistem pendingin bocor atau rusak, kipas radiator tidak berfungsi','2023-05-18 22:00:00'),
(22,'P022','K003','G022','Radiator kotor atau berdebu','2023-05-18 22:00:00'),
(23,'P023','K003','G023','Kompresor AC rusak, sistem pendingin kehabisan freon, kipas AC tidak berfungsi','2023-05-18 22:00:00'),
(24,'P024','K003','G024','Termostat yang rusak atau terblokir, sirkulasi pendingin yang buruk','2023-05-18 22:00:00'),
(25,'P025','K003','G025','Kipas radiator tidak berfungsi, pompa air rusak, termostat yang rusak atau terblokir, sirkulasi pendingin yang buruk','2023-05-18 22:00:00'),
(26,'P026','K003','G026','Kebocoran cairan pendingin mesin, kinerja radiator yang buruk, atau kerusakan pada sistem thermostat','2023-05-18 22:00:00'),
(27,'P027','K004','G027','Kebocoran pada sistem rem atau udara terperangkap dalam sistem rem','2023-05-18 22:00:00'),
(28,'P028','K004','G028','Cakram rem aus, kampas rem yang aus atau longgar, atau masalah pada sistem caliper','2023-05-18 22:00:00'),
(29,'P029','K004','G029','Sensor rem yang rusak, kabel atau konektor yang kendor, atau masalah pada sistem ABS','2023-05-18 22:00:00'),
(30,'P030','K004','G030','Kampas rem yang aus atau cakram rem yang terlalu polos','2023-05-18 22:00:00'),
(31,'P031','K004','G031','Kerusakan pada komponen sistem rem','2023-05-18 22:00:00'),
(32,'P032','K004','G032','Kampas rem sudah aus atau komponen lain','2023-05-18 22:00:00'),
(33,'P033','K004','G033','Kebocoran pada sistem rem atau kampas aus','2023-05-18 22:00:00'),
(34,'P034','K004','G034','Kampas rem aus, kebocoran pada sistem rem, atau komponen lain','2023-05-18 22:00:00'),
(35,'P035','K005','G035','Kerusakan pada sistem kelistrikan','2023-05-18 22:00:00'),
(36,'P036','K005','G036','Sistem pengisian yang bermasalah atau komponen lain yang bermasalah','2023-05-18 22:00:00'),
(37,'P037','K005','G037','Komponen yang aus atau bermasalah','2023-05-18 22:00:00'),
(38,'P038','K005','G038','Komponen yang aus atau bermasalah','2023-05-18 22:00:00'),
(39,'P039','K005','G039','Sistem kelistrikan yang bermasalah','2023-05-18 22:00:00'),
(40,'P040','K005','G040','Terlalu banyak arus listrik yang mengalir','2023-05-18 22:00:00'),
(41,'P041','K005','G041','Konsleting atau kabel yang terkelupas','2023-05-18 22:00:00'),
(42,'P042','K005','G042','Koil yang rusak atau kabel yang terkelupas','2023-05-18 22:00:00'),
(45,'P002','K001','G002','Aki lemah atau rusak, Kabel busi rusak atau kendor, Alternator rusak',NULL);

/*Table structure for table `tbl_solusi` */

DROP TABLE IF EXISTS `tbl_solusi`;

CREATE TABLE `tbl_solusi` (
  `id_solusi` int(11) NOT NULL AUTO_INCREMENT,
  `kode_solusi` varchar(12) NOT NULL,
  `kode_penyebab` varchar(12) NOT NULL,
  `solusi` text NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id_solusi`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_solusi` */

insert  into `tbl_solusi`(`id_solusi`,`kode_solusi`,`kode_penyebab`,`solusi`,`created_date`) values 
(1,'S001','P001','Bersihkan atau ganti filter udara, Ganti pompa bahan bakar, Perbaiki atau ganti sistem injeksi bahan bakar','2023-05-18 22:00:00'),
(2,'S002','P002','Ganti aki, Periksa dan ganti kabel busi yang rusak atau kendor, Ganti alternator','2023-05-18 22:00:00'),
(3,'S003','P003','Perbaiki atau ganti sistem injeksi bahan bakar, Periksa dan atur tekanan ban','2023-05-18 22:00:00'),
(4,'S004','P004','Perbaiki atau ganti sistem knalpot, Perbaiki atau ganti sistem suspensi','2023-05-18 22:00:00'),
(5,'S005','P005','Filter udara kotor atau mampet, Pompa bahan bakar rusak, Kerusakan pada sistem injeksi bahan bakar+I6','2023-05-18 22:00:00'),
(6,'S006','P006','Periksa dan bersihkan filter udara, ganti sensor oksigen jika diperlukan, sesuaikan campuran bahan bakar dengan standar pabrik','2023-05-18 22:00:00'),
(7,'S007','P007','Periksa dan perbaiki kebocoran bahan bakar atau oli, Periksa dan perbaiki sistem knalpot','2023-05-18 22:00:00'),
(8,'S008','P008','Periksa sistem bahan bakar, ganti filter bahan bakar jika diperlukan, bersihkan atau ganti injektor jika perlu','2023-05-18 22:00:00'),
(9,'S009','P009','Periksa sensor kesalahan pada sistem bahan bakar, periksa dan perbaiki sistem kontrol emisi','2023-05-18 22:00:00'),
(10,'S010','P010','Ganti fuel pump jika diperlukan, ganti filter bahan bakar jika perlu','2023-05-18 22:00:00'),
(11,'S011','P011','Periksa dan ganti katup atau pompa bahan bakar jika perlu, periksa pengaturan injeksi','2023-05-18 22:00:00'),
(12,'S012','P012','Periksa dan perbaiki masalah pada kopling, periksa tekanan oli transmisi, periksa dan perbaiki sistem otomatis jika perlu','2023-05-18 22:00:00'),
(13,'S013','P013','Periksa dan perbaiki sistem transmisi, ganti gigi transmisi yang rusak','2023-05-18 22:00:00'),
(14,'S014','P014','Periksa dan ganti minyak transmisi jika perlu, periksa dan ganti kopling jika perlu, ganti gigi','2023-05-18 22:00:00'),
(15,'S015','P015','Bersihkan atau ganti filter udara, Ganti bahan bakar dengan yang sesuai dengan spesifikasi, Perbaiki atau ganti bagian yang rusak pada sistem injeksi bahan bakar, Perbaiki atau ganti bagian yang rusak pada sistem pembakaran, Perbaiki atau ganti bagian yang rusak pada sistem tenaga','2023-05-18 22:00:00'),
(16,'S016','P016','Cek dan tambahkan atau kurangi oli transmisi sesuai dengan level yang direkomendasikan, Perbaiki atau ganti bagian yang rusak pada sistem transmisi, Perbaiki atau ganti bagian yang rusak pada kopling mobil manual','2023-05-18 22:00:00'),
(17,'S017','P017','Ganti oli transmisi, Perbaiki atau ganti bagian yang rusak pada sistem transmisi','2023-05-18 22:00:00'),
(18,'S018','P018','Perbaiki atau ganti bagian yang rusak pada sistem transmisi, Lakukan perawatan rutin pada sistem transmisi','2023-05-18 22:00:00'),
(19,'S019','P019','Cek dan tambahkan atau kurangi air radiator sesuai dengan level yang direkomendasikan, Perbaiki atau ganti bagian yang rusak pada sistem pendingin mesin, Perbaiki kebocoran pada sistem pendingin mesin','2023-05-18 22:00:00'),
(20,'S020','P020','Perbaiki kebocoran pada sistem pendingin mesin, Ganti tangki air radiator jika diperlukan','2023-05-18 22:00:00'),
(21,'S021','P021','Membersihkan atau mengganti radiator, memperbaiki atau mengganti sistem pendingin, memperbaiki atau mengganti kipas radiator','2023-05-18 22:00:00'),
(22,'S022','P022','Bersihkan radiator atau ganti dengan yang baru jika diperlukan','2023-05-18 22:00:00'),
(23,'S023','P023','Memperbaiki atau mengganti kompresor AC, mengisi ulang freon pada sistem pendingin, memperbaiki atau mengganti kipas AC','2023-05-18 22:00:00'),
(24,'S024','P024','Mengganti termostat yang rusak atau terblokir, memastikan sirkulasi pendingin yang baik','2023-05-18 22:00:00'),
(25,'S025','P025','Memperbaiki atau mengganti kipas radiator, memperbaiki atau mengganti pompa air, mengganti termostat yang rusak atau terblokir, memastikan sirkulasi pendingin yang baik','2023-05-18 22:00:00'),
(26,'S026','P026','Periksa radiator, thermostat, dan seluruh sistem pendingin mesin untuk menemukan kebocoran dan mengganti komponen yang rusak','2023-05-18 22:00:00'),
(27,'S027','P027','Periksa sistem rem dan pastikan tidak ada kebocoran. Bila terdapat udara terperangkap, sistem rem harus diisi dengan cairan rem dan udara dihilangkan menggunakan alat yang sesuai','2023-05-18 22:00:00'),
(28,'S028','P028','Periksa cakram dan kampas rem, pastikan semua komponen terpasang dengan benar dan ketat, ganti komponen yang aus atau longgar, dan pastikan sistem caliper berfungsi dengan baik','2023-05-18 22:00:00'),
(29,'S029','P029','Periksa sensor rem, kabel, dan konektor untuk memastikan semuanya terpasang dengan baik dan bekerja dengan benar. Pastikan sistem ABS berfungsi dengan baik','2023-05-18 22:00:00'),
(30,'S030','P030','Ganti kampas rem dan cakram rem yang aus dengan yang baru dan sesuai dengan spesifikasi pabrik','2023-05-18 22:00:00'),
(31,'S031','P031','Periksa dan ganti komponen yang rusak','2023-05-18 22:00:00'),
(32,'S032','P032','Periksa dan ganti komponen yang rusak','2023-05-18 22:00:00'),
(33,'S033','P033','Periksa dan ganti komponen yang rusak','2023-05-18 22:00:00'),
(34,'S034','P034','Periksa dan ganti komponen yang rusak','2023-05-18 22:00:00'),
(35,'S035','P035','Periksa dan perbaiki kerusakan pada kelistrikan','2023-05-18 22:00:00'),
(36,'S036','P036','Cek sistem pengisian dan komponen lainnya, ganti baterai jika diperlukan','2023-05-18 22:00:00'),
(37,'S037','P037','Periksa dan ganti komponen yang aus atau bermasalah','2023-05-18 22:00:00'),
(38,'S038','P038','Periksa dan ganti komponen yang aus atau bermasalah','2023-05-18 22:00:00'),
(39,'S039','P039','Periksa dan ganti komponen yang bermasalah pada sistem kelistrikan','2023-05-18 22:00:00'),
(40,'S040','P040','Periksa dan pastikan penggunaan daya listrik tidak melebihi kapasitas sistem','2023-05-18 22:00:00'),
(41,'S041','P041','Periksa dan ganti kabel yang terkelupas, cek kelistrikan secara keseluruhan','2023-05-18 22:00:00'),
(42,'S042','P042','Periksa dan ganti koil atau kabel yang terkelupas pada sistem pengapian atau penyalaan','2023-05-18 22:00:00');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) DEFAULT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `created_date` varchar(64) DEFAULT NULL,
  `modified_date` varchar(64) DEFAULT NULL,
  `level` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id_user`,`nama`,`username`,`password`,`email`,`created_date`,`modified_date`,`level`) values 
(1,'admin','admin','827ccb0eea8a706c4c34a16891f84e7b','aldi@indoarsip.co.id',NULL,NULL,'admin'),
(2,'Driver Coy','driver','827ccb0eea8a706c4c34a16891f84e7b','aldi@indoarsip.co.id',NULL,NULL,'user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
