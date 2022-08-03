
						<p class="h4 mb-4">Daftar Kelas</p>
						<div class="form-row mb-4">
							<br>
							<small>Nama Anda</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="nama_pendaftar" id="nama_pendaftar" required>
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Email</small>
							<input type="email" placeholder="Inputkan Email Anda" class="form-control
							form-control-line form-user-input" name="email_pendaftar" id="email_pendaftar" required>
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>No WA</small>
							<input type="number" placeholder="Inputkan Nomor Whatsapp Anda" class="form-control
							form-control-line form-user-input" name="no_wa" id="no_wa" required>
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Alamat</small>
							<input type="textarea" placeholder="Inputkan Alamat Anda" class="form-control
							form-control-line form-user-input" name="alamat_pendaftar" id="alamat_pendaftar" required>
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Asal Sekolah</small>
							<input type="text" placeholder="Inputkan Asal Sekolah Anda" class="form-control
							form-control-line form-user-input" name="asal_sekolah" id="asal_sekolah" required>
							<br><br>
							
						</div>
                        <div class="form-row mb-4">
							<br>
							<small>Paket Bimbel</small>
							<select name="paket_bimbel" id="paket_bimbel" class="form-control" >
                                <option value="" selected disabled>Pilih Paket</option>
								<?php foreach($kelas as $kls) : ?>
									<option value="<?= $kls->id_kelas ?>"><?= $kls->nama_kelas ?></option>
								<?php endforeach; ?>
                            </select>
							
                            <select hidden name="pembayaran" id="pembayaran" class="form-control" >
                                <option value="SUDAH">SUDAH</option>
                                <option value="BELUM" selected>BELUM</option>
                            </select>
							
						</div>
										<!-- onClick="alert('Daftar Berhasil') -->
						<button class="btn btn-success my-4" type="submit">Daftar</button>
						<a class="btn btn-danger my-4 " href="javascript:window.history.go(-1);">Kembali</a>

						
						
				