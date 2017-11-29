<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control" name="nik"/>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama"/>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input class="form-control" name="pekerjaan"/>
                    </div>
                    <div class="form-group">
                        <label>Pendapatan</label>
                        <select class="form-control" name="pendapatan">
                            <option value="One Value">One Vale</option>
                            <option value="Two Value">Two Vale</option>
                            <option value="Three Value">Three Vale</option>
                            <option value="Four Value">Four Vale</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Anggota Keluarga</label>
                        <input class="form-control" name="jumlah_anggota_keluarga"/>
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

    $simpan = $_POST['simpan'];

    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO penduduk(nik, nama, alamat, pekerjaan, pendapatan, jumlah_anggota_keluarga) VALUES ('$nik', '$nama', '$alamat', '$pekerjaan', '$pendapatan', '$jumlah_anggota_keluarga')");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data berhasil disimpan");
                    window.location.href="?page=penduduk";
                </script>
            <?php
        }
    }
?>
