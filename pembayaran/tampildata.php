<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bayar spp &nbsp;&nbsp;<a style="font-size:20px;" href="pembayaran/insertpembayaran.php?id=<?= $id_petugas; ?>" title="Insert data"><i class="fas fa-plus"></i></a></h6>
        <h6 class="m-0 font-weight-bold text-primary"></h6> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id pembayaran</th>
                        <th>Petugas</th>
                        <th>nisn</th>
                        <th>Tanggal bayar</th>
                        <th>Bulan yang dibayar</th>
                        <th>Tahun yang dibayar</th>
                        <th>Nominal spp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id pembayaran</th>
                        <th>Petugas</th>
                        <th>nisn</th>
                        <th>Tanggal bayar</th>
                        <th>Bulan yang dibayar</th>
                        <th>Tahun yang dibayar</th>
                        <th>Nominal spp</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                        include 'config.php';
                        $sql = mysqli_query($db,"SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas JOIN spp ON pembayaran.id_spp = spp.id_spp JOIN siswa ON pembayaran.id_siswa = siswa.id_siswa ORDER by id_pembayaran DESC");
                        
                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_petugas = $ambil['id_petugas'];
                            $id_pembayaran = $ambil['id_pembayaran'];
                            $nama_petugas = $ambil['nama_petugas'];
                            $nisn = $ambil['nisn'];
                            $tgl_bayar = $ambil['tgl_bayar'];
                            $bulan_bayar = $ambil['bulan_bayar'];
                            $tahun_bayar = $ambil['tahun_bayar'];
                            $nominal = $ambil['nominal'];
                            $jumlah_bayar = $ambil['jumlah_bayar'];
                            $jumlah_kembalian = $ambil['jumlah_kembalian'];
                            $jam_bayar = $ambil['jam_bayar'];
                            $nama = $ambil['nama'];
                            // $id_kelas = $ambil['id_kelas'];
                            // $nama_kelas = $ambil['nama_kelas'];
                            // $jurusan = $ambil['jurusan'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col">P-<?=$id_pembayaran; ?></td>
                        <td scope="col"><?=$nama_petugas; ?></td>
                        <td scope="col"><?=$nisn; ?> (<?=$nama ;?>)</td>
                        <td scope="col"><?=$tgl_bayar; ?> (<?=$jam_bayar?>)</td>
                        <td scope="col"><?=$bulan_bayar; ?></td>
                        <td scope="col"><?=$tahun_bayar; ?></td>
                        <td scope="col">Rp.<?=number_format($nominal,0,'.','.') ?></td>
                        <td>
                        <a style="margin-left: 8px; font-size:20px;" target="blank" title="Cetak" href="pembayaran/cetak.php?id=<?= $id_pembayaran; ?>"><i class="fas fa-print"></i></a> 
                        <a style="margin-left: 8px; font-size:20px;" title="Delete" href="pembayaran/delete.php?id=<?= $id_pembayaran; ?>"><i class="fas fa-trash-alt"></i></a>
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