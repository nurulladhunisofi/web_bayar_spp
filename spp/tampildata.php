<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar spp  &nbsp;&nbsp;<a style="font-size:20px;" href="spp/insertspp.php" title="Insert data"><i class="fas fa-plus"></i></a></h6>
        <h6 class="m-0 font-weight-bold text-primary"></h6> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id spp</th>
                        <th>Tahun</th>
                        <th>Nominal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id spp</th>
                        <th>Tahun</th>
                        <th>Nominal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                        include 'config.php';
                        $sql = mysqli_query($db,"SELECT * FROM spp");

                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_spp = $ambil['id_spp'];
                            $tahun = $ambil['tahun'];
                            $nominal = $ambil['nominal'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col"><?=$id_spp; ?></td>
                        <td scope="col"><?=$tahun; ?></td>
                        <td scope="col">Rp.<?=number_format($nominal,0,'.','.'); ?></td>
                        <td>
                        <a style="margin-left: 8px; font-size:20px;" title="Edit" href="spp/edit.php?id=<?= $id_spp; ?>"><i class="fas fa-edit"></i></a> 
                        <a style="margin-left: 8px; font-size:20px;" title="Delete" href="spp/delete.php?id=<?= $id_spp; ?>"><i class="fas fa-trash-alt"></i></a>
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