<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Checkout</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Free HTML Templates" name="keywords">
	<meta content="Free HTML Templates" name="description">

	<!-- Favicon -->
	<link href="<?= base_url() ?>front/img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url() ?>front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url() ?>front/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Topbar Start -->
	<div class="container-fluid">
		<div class="row align-items-center py-3 px-xl-5">
			<div class="col-lg-3 d-none d-lg-block">
				<a href="" class="text-decoration-none">
					<h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Sunday</span>Store</h1>
				</a>
			</div>
			<div class="col-lg-6 col-6 text-left">
				<form action="<?= base_url('pencarian') ?>" method="get">
					<div class="input-group">
						<input type="text" class="form-control" name="keyword" placeholder="Produk Apa Yang Anda Cari?">
						<div class="input-group-append">
							<button type="submit" class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
			<?php $keranjang = $this->cart->contents();
			$jml_item = 0;
			foreach ($keranjang as $key => $values) {
				$jml_item = $jml_item + $values['qty'];
			} ?>
			<div class="col-lg-3 col-6 text-right">
				<a href="<?= base_url('belanja') ?>" class="btn border">
					<i class="fas fa-shopping-cart text-primary"></i>
					<span class="badge">[<?= $jml_item ?>]</span>
				</a>
			</div>
		</div>
	</div>
	<!-- Topbar End -->

	<!-- Navbar Start -->
	<div class="container-fluid">
		<div class="row border-top px-xl-5">
			<div class="col-lg-3 d-none d-lg-block">
				<a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
					<h6 class="m-0">Kategori</h6>
					<i class="fa fa-angle-down text-dark"></i>
				</a>
				<?php $kategori = $this->m_master_produk->kategori(); ?>
				<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
					<div class="navbar-nav w-100 overflow-hidden" style="height: 300px">
						<?php foreach ($kategori as $key => $kategoris) { ?>
							<a href="<?= base_url('home/kategori/' . $kategoris->id_kategori) ?>" class="nav-item nav-link"><?= $kategoris->nama_kategori ?></a>
						<?php } ?>
					</div>
				</nav>
			</div>
			<div class="col-lg-9">
				<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
					<a href="" class="text-decoration-none d-block d-lg-none">
						<h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
					</a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
						<div class="navbar-nav mr-auto py-0">
							<a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
							<a href="<?= base_url('home/list_product') ?>" class="nav-item nav-link">List Produk</a>
							<div class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pesanan</a>
								<div class="dropdown-menu rounded-0 m-0">
									<a href="<?= base_url('belanja') ?>" class="dropdown-item">Shopping Cart</a>
									<?php if ($this->session->userdata('email_pelanggan') == "") { ?>
									<?php } else { ?>
										<a href="<?= base_url('pesanan') ?>" class="dropdown-item">Pesanan</a>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="navbar-nav ml-auto py-0">
							<?php if ($this->session->userdata('email_pelanggan') == "") { ?>
								<a href="<?= base_url('pelanggan') ?>" class="nav-item nav-link">Login</a>
								<a href="<?= base_url('pelanggan/register') ?>" class="nav-item nav-link">Register</a>
							<?php } else { ?>
								<a href="#" class="nav-item nav-link"><?= $this->session->userdata('nama_pelanggan') ?></a>
								<a href="<?= base_url('pelanggan/logout') ?>" class="nav-item nav-link">Logout</a>
							<?php } ?>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- Navbar End -->


	<!-- Page Header Start -->
	<div class="container-fluid bg-secondary mb-5">
		<div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
			<h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
			<div class="d-inline-flex">
				<p class="m-0"><a href="<?= base_url() ?>">Home</a></p>
				<p class="m-0 px-2">-</p>
				<p class="m-0">Checkout</p>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<form action="<?= base_url('belanja/cekout') ?>" method="POST">
		<?php
		$i = 1;
		$j = 1;
		$subtotal = 0;
		$total = 0;
		$total_berat = 0;
		$berat = 0;
		foreach ($cart['cart'] as $key => $items) {
			$id_detail = random_string('alnum', 5);
			$id_pesanan = date('Ymd') . strtoupper(random_string('alnum', 8));
			echo form_hidden('id_detail' . $j++, $id_detail);
			$subtotal = $items->qty_cart * ($items->harga - ($items->diskon / 100 * $items->harga));
			$total += $subtotal;
			$berat = $items->qty_cart * $items->berat;
			$total_berat = $total_berat + $berat;
		}
		?>
		<!-- Checkout Start -->
		<div class="container-fluid pt-5">
			<div class="row px-xl-5">
				<div class="col-lg-8">
					<div class="mb-4">
						<h4 class="font-weight-semi-bold mb-4">Alamat Penerima</h4>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Nama</label>
								<input class="form-control" type="text" value="<?= $this->session->userdata('nama_pelanggan'); ?>" readonly>
							</div>
							<div class="col-md-6 form-group">
								<label>Email</label>
								<input class="form-control" type="text" value="<?= $this->session->userdata('email_pelanggan'); ?>" readonly>
							</div>
							<div class="col-md-6 form-group">
								<label>No Handphone</label>
								<input class="form-control" type="text" name="nohp_penerima" placeholder="Masukan No Hp">
							</div>
							<div class="col-md-6 form-group">
								<label>Kode Pos</label>
								<input class="form-control" type="text" name="kode_post" placeholder="Masukan Kode Pos">
							</div>
							<div class="col-md-12 form-group">
								<label>Alamat</label>
								<textarea name="alamat_penerima" class="form-control"></textarea>
							</div>

							<div class="col-md-12 form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="shipto">
									<label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">Kirim Ke Alamat Yang Berbeda</label>
								</div>
							</div>
						</div>
					</div>
					<div class="collapse mb-4" id="shipping-address">
						<h4 class="font-weight-semi-bold mb-4">Alamat Pengiriman</h4>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Provinsi</label>
								<select class="custom-select" name="provinsi">
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label>Kota</label>
								<select class="custom-select" name="kota">
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label>Expedisi</label>
								<select class="custom-select" name="expedisi">>
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label>Paket</label>
								<select class="custom-select" name="paket">>
								</select>
							</div>

						</div>
					</div>
				</div>
				<input type="hidden" name="id_pesanan" value="<?= $id_pesanan ?>">
				<input type="hidden" name="estimasi">
				<input type="hidden" name="ongkir">
				<input type="hidden" name="berat" value="<?= $total_berat ?>">
				<input type="hidden" name="total_harga" value="<?= number_format($total, 0) ?>">
				<input type="hidden" name="total_bayar">

				<div class="col-lg-4">
					<div class="card border-secondary mb-5">
						<div class="card-header bg-secondary border-0">
							<h4 class="font-weight-semi-bold m-0">Order Total</h4>
						</div>
						<div class="card-body">

							<hr class="mt-0">
							<div class="d-flex justify-content-between mb-3 pt-1">
								<h6 class="font-weight-medium">Total</h6>
								<h6 class="font-weight-medium">Rp. <?= number_format($total, 0) ?></h6>
							</div>
							<div class="d-flex justify-content-between">
								<h6 class="font-weight-medium">Ongkos Kirim</h6>
								<h6 class="font-weight-medium"><label id="ongkir"></h6>
							</div>
						</div>
						<div class="card-footer border-secondary bg-transparent">
							<div class="d-flex justify-content-between mt-2">
								<h5 class="font-weight-bold">Grand Total</h5>
								<h5 class="font-weight-bold"><span id="total_bayar"></span></h5>
							</div>
						</div>
					</div>
					<div class="card border-secondary mb-5">
						<div class="card-header bg-secondary border-0">
							<h4 class="font-weight-semi-bold m-0">Pembayaran</h4>
						</div>
						<div class="card-body">
							<div class="form-group">
								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="metode_bayar" value="1" id="paypal">
									<label class="custom-control-label" for="paypal">COD</label>
								</div>
							</div>
							<div class="form-group">
								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="metode_bayar" value="2" id="directcheck">
									<label class="custom-control-label" for="directcheck">Transfer</label>
								</div>
							</div>
						</div>
						<div class="card-footer border-secondary bg-transparent">
							<button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Pesan Sekarang</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Checkout End -->
	</form>

	<!-- Footer Start -->
	<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
		<div class="row px-xl-5 pt-5">
			<div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
				<a href="" class="text-decoration-none">
					<h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">Sunday</span>Store</h1>
				</a>
				<p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Jalan Raya Sidaraja, Desa Sidaraja, Kecamatan Ciawigebang, Kabupaten Kuningan, Jawa Barat</p>
				<p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>sundaystore@gmail.com</p>
				<p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>087723346534</p>
			</div>
		</div>
		<div class="row border-top border-light mx-xl-5 py-4">
			<div class="col-md-6 px-xl-0">
				<p class="mb-md-0 text-center text-md-left text-dark">
					&copy; <a class="text-dark font-weight-semi-bold" href="#">Sunday Store</a>
				</p>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>front/lib/easing/easing.min.js"></script>
	<script src="<?= base_url() ?>front/lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Contact Javascript File -->
	<script src="<?= base_url() ?>front/mail/jqBootstrapValidation.min.js"></script>
	<script src="<?= base_url() ?>front/mail/contact.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url() ?>front/js/main.js"></script>

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

			$("select[name=kota]").on("change", function() {
				$.ajax({
					type: "POST",
					url: "<?= base_url('rajaongkir/expedisi') ?>",
					success: function(hasil_expedisi) {
						$("select[name=expedisi]").html(hasil_expedisi);
					}
				});
			});

			$("select[name=expedisi]").on("change", function() {
				//mendapatkan expedisi terpilih
				var expedisi_terpilih = $("select[name = expedisi]").val()
				//mendapatkan id kota tujuan
				var id_kota_tujuan_terpilih = $("option:selected", "select[name = kota]").attr('id_kota');
				//mendapatkan data ongkir
				var tot_berat = <?= $total_berat ?>;
				//alert(id_kota_tujuan_terpilih);
				$.ajax({
					type: "POST",
					url: "<?= base_url('rajaongkir/paket') ?>",
					data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + tot_berat,
					success: function(hasil_paket) {
						console.log(hasil_paket);
						$("select[name=paket]").html(hasil_paket);
					}
				});
			});

			$("select[name=paket]").on("change", function() {
				//menampilkan ongkir
				var dataongkir = $("option:selected", this).attr('ongkir');
				var reverse = dataongkir.toString().split('').reverse().join(''),
					ribuan_ongkir = reverse.match(/\d{1,3}/g);
				ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
				$("#ongkir").html("Rp. " + ribuan_ongkir);

				//menghitung total bayar
				var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
				var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
					ribuan_bayar = reverse2.match(/\d{1,3}/g);
				ribuan_bayar = ribuan_bayar.join(',').split('').reverse().join('');
				$("#total_bayar").html("Rp. " + ribuan_bayar);

				//estimasi & ongkir
				var estimasi = $("option:selected", this).attr('estimasi');
				$("input[name=estimasi]").val(estimasi);
				$("input[name=ongkir]").val(dataongkir);
				$("input[name=total_bayar]").val(data_total_bayar);
			});

		});
	</script>

</body>

</html>