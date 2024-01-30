
-- Database Backup --
-- Ver. : 1.0.1
-- Host : Server Host
-- Generating Time : Jan 28, 2024 at 22:22:43:PM


CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL AUTO_INCREMENT,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  PRIMARY KEY (`DetailID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO detailpenjualan VALUES
("1","1","3","1","3000.00"),
("2","1","2","1","15000.00"),
("5","3","15","1","19000.00"),
("6","3","7","1","21900.00"),
("9","5","14","1","19500.00"),
("10","5","6","1","13300.00"),
("11","5","7","1","21900.00"),
("12","7","2","1","15000.00"),
("13","7","3","2","3000.00"),
("14","8","6","1","13300.00"),
("15","8","10","1","16500.00"),
("16","8","17","2","32000.00"),
("17","8","14","2","19500.00"),
("18","8","8","3","7000.00"),
("19","8","20","4","29000.00"),
("20","9","8","2","7000.00"),
("21","9","2","2","15000.00"),
("22","9","9","2","7000.00");

CREATE TABLE `keranjang` (
  `KeranjangID` int(10) NOT NULL AUTO_INCREMENT,
  `ProdukID` int(10) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`KeranjangID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL AUTO_INCREMENT,
  `NamaPelanggan` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL,
  PRIMARY KEY (`PelangganID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO pelanggan VALUES
("3","umum","umum","456789009876"),
("4","nasywa","jalan merpati","085857972058"),
("5","risma","jalan dalung","0994637826223"),
("6","dikta","tabanan","234567654356"),
("7","vny","jalan resimuka","0987654567865");

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL AUTO_INCREMENT,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) NOT NULL,
  `PelangganID` int(11) NOT NULL,
  PRIMARY KEY (`PenjualanID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO penjualan VALUES
("5","2024-01-23","54700.00","4"),
("7","2024-01-23","21000.00","7"),
("8","2024-01-23","269800.00","6"),
("9","2024-01-28","58000.00","6");

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL AUTO_INCREMENT,
  `Barcode` varchar(25) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  `Stok` int(11) NOT NULL,
  PRIMARY KEY (`ProdukID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO produk VALUES
("2","8992907110017","Sari Roti Tawar","15000.00","20"),
("3","8996001600269","Le Minerale","3000.00","20"),
("4","8998009010231","Ultra Milk Coklat","6000.00","24"),
("5","8998866202725","Susu Milku Coklat","4000.00","12"),
("6","8992702000018","Indomilk Susu Kental Manis Putih","13300.00","20"),
("7","89686596465","LAYS RMPT LAUT 68G","21900.00","10"),
("8","89686598025","CHITATO SP PANGGANG 35G","7000.00","12"),
("9","7891000071823","NESCAFE CLASSIC","7000.00","12"),
("10"," 8886001100909","Energen Coklat 34 Gr Hgr","16500.00","16"),
("11","8997004301184"," OISHI UDANG PEDAS 70GR","7200.00","6"),
("12","8886015203115","GOOD TIME DOUBLE CHIP 80G","10500.00","4"),
("13","8888166336568","NISSIN CRISPY CRAKERS 225G","13300.00","10"),
("14","8992761136017","COCA COLA 1500mL","19500.00","30"),
("15","8998866607353","DAIA PUTIH BAG 900g","19000.00","30"),
("16","8993200661343","CIMORY JAMBU","11900.00","20"),
("17","8991906101170","DJARUM R BLACK CAPUCINO","32000.00","50"),
("18","8999999029333","SUNSILK NOURIS 80ML","15000.00","20"),
("19","8992753100309","FRISIAN FLAG GOLD PCK 6Ã—4","16000.00","20"),
("20","8998989300391","GUDANG GARAM SURYA PRO MILD","29000.00","30"),
("21","711844115057","ABC KECAP ASIN BTL 133m","7500.00","20");

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES
("1","nasywa ramadhani","admin","admin","1"),
("2","nasywa ramadhani","admin","admin","1"),
("5","Dikta","admin","nasywa","2");