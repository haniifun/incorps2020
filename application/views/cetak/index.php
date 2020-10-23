<section>
	<div class="container-fluid py-3 px-4">
		<div class="card card-primary card-outline">
			<div class="card-header py-0">
				<h5 class="card-title my-3">Cetak-In</h5>
			</div>
			<div class="row p-3">
				<?php foreach ($cetak as $row) : ?>
					<div class="col col-sm-3">
						<div class="card">
							<div class="card-header py-0">
								<h6 class="text-center my-3"><?= $row['jenis_cetak'] ?></h6>
							</div>
							<div class="card-body p-0">
								<img src="<?= base_url('assets/img/')?>cetak.png" class="card-img p-4" height="300px">
								<a href="<?= base_url('cetak/order/').$row['id_cetak']?>" class="btn btn-primary btn-block">Order sekarang</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>