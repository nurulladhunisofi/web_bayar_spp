<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar petugas &nbsp;&nbsp;<a style="font-size:20px;" href="petugas/insertpetugas.php" title="Insert data"><i class="fas fa-plus"></i></a></h6>
        <h6 class="m-0 font-weight-bold text-primary"></h6> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama petugas</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama petugas</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                        include 'config.php';
                        $sql = mysqli_query($db,"SELECT * FROM petugas");

                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_petugas = $ambil['id_petugas'];
                            $username = $ambil['username'];
                            $password = $ambil['password'];
                            $nama_petugas = $ambil['nama_petugas'];
                            $level = $ambil['level'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col"><?=$id_petugas; ?></td>
                        <td scope="col"><?=$username; ?></td>
                        <td scope="col"><?=$password; ?></td>
                        <td scope="col"><?=$nama_petugas; ?></td>
                        <td scope="col"><?=$level; ?></td>
                        <td>
                        <a style="margin-left: 8px; font-size:20px;" title="Edit" href="petugas/edit.php?id=<?= $id_petugas; ?>"><i class="fas fa-edit"></i></a> 
                        <a style="margin-left: 8px; font-size:20px;" title="Delete" href="petugas/delete.php?id=<?= $id_petugas; ?>"><i class="fas fa-trash-alt"></i></a>
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