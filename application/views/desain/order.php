<section>
	<div class="container-fluid py-3 px-4">
		<div class="row">
			<div class="col-md-4 p-1">
				<div class="card card-primary card-outline">
					<div class="card-body">
						<div class="text-center">
						  <img class="card-img" src="<?= base_url('assets/img/')?>desain.png" alt="">
						</div>
						<h5 class="profile-username text-center mb-4">Desain <?= $desain['desain'] ?></h5>
						<ul class="list-group list-group-unbordered mb-3">
		                  <li class="list-group-item">
		                    <b>5 hari (Normal)</b> <span class="badge badge-primary float-right p-1" style="font-size: 14px">Rp <?= number_format($desain['harga_5hari'],0,',','.') ?></span>
		                  </li>
		                  <li class="list-group-item">
		                    <b>3 hari</b> <span class="badge badge-primary float-right p-1" style="font-size: 14px">Rp <?= number_format($desain['harga_3hari'],0,',','.') ?></span>
		                  </li>
		                  <li class="list-group-item">
		                    <b>2 hari</b> <span class="badge badge-primary float-right p-1" style="font-size: 14px">Rp <?= number_format($desain['harga_2hari'],0,',','.') ?></span>
		                  </li>
		                  <li class="list-group-item">
		                    <b>1 hari</b> <span class="badge badge-primary float-right p-1" style="font-size: 14px">Rp <?= number_format($desain['harga_1hari'],0,',','.') ?></span>
		                  </li>
		                </ul>
						<!-- 
						<div>	
							<button type="button" class="btn btn-block btn-primary btn-sm">Rp <?= number_format($desain['6jam'],0,',','.') ?>/6 jam </button>
							<button type="button" class="btn btn-block btn-primary btn-sm">Rp <?= number_format($desain['12jam'],0,',','.') ?>/12 jam </button>
							<button type="button" class="btn btn-block btn-primary btn-sm">Rp <?= number_format($desain['harian'],0,',','.') ?>/hari </button>
						</div> -->	

						<!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
					</div>
				</div>
			</div>
			<div class="col-md-8 p-1">
				<div class="card card-primary">
					<div class="card-header py-0">
						<h5 class="card-title my-3">Form Pemesanan Desain-In</h5>
					</div>
					<form role="form" action="<?= base_url('desain/order/').$desain['id_desain'] ?>" method="post">
		                <div class="card-body">
		                  <div class="form-group">
		                    <label for="nama">Nama Lengkap<span class="text-danger">*</span></label>
		                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap" value="<?= set_value('nama') ?>">
		                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
		                  </div>

		                  <div class="form-group">
		                    <label>Masa pengerjaan<span class="text-danger">*</span></label>
	                        <div class="form-check">
	                        	<div class="row">
	                        		<div class="col-lg-3">
			                          <input class="form-check-input" type="radio" name="pengerjaan" id="5-hari" value="5 hari" checked="checked">
			                          <label class="form-check-label" for="5-hari">5 hari (Normal)</label>		
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input" type="radio" name="pengerjaan" id="3-hari" value="3 hari">
			                          <label class="form-check-label" for="3-hari">3 hari</label>		
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input" type="radio" name="pengerjaan" id="2-hari" value="2 hari">
			                          <label class="form-check-label" for="2-hari">2 hari</label>		
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input" type="radio" name="pengerjaan" id="1-hari" value="1 hari">
			                          <label class="form-check-label" for="1-hari">1 hari</label>		
	                        		</div>
	                        	</div>
	                        </div>
		                  </div>

		                  <div class="form-group">
		                    <label>Ukuran desain<span class="text-danger">*</span></label>
	                        <div class="form-check" id="ukuran">
	                        	<div class="row">
	                        		<div class="col-lg-3">
			                          <input class="form-check-input ukuran" type="radio" name="ukuran" id="A3" value="A3" checked="checked">
			                          <label class="form-check-label" for="A3">A3</label>		
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input ukuran" type="radio" name="ukuran" id="A4" value="A4">
			                          <label class="form-check-label" for="A4">A4</label>		
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input ukuran" type="radio" name="ukuran" id="A5" value="A5">
			                          <label class="form-check-label" for="A5">A5</label>		
	                        		</div>
	                        		<div class="col-lg-3">
			                          <input class="form-check-input ukuran" type="radio" name="ukuran" id="custom" value="custom">
			                          <label class="form-check-label" for="custom">custom</label>		
	                        		</div>
	                        	</div>
	                        </div>
		                  </div>


		                  <div class="form-group">
		                    <label for="deskripsi">Deskripsi desain</label>
		                    <textarea class="form-control" name="deskripsi"></textarea>
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


