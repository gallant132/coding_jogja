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
                    
                <div class="d-flex align-items-center justify-content-center" style="margin-top:200px">
                    <h1> Welcome Admin </h1>
                
                          
                    
                </div>
                
                
                <!--<div class="d-flex  justify-content-center" style="margin-top:20px">-->
             
                    
                            <!--<ul class="  align-items-center justify-content-center" role="group" aria-label="Basic example">-->
                            
                <!--            <a class="btn  " style="margin-top: 10px ;margin-right: 10px ;margin-left: 10px" href="<?= base_url("admin") ?>">-->
                <!--              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">-->
                <!--                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>-->
                <!--                </svg><br>Dashboard</br>-->
                <!--            </a>-->
                            
                            
                <!--            <a class="btn  " style="margin-top: 10px ;margin-right: 10px ;margin-left: 10px" href="https://codingjogja.000webhostapp.com/List_Pendaftar">-->
                <!--              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-fill" viewBox="0 0 16 16">-->
                <!--                  <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>-->
                <!--                </svg><br>Data Pendaftar</br>-->
                <!--            </a>-->
                            
                            
                <!--             <a class="btn  " style="margin-top: 10px ;margin-right: 10px ;margin-left: 10px" href="https://codingjogja.000webhostapp.com/Admin_kelas/tambah">-->
                <!--              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">-->
                <!--              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>-->
                <!--            </svg>-->
                <!--                <br>Tambah Kelas</br>-->
                <!--            </a>-->
                            
                <!--            <a class="btn " style="margin-top: 10px ;margin-right: 10px ;margin-left: 10px" href="https://codingjogja.000webhostapp.com/Admin_kelas/">-->
                <!--              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop-fill" viewBox="0 0 16 16">-->
                <!--                  <path d="M2.5 2A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>-->
                <!--                </svg>-->
                <!--                <br>Kelas</br>-->
                <!--            </a>-->
                        <!--</ul>-->
                    
                <!--</div>-->
                
                
                  <p><br>
                  <center>
                              <h1> <?php echo date('j/m/Y'); ?> </h1>
                  </center>
            

                
                
                       
                        <div class="d-flex align-items-center justify-content-center" style="height: 50px">
                         
                    <!--<ul class="list-group">-->
                    <!--      <li class="list-group-item">-->
                    <!--             <a class="btn btn btn-outline-primary " style="margin-top: 10px ;margin-right: 10px ;margin-left: 10px" href="<?= base_url("admin") ?>">-->
                    <!--            <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">-->
                    <!--    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>-->
                    <!--    </svg>-->
                    <!--        </a>-->
                          
                    <!--      </li>-->
                    <!--      <li class="list-group-item">-->
                    <!--           <a class="btn btn-secondary text-white " style="margin-top: 10px ;margin-right: 10px ;margin-left: 10px" href="https://codingjogja.000webhostapp.com/List_Pendaftar">-->
                    <!--            Data Pendaftar-->
                    <!--        </a>-->
                    <!--      </li>-->
                    <!--    </ul>-->
                        
                    <!--     <ul class="list-group">-->
                    <!--      <li class="list-group-item">-->
                    <!--          <a class="btn btn-secondary text-white " style="margin-top: 10px ;margin-right: 10px ;margin-left: 10px" href="https://codingjogja.000webhostapp.com/Admin_kelas/tambah">-->
                    <!--            Tambah Kelas-->
                    <!--        </a>-->
                    <!--      </li>-->
                    <!--      <li class="list-group-item">-->
                    <!--            <a class="btn btn-secondary text-white " style="margin-top: 10px ;margin-right: 10px ;margin-left: 10px" href="https://codingjogja.000webhostapp.com/Admin_kelas/">-->
                    <!--            Kelas-->
                    <!--        </a>-->
                    <!--      </li>-->
                    <!--    </ul>-->
                        
                        
                        <!--<div class="btn-group" role="group" aria-label="Basic example">-->
                        <!--  <button type="button" class="btn btn-secondary">Left</button>-->
                        <!--  <button type="button" class="btn btn-secondary">Middle</button>-->
                        <!--  <button type="button" class="btn btn-secondary">Right</button>-->
                        <!--</div>-->
                               
                               
                                            
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
