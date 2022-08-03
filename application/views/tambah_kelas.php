<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php $this->load->view("partial/head.php") ?>
    </head>
    
    <body class="sb-nav-fixed">
        <?php $this->load->view("partial/topnavbar.php") ?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php $this->load->view("partial/sidenavbar.php") ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h1 class="text-center pt-3" style="Margin-top:100px">Tambah Kelas</h1>
                    <div class="d-flex align-items-center justify-content-center container row m-auto" style="height: 250px">
                        <form class="col-6" action="<?php echo base_url() . 'admin_kelas/tambah_kelas'; ?>" method="post">
                            <div class="form-group">
                                <label for="kelas">Nama Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" required>
                            </div>
                            <!--<div class="form-group">-->
                            <!--    <label for="kelas">Harga Kelas</label>-->
                            <!--    <input type="number" class="form-control" id="kelas" name="harga" required>-->
                            <!--</div>-->
                            <div class="d-flex align-items-center flex-column row">
                                <button type="submit" class="col-5 rounded btn btn-success text-white rounded-lg mt-3" onClick="alert('Kelas di Tambahkan')">Tambah</button>
                                <button class="col-5 btn btn-danger text-white rounded rounded-lg mt-3" onclick="window.location.href='/Admin_kelas/' ">Kembali</button>
                            </div>
                        </form>
                    </div>
                </main>
                <?php $this->load->view("partial/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("partial/js.php") ?>
    </body>
</html>
