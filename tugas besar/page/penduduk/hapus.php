<?php
	$id = $_GET ['id'];
	$koneksi->query("delete from penduduk where id = '$id'");
?>

<script type="text/javascript">
	window.location.href="?page=penduduk";
</script>