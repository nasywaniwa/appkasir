<?php 

if(empty($_GET['p'])){
    $title="Sistem Informasi Biaya Pendidikan";
    $konten="Konten/home.php";
}
else if($_GET['p']=='produk'){
    $title="Data produk ";
    $konten="Konten/produk.php";
}
else if($_GET['p']=='laporan'){
    $title="Laporan Sistem";
    $konten="konten/laporan.php";
}
else if($_GET['p']=='backup'){
    $title="backup Sistem";
    $konten="konten/backup.php";
}
else if($_GET['p']=='restore'){
    $title="Restore Sistem";
    $konten="konten/restore.php";
}

else if($_GET['p']=='pelanggan'){
    $title="Data Pelanggan ";
    $konten="Konten/pelanggan.php";
}

else if($_GET['p']=='user'){
    $title="Data User ";
    $konten="Konten/user.php";
}

// menu untuk transaksi
else if($_GET['p']=='tambah'){
    $title="tambah Penjualan Baru";
    $konten="Konten/tambah.php";
}
else if($_GET['p']=='tambah'){
    $title="tambah Penjualan Baru";
    $konten="Konten/tambah.php";
}

else if($_GET['p']=='histori'){
    $title="Histori Penjualan";
    $konten="Konten/histori.php";
}
else if($_GET['p']=='infojual'){
    $title="Informasi Detail Penjualan";
    $konten="Konten/infojual.php";
}
// akhir menu transaksi
else if($_GET['p']=='backup'){
    $title="Riwayat Pembayaran Siswa";
    $konten="Konten/backup.php";
}

else if($_GET['p']=='restore'){
    $title="Restore Sistem";
    $konten="Konten/restore.php";
}


// 
else{
    $title="HaLaman Tidak Ditemukan";
    $konten="Konten/404.php";
}