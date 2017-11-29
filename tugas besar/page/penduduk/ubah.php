<?php
	$id = $_GET['id'];

	$sql = $koneksi->query("select * from penduduk where id='$id'");

	$tampil = $sql->fetch_assoc();

	$pendapatan = $tampil['pendapatan'];
?>

<div class="panel panel-default">
    <div class="panel-heading">
        Ubah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control" name="nik" value="<?php echo $tampil['nik']?>"/>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>"/>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" value="<?php echo $tampil['alamat']?>"/>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input class="form-control" name="pekerjaan" value="<?php echo $tampil['pekerjaan']?>"/>
                    </div>
                    <div class="form-group">
                        <label>Pendapatan</label>
                        <select class="form-control" name="pendapatan">
                            <option value="< Rp 500.000" <?php if ($pendapatan == '< Rp 500.000') {echo "selected";} ?>>< Rp 500.000</option>
                            <option value="Rp 500.000 - Rp 1.500.000" <?php if ($pendapatan == 'Rp 500.000 - Rp 1.500.000') {echo "selected";} ?>>Rp 500.000 - Rp 1.500.000</option>
                            <option value="> Rp 1.500.000" <?php if ($pendapatan == '> Rp 1.500.000') {echo "selected";} ?>>> Rp 1.500.000</option>
                            <option value="Tidak tentu" <?php if ($pendapatan == 'Tidak tentu') {echo "selected";} ?>>Tidak tentu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Anggota Keluarga</label>
                        <input class="form-control" name="jumlah_anggota_keluarga" value="<?php echo $tampil['jumlah_anggota_keluarga']?>"/>
                    </div>
                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    $nik = ($_POST ['nik']);
    $nama = $_POST ['nama'];
    $alamat = $_POST ['alamat'];
    $pekerjaan = $_POST ['pekerjaan'];
    $pendapatan = $_POST ['pendapatan'];
    $jumlah_anggota_keluarga =$_POST ['jumlah_anggota_keluarga'];

    $simpan =$_POST['simpan'];

    if ($simpan) {
        $sql = $koneksi->query("UPDATE penduduk set nik='$nik', nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan', pendapatan='$pendapatan', jumlah_anggota_keluarga='$jumlah_anggota_keluarga' where id='$id'");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data berhasil diubah");
                    window.location.href="?page=penduduk";
                </script>
            <?php
        }
    }
?>
