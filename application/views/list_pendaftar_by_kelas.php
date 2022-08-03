<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $this->load->view("partial/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
        <!-- topnavbar -->
        <?php $this->load->view("partial/topnavbar.php") ?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- sidenavbar -->
            <?php $this->load->view("partial/sidenavbar.php") ?>      
            </div>

            <!-- isi -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Kelas <?= $nama_kelas ?></h1>
                        <button style="width:200px;margin-bottom:30px;" class="col-5 btn btn-secondary text-white rounded rounded-lg mt-3 p-2" onclick="history.back()">Kembali</button>
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" 
                            role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr><th rowspan="1" colspan="1">ID</th>
                                        <th rowspan="1" colspan="1">Nama</th>
                                            <th rowspan="1" colspan="1">Email</th>
                                            <th rowspan="1" colspan="1">No WA</th>
                                            <th rowspan="1" colspan="1">Alamat</th>
                                            <th rowspan="1" colspan="1">Asal Sekolah</th>
                                            <th rowspan="1" colspan="1">Paket Kelas</th>
                                            <th rowspan="1" colspan="1">Pembayaran</th>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                        <?php foreach ($pendaftar as $key): ?>
                                            <td><?php echo $key->id_pendaftar; ?></td>
                                            <td><?php echo $key->nama_pendaftar; ?></td>
                                            <td><?php echo $key->email_pendaftar; ?></td>
                                            <td><?php echo $key->no_wa; ?></td>
                                            <td><?php echo $key->alamat_pendaftar; ?></td>
                                            <td><?php echo $key->asal_sekolah; ?></td>
                                            <td><?php echo $key->nama_kelas; ?></td> 
                                            <td><?php echo $key->pembayaran; ?></td>
                                        </tr>
                                        <?php endforeach; ?>      
                                    </tbody>
                                                         
                        </table>
                    </div>
                </main>
                    <!-- footer -->
                    <?php $this->load->view("partial/footer.php") ?>
            </div>
        </div>
        <!-- js -->
        <?php $this->load->view("partial/js.php") ?>
    

</body>
</html>
