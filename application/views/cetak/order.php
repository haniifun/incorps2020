<section>
	<div class="container-fluid py-3 px-4">
		<div class="row">
			<div class="col-md-4 p-1">
				<div class="card card-primary card-outline">
					<div class="card-body">
						<div class="text-center">
						  <img class="card-img" src="<?= base_url('assets/img/')?>cetak.png" alt="">
						</div>
						<h5 class="profile-username text-center mb-4">Cetak <?= $cetak['jenis_cetak'] ?></h5>
						
						<div>	
							<button type="button" class="btn btn-block btn-primary ">Rp <?= number_format($cetak['harga'],0,',','.') ?>/pcs</button>
						</div>	

						<!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
					</div>
				</div>
			</div>
			<div class="col-md-8 p-1">
				<div class="card card-primary">
					<div class="card-header py-0">
						<h5 class="card-title my-3">Form Pemesanan Cetak-In</h5>
					</div>
					<form role="form" action="<?= base_url('cetak/order/').$cetak['id_cetak'] ?>" method="post">
		                <div class="card-body">
		                  <div class="form-group">
		                    <label for="nama">Nama Lengkap<span class="text-danger">*</span></label>
		                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap" value="<?= set_value('nama') ?>">
		                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
		                  </div>

		                  <div class="form-group">
		                    <label>Kapan mau diambil/dikirim?<span class="text-danger">*</span></label>
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
		                    <label for="jumlah">Butuh berapa item?<span class="text-danger">*</span></label>
		                    <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan jumlah item" value="<?= set_value('jumlah') ?>">
		                    <?= form_error('jumlah', '<small class="text-danger">', '</small>'); ?>
		                  </div>



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


