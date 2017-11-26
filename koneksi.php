<?php
//Inisialisasi nilai-nilai parameter koneksi
$namaServer = "localhost"; //isikan sesuai nama server anda
$namaPengguna = "root"; //isiskan sesuai nama pengguna basisdata anda
$password = "" ; //isikan sesuai password anda
$nama_db ="sdm";

//Membuat koneksi
$koneksi = mysqli_connect($namaServer, $namaPengguna, $password, $nama_db);
//memeriksa apakah koneksi sukses dilakukan
if($koneksi -> connect_error){
	die("koneksi gagal : ". $koneksi -> connect_error."<br>");
}


 ?>
