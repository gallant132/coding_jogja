<!DOCTYPE html>
<html lang="en">
    <head>
	<?php $this->load->view("partial/head.php") ?>
    </head>

	<!-- Breadcrumbs Form Daftar-->
	<!-- Breadcrumbs -->
	<div class="ex-basic-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
    <form class="text-center border border-light p-5" method="post" action="<?php echo base_url() . 'Admin_Tambah_Pendaftar/admin_tambah_pendaftar'; ?>">
					<?php $this->load->view("partial/form_pendaftaran.php") ?>
	</form>
	
	<?php $this->load->view("partial/js.php") ?>

				</div>
				
			</div>
	
		</div>
			<!-- end of container -->
	</div>



</body>
</html>
