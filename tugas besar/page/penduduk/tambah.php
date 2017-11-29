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
                        <input class="form-control" name="alamat"/>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input class="form-control" name="pekerjaan"/>
                    </div>
                    <div class="form-group">
                        <label>Pendapatan</label>
                        <select class="form-control" name="pendapatan">
                            <option>One Vale</option>
                            <option>Two Vale</option>
                            <option>Three Vale</option>
                            <option>Four Vale</option>
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
    $nik = isset ($_POST ['nik']);
    $nama = isset ($_POST ['nama']);
    $alamat = isset ($_POST ['alamat']);
    $pekerjaan = isset ($_POST ['pekerjaan']);
    $pendapatan = isset ($_POST ['pendapatan']);
    $jumlah_anggota_keluarga = isset ($_POST ['jumlah_anggota_keluarga']);

    if ($simpan) {
        $sql = $koneksi->query("insert into penduduk (nik, nama, alamat, pekerjaan, pendapatan, jumlah_anggota_keluarga) values('$nik', '$nama', '$alamat', '$pekerjaan', '$pendapatan', '$jumlah_anggota_keluarga')");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Data berhasil disimpan");
                </script>
            <?php
        }
    }
?>