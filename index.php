<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<h1>SELAMAT DATANG</h1>
	</header>

	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="utama.php">Tambah Data</a></li>
			<li><a href="tampil.php">Tampil Data</a></li>
		</ul>
	</nav>
	<?php  
	if (isset($_GET['status'])):?>
	<p>
		<?php  
		if ($_GET['status'] == 'sukses') {
			echo "Pendaftaran siswa baru berhasil!";
		}else{
			echo "Pendaftaran gagal!";
		}

		?>
	</p>
	<?php endif;  ?>

</body>
</html>