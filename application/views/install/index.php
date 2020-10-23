<section>
	<div class="container-fluid py-3 px-4">
		<div class="card card-primary card-outline">
			<div class="card-header py-0">
				<h5 class="card-title my-3">Install-In</h5>
			</div>
			<div class="row p-3">
				<?php foreach ($install as $row) : ?>
					<div class="col col-sm-3">
						<div class="card">
							<div class="card-header py-0">
								<h6 class="text-center my-3"><?= $row['jenis_install'] ?></h6>
							</div>
							<div class="card-body p-0">
								<img src="<?= base_url('assets/img/install/').$row['gambar']?>" class="card-img p-4" height="280px">
								<a href="<?= base_url('install/order/').$row['id_install']?>" class="btn btn-primary btn-block">Order sekarang</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>