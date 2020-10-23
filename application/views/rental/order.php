<section>
	<div class="container-fluid py-3 px-4">
		<div class="row">
			<div class="col-md-4 p-1">
				<div class="card card-primary card-outline">
					<div class="card-body">
						<div class="text-center">
						  <img class="card-img" src="<?= base_url('assets/img/rental/').$rental['gambar'] ?>" alt="<?= $rental['barang'] ?>">
						</div>
						<h5 class="profile-username text-center"><?= $rental['barang'] ?></h5>

						<p class="text-muted text-center mt-4">Include : </p>	
						<table class="table mb-3">
						  <tbody>
						  	<?php for($i=0; $i<count($spesifikasi); $i++) :?>
							    <tr>
							      <td class="text-center"><?= $spesifikasi[$i] ?></td>
							    </tr>
						  	<?php endfor; ?>
						  </tbody>
						</table>
						
						<div>	
							<button type="button" class="btn btn-block btn-primary btn-sm">Rp <?= number_format($rental['6jam'],0,',','.') ?>/6 jam </button>
							<button type="button" class="btn btn-block btn-primary btn-sm">Rp <?= number_format($rental['12jam'],0,',','.') ?>/12 jam </button>
							<button type="button" class="btn btn-block btn-primary btn-sm">Rp <?= number_format($rental['harian'],0,',','.') ?>/hari </button>
						</div>	

						<!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
					</div>
				</div>
			</div>
			<div class="col-md-8 p-1">
				<div class="card card-primary">
					<div class="card-header py-0">
						<h5 class="card-title my-3">Form Pemesanan Rental-In</h5>
					</div>
					<form role="form" action="<?= base_url('rental/order/').$rental['url'] ?>" method="post">
		                <div class="card-body">
		                  <div class="form-group">
		                    <label for="nama">Nama Lengkap<span class="text-danger">*</span></label>
		                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap" value="<?= set_value('nama') ?>">
		                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
		                  </div><!--
		                  <div class="form-group">
		                    <label for="whatsapp">Whatsapp</label>
		                    <div class="input-group mb-3">
			                  <div class="input-group-prepend">
			                    <span class="input-group-text">+62</span>
			                  </div>
			                  <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="81234567890">
			                </div>
		                  </div> 
		                  <div class="form-group">
		                    <label>Identitas</label>
	                        <div class="form-check">
	                        	<div class="row">
	                        		<div class="col-lg-3">
			                          <input class="form-check-input" type="radio" name="identitas" id="ktp">
			                          <label class="form-check-label" for="ktp">KTP</label>	                        			
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input" type="radio" name="identitas" id="kartu-pelajar">
			                          <label class="form-check-label" for="kartu-pelajar">Kartu pelajar</label>	                        			
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input" type="radio" name="identitas" id="sim">
			                          <label class="form-check-label" for="sim">SIM</label>	                        			
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input" type="radio" name="identitas" id="lainnya">
			                          <label class="form-check-label" for="lainnya">Lainnya</label>	                        			
	                        		</div>
	                        	</div>
	                        </div>
		                  </div>
		                  <div class="form-group">
		                    <label for="nomor-identitas">Nomor identitas</label>
		                    <input type="text" class="form-control" name="nomor-identitas" id="nomor-identitas" placeholder="Masukkan nomor identitas">
		                  </div> -->
		                  <div class="form-group">
		                    <label for="tanggal">Tanggal rental<span class="text-danger">*</span></label>
		                  	<div class="row">
		                  		<div class="col-7 pr-1">
		                   			<input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?= set_value('tanggal') ?>">
		                    		<?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
		                  		</div>
		                  		<div class="col-5 pl-1">
		                   			<input type="time" class="form-control" name="jam" placeholder="Jam" value="<?= set_value('jam') ?>">
		                    		<?= form_error('jam', '<small class="text-danger">', '</small>'); ?>
		                  		</div>
		                  	</div>
		                  </div>

		                  <div class="form-group">
		                    <label>Durasi pemakaian<span class="text-danger">*</span></label>
	                        <div class="form-check" id="durasi">
	                        	<div class="row">
	                        		<div class="col-lg-3">
			                          <input class="form-check-input durasi" type="radio" name="durasi" id="6-jam" value="6 jam" checked="checked">
			                          <label class="form-check-label" for="6-jam">6 Jam</label>	                        			
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input durasi" type="radio" name="durasi" id="12-jam" value="12 jam">
			                          <label class="form-check-label" for="12-jam">12 Jam</label>	                        			
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input durasi" type="radio" name="durasi" id="harian" value="harian">
			                          <label class="form-check-label" for="harian">Harian</label>	                        			
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input durasi" type="radio" name="durasi" id="kkn" value="kkn">
			                          <label class="form-check-label" for="kkn">Paket KKN (42 hari)</label>	                        			
	                        		</div>
	                        	</div>
	                        </div>
		                  </div>

		                  <div class="form-group">
		                    <label for="jumlah">Butuh berapa item?<span class="text-danger">*</span></label>
		                    <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan jumlah item" value="<?= set_value('jumlah') ?>">
		                    <?= form_error('jumlah', '<small class="text-danger">', '</small>'); ?>
		                  </div>
<!-- 
		                  <div class="form-group">
		                    <label>Barang diantar?<span class="text-danger">*</span></label>
	                        <div class="form-check" id="input-antar">
	                        	<div class="row">
	                        		<div class="col-lg-3">
			                          <input class="form-check-input antar" type="radio" name="antar" id="antar" value="y">
			                          <label class="form-check-label" for="antar">Ya</label>	                        			
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input antar" type="radio" name="antar" id="ambil" value="n">
			                          <label class="form-check-label" for="ambil">Tidak</label>	                        			
	                        		</div>
	                        	</div>
	                        </div>
		                  </div> -->

		                  <p class="small text-danger font-italic mb-0 mt-5">*) form wajib diisi.</p>
		                </div>
		                <!-- /.card-body -->

		                <div class="card-footer">
		                  <button type="submit" class="btn btn-block btn-primary">Order sekarang</button>
		                </div>
		              </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


