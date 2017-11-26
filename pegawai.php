<?php 
include "koneksi.php";

$sql ="CREATE TABLE Pegawai (id_pegawai int(6) UNSIGNED PRIMARY KEY, nama_depan varchar(30) UNIQUE NOT NULL, nama_belakang varchar(30), tanggal_lahir date, jenis_kelamin enum('p','w'), alamat varchar(150), gaji int(8) UNSIGNED  ) ";

$q = $koneksi -> query ($sql);
if ($q === TRUE){
	echo "Tabel Pegawai sukses dibuat";
}else{
	echo "Gagal membuat tabel.".$koneksi -> error;
}
$koneksi ->close();

?>