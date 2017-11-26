<?php 
include "koneksi.php";

$sql ="CREATE TABLE Departemen (kode_departemen char (4) PRIMARY KEY, nama_departemen varchar (100) UNIQUE NOT NULL, id_manager int(6) UNSIGNED, tanggal_mulai_manager date)";

$q = $koneksi -> query ($sql);
if ($q === TRUE){
	echo "Tabel Departemen sukses dibuat";
}else{
	echo "Gagal membuat tabel.".$koneksi -> error;
}
$koneksi ->close();

?>