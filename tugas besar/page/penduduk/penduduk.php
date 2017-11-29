<a href="?page=penduduk&aksi=tambah" class="btn btn-primary" style="margin-bottom; 5px;">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>Pendapatan</th>
                                            <th>Jumlah Anggota keluarga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  

                                            $sql = $koneksi -> query("select * from penduduk" );

                                            while ($data = $sql -> fetch_assoc()){

                                            

                                        ?>
                                        <tr>
                                            <td><?php echo $data['id']; ?></td>
                                            <td><?php echo $data['nik']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $data['pekerjaan']; ?></td>
                                            <td><?php echo $data['pendapatan']; ?></td>
                                            <td><?php echo $data['jumlah_anggota_keluarga']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-info" >Ubah</a>
                                                  <a href="" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
