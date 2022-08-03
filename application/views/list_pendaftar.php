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
                        <h1 class="mt-4">Data Pendaftar</h1>
                        <ol class="breadcrumb mb-4 ">
                        <a class="nav-link page-scroll active btn btn-success" href="<?= base_url("Admin_Tambah_Pendaftar") ?>">Tambah</a>
                        </ol>
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
                                            <th rowspan="1" colspan="1">Action</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                        <?php foreach ($pendaftars as $key): ?>
                                            <td><?php echo $key->id_pendaftar; ?></td>
                                            <td><?php echo $key->nama_pendaftar; ?></td>
                                            <td><?php echo $key->email_pendaftar; ?></td>
                                            <td><?php echo $key->no_wa; ?></td>
                                            <td><?php echo $key->alamat_pendaftar; ?></td>
                                            <td><?php echo $key->asal_sekolah; ?></td>
                                            <td><?php echo $key->nama_kelas; ?></td> 
                                            <td><?php echo $key->pembayaran; ?></td>
                                            <td>
                                                <button class="btn btn-primary text-white mb-2"> <?php echo anchor('daftar/edit_pendaftar/'.$key->id_pendaftar,'<font color=white > Ubah </font>'); ?> </button>
                                                <button class="btn btn-success mb-2"> <?php echo anchor('daftar/konfirmasi_pendaftar/'.$key->id_pendaftar,'<font color=white > Konfirmasi </font>'); ?> </button> 
                                                <button class="btn btn-danger text-white mb-2"> <?php echo anchor('daftar/hapus_pendaftar/'.$key->id_pendaftar,'<font color=white > Hapus </font>'); ?> </button>
                                            </td>
    
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
