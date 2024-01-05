<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa &nbsp;&nbsp;<a style="font-size:20px;" href="siswa/insertsiswa.php" title="Insert data"><i class="fas fa-plus"></i></a></h6>
        <h6 class="m-0 font-weight-bold text-primary"></h6> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nisn</th>
                        <th>Nis</th>
                        <th>Password</th>
                        <th>Nama siswa</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Nomor telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nisn</th>
                        <th>Nis</th>
                        <th>Password</th>
                        <th>Nama siswa</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Nomor telepon</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                        include 'config.php';
                        $sql = mysqli_query($db,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
                        

                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_siswa = $ambil['id_siswa'];
                            $nisn = $ambil['nisn'];
                            $nis = $ambil['nis'];
                            $nama = $ambil['nama'];
                            $nama_kelas = $ambil['nama_kelas'];
                            $alamat = $ambil['alamat'];
                            $no_telp = $ambil['no_telp'];
                            $pass = $ambil['password'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col"><?=$nisn; ?></td>
                        <td scope="col"><?=$nis; ?></td>
                        <td scope="col"><?=$pass; ?></td>
                        <td scope="col"><?=$nama; ?></td>
                        <td scope="col"><?=$nama_kelas; ?></td>
                        <td scope="col"><?=$alamat; ?></td>
                        <td scope="col"><?=$no_telp; ?></td>
                        <td>
                        <a style="margin-left: 8px; font-size:20px;" title="Edit" href="siswa/edit.php?id=<?= $id_siswa; ?>"><i class="fas fa-edit"></i></a> 
                        <a style="margin-left: 8px; font-size:20px;" title="Delete" href="siswa/delete.php?id=<?= $id_siswa; ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>