<!-- partial:./partials/_footer.html -->
<footer class="footer">
	<div class="card">
		<div class="card-body">
			<div class="d-sm-flex justify-content-center justify-content-sm-between">
				<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Sunday Store 2023</span>
				<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="<?= base_url('admin') ?>" target="_blank">Sunday Store</a></span>
				<!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span> -->
			</div>
		</div>
	</div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="<?= base_url() ?>spica/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?= base_url() ?>spica/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url() ?>spica/js/off-canvas.js"></script>
<script src="<?= base_url() ?>spica/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>spica/js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>spica/js/dashboard.js"></script>
<!-- End custom js for this page-->

<script>
	$(document).ready(function() {
		//masukan data ke provinsi
		$.ajax({
			type: "POST",
			url: "<?= base_url('rajaongkir/provinsi') ?>",
			success: function(hasil_provinsi) {
				//console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});

		//masukan data ke dalam kota
		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

			$.ajax({
				type: "POST",
				url: "<?= base_url('rajaongkir/kota') ?>",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					//console.log(hasil_kota);
					$("select[name=kota]").html(hasil_kota);
				}
			});
		});
	});
</script>
</body>

</html>