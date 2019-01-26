# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2019-01-22 08:06:18
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "barang"
#

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) DEFAULT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL,
  `harga_laundry` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "barang"
#

INSERT INTO `barang` VALUES (1,'Baju Muslim Setelan','Pakaian',12000),(4,'Baju Muslim','Pakaian',10000),(7,'Bed Cover Besar','Perlengkapan',16000),(8,'Baju Panas','Pakaian',10000),(9,'Baju Tidur Wanita','Pakaian',9000),(10,'Boneka Jumbo','Perlengkapan',25000);

#
# Structure for table "daftar_pesanan"
#

DROP TABLE IF EXISTS `daftar_pesanan`;
CREATE TABLE `daftar_pesanan` (
  `id_daftar_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `no_pesanan` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_daftar_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "daftar_pesanan"
#

INSERT INTO `daftar_pesanan` VALUES (1,2,488178,'2019-01-04','selesai'),(2,4,922287,'2019-01-05','belum selesai'),(3,2,717240,'2019-01-14','belum selesai');

#
# Structure for table "detail_pesanan"
#

DROP TABLE IF EXISTS `detail_pesanan`;
CREATE TABLE `detail_pesanan` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL DEFAULT '',
  `qty` varchar(255) NOT NULL DEFAULT '',
  `harga` varchar(255) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `no_pesanan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

#
# Data for table "detail_pesanan"
#

INSERT INTO `detail_pesanan` VALUES (1,'2','Baju Muslim Setelan','1','12000','2019-01-04',465890),(2,'2','Baju Muslim','1','10000','2019-01-04',465890),(4,'2','Baju Muslim Setelan','1','12000','2019-01-04',391880),(5,'2','Baju Muslim','1','10000','2019-01-04',391880),(7,'2','Baju Muslim Setelan','1','12000','2019-01-04',828227),(8,'2','Baju Muslim','1','10000','2019-01-04',828227),(10,'2','Baju Muslim Setelan','1','12000','2019-01-04',670598),(11,'2','Baju Muslim','1','10000','2019-01-04',670598),(13,'2','Baju Muslim Setelan','1','12000','2019-01-04',431120),(14,'2','Baju Muslim','1','10000','2019-01-04',431120),(16,'2','Baju Muslim Setelan','1','12000','2019-01-04',480370),(17,'2','Baju Muslim','1','10000','2019-01-04',480370),(19,'2','Baju Muslim Setelan','1','12000','2019-01-04',996213),(20,'2','Baju Muslim','1','10000','2019-01-04',996213),(22,'2','Baju Muslim Setelan','1','12000','2019-01-04',556647),(25,'2','Baju Muslim Setelan','1','12000','2019-01-04',641121),(28,'2','Baju Muslim Setelan','1','12000','2019-01-04',488178),(33,'3','Bed Cover Besar','1','16000','2019-01-04',687067),(34,'4','Baju Muslim Setelan','2','12000','2019-01-05',922287),(35,'4','Baju Muslim','2','10000','2019-01-05',922287),(37,'3','Baju Muslim Setelan','4','12000','2019-01-05',171161),(40,'3','Baju Muslim Setelan','4','12000','2019-01-05',407261),(41,'2','Baju Muslim Setelan','1','12000','2019-01-07',186312),(42,'2','Baju Muslim','1','10000','2019-01-07',186312),(46,'2','Boneka Jumbo','1','25000','2019-01-07',186312),(59,'2','Baju Muslim Setelan','1','12000','2019-01-14',389442),(65,'2','Baju Muslim Setelan','1','12000','2019-01-14',848066),(71,'2','Baju Muslim Setelan','1','12000','2019-01-14',717240),(73,'2','Bed Cover Besar','3','16000','2019-01-14',717240),(76,'2','Bed Cover Besar','2','16000','2019-01-15',748978),(82,'2','Bed Cover Besar','2','16000','2019-01-15',655011),(86,'2','Baju Muslim Setelan','1','12000','2019-01-15',408812),(88,'2','Bed Cover Besar','2','16000','2019-01-15',408812),(92,'2','Baju Muslim Setelan','2','12000','2019-01-15',433567),(94,'2','Bed Cover Besar','2','16000','2019-01-15',433567),(98,'2','Baju Muslim Setelan','2','12000','2019-01-15',803347),(100,'2','Bed Cover Besar','2','16000','2019-01-15',803347),(101,'2','Baju Muslim Setelan','1','12000','2019-01-15',909986),(107,'2','Baju Muslim Setelan','1','12000','2019-01-15',884127);

#
# Structure for table "jenis_barang"
#

DROP TABLE IF EXISTS `jenis_barang`;
CREATE TABLE `jenis_barang` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "jenis_barang"
#

INSERT INTO `jenis_barang` VALUES (1,'Pakaian'),(2,'Perlengkapan Rumah tangga');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(15) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin','admin','admin','ciledug','089615506607','1'),(2,'yoda','yoda','Gabriel Yoda','Parung','089615506607','2'),(3,'rizal','rizal','Rizal Alfarizi ok','Parung Panjang','08976545','3'),(4,'juan','juan','Juan','Lab Ict','08976575','2');
