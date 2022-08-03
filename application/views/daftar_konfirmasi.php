<!DOCTYPE html>
<html lang="en">
    <head>
	<?php $this->load->view("partial/head.php") ?>
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

	<!-- Breadcrumbs -->
	<div class="ex-basic-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- Default form register -->
                    <?php foreach($pendaftar as $key){ ?>
					<form class="text-center border border-light p-5" method="post" action="<?php echo base_url() . 'Daftar/update'; ?>">
						<p class="h4 mb-4">Konfirmasi Pendaftaran</p>
                        <div class="form-row mb-4">
							<br>
							<small>Id Anda</small>
							<input type="text" class="form-control 
                            form-control-line form-user-input" name="id_pendaftar" id="id_pendaftar" required readonly value="<?php echo $key->id_pendaftar ?>">
							<br><br>
							
						</div>

						<div class="form-row mb-4">
							<br>
							<small>Nama Anda</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="nama_pendaftar" id="nama_pendaftar" required readonly value="<?php echo $key->nama_pendaftar ?>">
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Email</small>
							<input type="email" placeholder="Inputkan Email Anda" class="form-control
							form-control-line form-user-input" name="email_pendaftar" id="email_pendaftar" required readonly value="<?php echo $key->email_pendaftar ?>">
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>No WA</small>
							<input type="number" placeholder="Inputkan Nomor Whatsapp Anda" class="form-control
							form-control-line form-user-input" name="no_wa" id="no_wa" required readonly value="<?php echo $key->no_wa ?>">
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Alamat</small>
							<input type="textarea" placeholder="Inputkan Alamat Anda" class="form-control
							form-control-line form-user-input" name="alamat_pendaftar" id="alamat_pendaftar" required readonly value="<?php echo $key->alamat_pendaftar ?>">
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Asal Sekolah</small>
							<input type="text" placeholder="Inputkan Asal Sekolah Anda" class="form-control
							form-control-line form-user-input" name="asal_sekolah" id="asal_sekolah" required readonly value="<?php echo $key->asal_sekolah ?>">
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Paket Bimbel</small>
							<select name="paket_bimbel" id="paket_bimbel" class="form-control" required readonly>
								<?php foreach($kelas as $kls) : ?>
									<option value="<?= $kls->id_kelas ?>" <?= $kls->id_kelas === $key->paket_bimbel_id ? 'selected' : '' ?>><?= $kls->nama_kelas ?></option>
								<?php endforeach; ?>
                            </select>
							
						</div>

                        <div class="form-row mb-4">
							<br>
                            <h5 style="margin-top:20px;">Pembayaran</h5>
                            <select  name="pembayaran" id="pembayaran" class="form-control" required>
                            <option value="<?php echo $key->pembayaran ?>" selected><?php echo $key->pembayaran?></option>
                                <option value="SUDAH">SUDAH</option>
                                <option value="BELUM">BELUM</option>
                            </select>
                        </div>


						<!-- Sign up button -->
						<button class="btn btn-success my-4 " type="submit">Simpan</button>
						<a class="btn btn-danger my-4 " href="javascript:window.history.go(-1);">Kembali</a>
						<!-- Social register -->

						<hr>

						<!-- Terms of service -->
						<? redirect(base_url("list_pendaftar"))?>
					</form>
                 <?php } ?>
					<!-- Default form register -->

				</div>
				
			</div>

		</div>
		<!-- end of container -->
	</div>
	
	<!-- js -->
	<?php $this->load->view("partial/js.php") ?>



</body>
</html>
