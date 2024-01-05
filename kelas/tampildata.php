<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar kelas &nbsp;&nbsp;<a style="font-size:20px;" href="kelas/insertkelas.php" title="Insert data"><i class="fas fa-plus"></i></a></h6>
        <h6 class="m-0 font-weight-bold text-primary"></h6> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id kelas</th>
                        <th>Nama kelas</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id kelas</th>
                        <th>Nama kelas</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                        include 'config.php';
                        $sql = mysqli_query($db,"SELECT * FROM kelas");

                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_kelas = $ambil['id_kelas'];
                            $nama_kelas = $ambil['nama_kelas'];
                            $jurusan = $ambil['jurusan'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col"><?=$id_kelas; ?></td>
                        <td scope="col"><?=$nama_kelas; ?></td>
                        <td scope="col"><?=$jurusan; ?></td>
                        <td>
                        <a style="margin-left: 8px; font-size:20px;" title="Edit" href="kelas/edit.php?id=<?= $id_kelas; ?>"><i class="fas fa-edit"></i></a> 
                        <a style="margin-left: 8px; font-size:20px;" title="Delete" href="kelas/delete.php?id=<?= $id_kelas; ?>"><i class="fas fa-trash-alt"></i></a>
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