<?php 
include "koneksi.php";

$sql = "CREATE DATABASE sdm";
$q = $koneksi ->query($sql);
if ($q === TRUE){
	echo "Basisdata 'sdm' sukses dibuat";
}else{
	echo "Gagal membuat Basisdata 'sdm'.". $koneksi -> error;
}
$koneksi -> close();

 ?>
