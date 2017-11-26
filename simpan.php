<?php
include "koneksi.php";
if (isset($_POST ['simpan'])){

	$kode= $_POST ['kode_departemen'];
	$nama= $_POST ['nama_departemen'];
	$tanggal = $_POST ['tanggal_mulai_manager'];

	$sql = "INSERT INTO departemen (kode_departemen, nama_departemen, tanggal_mulai_manager) VALUE ('$kode', '$nama', '$tanggal')";
	$query = mysqli_query($koneksi,$sql);

}

?>