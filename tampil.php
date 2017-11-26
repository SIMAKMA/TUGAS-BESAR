<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<header>
		<h3>Isi Database</h3>
			<nav>
		<a href="utama.php">[+] Tambah Baru</a>
	</nav>

	<br>
	</header>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>Kode departemen</th>
			<th>Nama departemen</th>
			<th>Id Manager</th>
			<th>Tanggal Mulai Manager</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM departemen";
		$query = mysqli_query($koneksi, $sql);

		while($anggota = mysqli_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$anggota['kode_departemen']."</td>";
			echo "<td>".$anggota['nama_departemen']."</td>";
			echo "<td>".$anggota['id_manager']."</td>";
			echo "<td>".$anggota['tanggal_mulai_manager']."</td>";

			echo "</tr>";
		}
		?>

	</tbody>
	</table>


	<p>Total: <?php echo mysqli_num_rows($query) ?></p>

	</body>
</html>