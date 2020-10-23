<div style="background-color: #1f222f">
	<div class="container pt-3 pb-1">
	    <p class="text-white" style="font-size: 14px;">Copyright © 2020 In-Corporation</p>
	</div>
</div>
<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>js/adminlte.min.js"></script>

<script type="text/javascript" src="<?= base_url('assets/') ?>/js/all-plugins.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>/js/plugin-active.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".durasi").click(function(){
			if($("input[name='durasi']:checked").val()=="harian"){
				$("#durasi").after('<input type="number" class="form-control mt-2" name="durasi" id="input-hari" placeholder="Berapa hari?">')
			} else {
				$("#input-hari").remove()
			}
		})

		$(".antar").click(function(){
			if($("input[name='antar']:checked").val()=="y"){
				$("#input-antar").after('<input type="text" class="form-control mt-2" name="antar" id="input-alamat" placeholder="Masukkan alamat lengkap">')
			} else {
				$("#input-alamat").remove()
			}
		})

		$(".ukuran").click(function(){
			if($("input[name='ukuran']:checked").val()=="custom"){
				$("#ukuran").after('<input type="text" class="form-control mt-2" name="ukuran" id="custom-ukuran" placeholder="contoh : 200x300cm">')
			} else {
				$("#custom-ukuran").remove()
			}
		})
	})
</script>

</body>
</html>
