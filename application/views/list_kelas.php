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
                <main style="margin-top:50px">
                    
                       <h1 class="mt-4 d-flex align-items-center justify-content-center container row m-auto" >
                           Data Kelas
                           </h1>
                    <div class="mt-4 d-flex align-items-center justify-content-center container row m-auto " >
                       
                     
                        <!-- <ol class="breadcrumb mb-4 ">
                        <a class="nav-link page-scroll active btn btn-success" href="<?= base_url("Admin_Tambah_Pendaftar") ?>">Tambah Pendaftar</a>
                        </ol> -->
                        <br><br>
                        
                        <table class="table-bordered dataTable"    id="dataTable" cellspacing="0" role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                        <tr>
                                            <th class="p-3 text-center" rowspan="1" colspan="1">ID</th>
                                            <th class="p-3 text-center" style="width:200px;" rowspan="1" colspan="1">Nama Kelas</th>
                                            <th class="p-3 text-center" rowspan="1" colspan="1">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($kelas as $key): ?>
                                            <tr role="row" class="odd">
                                                <td class="p-3 text-center"><?= $key->id_kelas ?></td>
                                                <td class="p-3 text-center" style="width:200px;"><?= $key->nama_kelas ?></td>
                                                <td class="p-3 text-center">
                                                    <a href="<?= 'list_pendaftar/'.$key->id_kelas ?>" class="btn btn-primary" style="width:150px;">Lihat</a>
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
