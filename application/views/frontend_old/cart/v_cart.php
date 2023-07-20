<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $title ?></title>
	<meta name="description" content="">
	<meta name="robots" content="noindex, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('frontend/') ?>assets/img/favicon.png">

	<!-- all css here -->
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/slick.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/chosen.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url('frontend/') ?>assets/css/responsive.css">
	<script src="<?= base_url('frontend/') ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!-- header start -->
	<header class="header-area gray-bg clearfix">
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-6">
						<div class="logo">
							<a href="<?= base_url() ?>">
								<img alt="" src="<?= base_url() ?>frontend/assets/img/logo/logos.jpg">
							</a>
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-6">
						<div class="header-bottom-right">
							<div class="main-menu">
								<nav>
									<ul>
										<li class="top-hover"><a href="<?= base_url() ?>">home</a>
										</li>
										<?php $kategori = $this->m_master_produk->kategori(); ?>
										<li class="mega-menu-position top-hover"><a href="shop.html">kategori</a>
											<ul class="mega-menu">
												<?php foreach ($kategori as $key => $kategoris) { ?>
													<li>
														<ul>
															<li><a href="<?= base_url('home/kategori/' . $kategoris->id_kategori) ?>"><?= $kategoris->nama_kategori ?></a></li>
														</ul>
													</li>
												<?php } ?>
											</ul>
										</li>
										<li class="top-hover"><a href="<?= base_url('home/list_product') ?>">List Produk</a>
									</ul>
								</nav>
							</div>
							<div class="header-currency">
								<?php if ($this->session->userdata('email_pelanggan') == "") { ?>
									<span class="digit">Login/Register<i class="ti-angle-down"></i></span>
									<div class="dollar-submenu">
										<ul>
											<li><a href="<?= base_url('pelanggan') ?>">Login/Register</a></li>
										</ul>
									</div>
								<?php } else { ?>
									<span class="digit"><?= $this->session->userdata('nama_pelanggan') ?><i class="ti-angle-down"></i></span>
									<div class="dollar-submenu">
										<ul>
											<li><a href="<?= base_url('pesanan') ?>">Pesanan</a></li>
											<!-- <li><a href="#">Chatting</a></li> -->
										</ul>
									</div>
								<?php } ?>
							</div>
							<?php $keranjang = $this->cart->contents();
							$jml_item = 0;
							foreach ($keranjang as $key => $values) {
								$jml_item = $jml_item + $values['qty'];
							} ?>
							<div class="header-cart">
								<a href="#">
									<div class="cart-icon">
										<i class="ti-shopping-cart">[<?= $jml_item ?>]</i>
									</div>
								</a>
								<div class="shopping-cart-content">
									<ul>
										<?php foreach ($keranjang as $key => $val) {
											$produk = $this->m_master_produk->detailprod($val['id']); ?>
											<li class="single-shopping-cart">
												<div class="shopping-cart-img">
													<a href="#"><img alt="" src="<?= base_url('assets/produk/' . $val['picture']) ?>" width="100px"></a>
												</div>
												<div class="shopping-cart-title">
													<h4><a href="#"><?= $val['name'] ?> </a></h4>
													<h6>Qty: <?= $val['qty'] ?></h6>
													<span>Rp. <?= number_format($val['price']), 0 ?></span>
												</div>
												<div class="shopping-cart-delete">
													<a href="<?= base_url('belanja/deletecart/' . $val['rowid']) ?>"><i class="ion ion-close"></i></a>
												</div>
											</li>
										<?php } ?>
									</ul>
									<div class="shopping-cart-total">
										<!-- <h4>Shipping : <span>$20.00</span></h4> -->
										<h4>Total : <span class="shop-total">Rp. <?= $this->cart->format_number($this->cart->total()); ?></span></h4>
									</div>
									<div class="shopping-cart-btn">
										<a href="<?= base_url('belanja') ?>">view cart</a>
										<a href="<?= base_url('belanja') ?>">checkout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-menu-area">
					<div class="mobile-menu">
						<nav id="mobile-menu-active">
							<ul class="menu-overflow">
								<li><a href="<?= base_url() ?>">HOME</a>
									<!-- <ul>
										<li><a href="index.html">home version 1</a></li>
										<li><a href="index-2.html">home version 2</a></li>
									</ul> -->
								</li>
								<li><a href="#">pages</a>
									<ul>
										<li><a href="about-us.html">about us </a></li>
										<li><a href="shop.html">shop Grid</a></li>
										<li><a href="shop-list.html">shop list</a></li>
										<li><a href="product-details.html">product details</a></li>
										<li><a href="cart-page.html">cart page</a></li>
										<li><a href="checkout.html">checkout</a></li>
										<li><a href="wishlist.html">wishlist</a></li>
										<li><a href="my-account.html">my account</a></li>
										<li><a href="login-register.html">login / register</a></li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</li>
								<li><a href="shop.html"> Shop </a>
									<ul>
										<li><a href="#">Categories 01</a>
											<ul>
												<li><a href="shop.html">Aconite</a></li>
												<li><a href="shop.html">Ageratum</a></li>
												<li><a href="shop.html">Allium</a></li>
												<li><a href="shop.html">Anemone</a></li>
												<li><a href="shop.html">Angelica</a></li>
												<li><a href="shop.html">Angelonia</a></li>
											</ul>
										</li>
										<li><a href="#">Categories 02</a>
											<ul>
												<li><a href="shop.html">Balsam</a></li>
												<li><a href="shop.html">Baneberry</a></li>
												<li><a href="shop.html">Bee Balm</a></li>
												<li><a href="shop.html">Begonia</a></li>
												<li><a href="shop.html">Bellflower</a></li>
												<li><a href="shop.html">Bergenia</a></li>
											</ul>
										</li>
										<li><a href="#">Categories 03</a>
											<ul>
												<li><a href="shop.html">Caladium</a></li>
												<li><a href="shop.html">Calendula</a></li>
												<li><a href="shop.html">Carnation</a></li>
												<li><a href="shop.html">Catmint</a></li>
												<li><a href="shop.html">Celosia</a></li>
												<li><a href="shop.html">Chives</a></li>
											</ul>
										</li>
										<li><a href="#">Categories 04</a>
											<ul>
												<li><a href="shop.html">Daffodil</a></li>
												<li><a href="shop.html">Dahlia</a></li>
												<li><a href="shop.html">Daisy</a></li>
												<li><a href="shop.html">Diascia</a></li>
												<li><a href="shop.html">Dusty Miller</a></li>
												<li><a href="shop.html">Dame’s Rocket</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">BLOG</a>
									<ul>
										<li><a href="blog-masonry.html">Blog Masonry</a></li>
										<li><a href="#">Blog Standard</a>
											<ul>
												<li><a href="blog-left-sidebar.html">left sidebar</a></li>
												<li><a href="blog-right-sidebar.html">right sidebar</a></li>
												<li><a href="blog-no-sidebar.html">no sidebar</a></li>
											</ul>
										</li>
										<li><a href="#">Post Types</a>
											<ul>
												<li><a href="blog-details-standerd.html">Standard post</a></li>
												<li><a href="blog-details-audio.html">audio post</a></li>
												<li><a href="blog-details-video.html">video post</a></li>
												<li><a href="blog-details-gallery.html">gallery post</a></li>
												<li><a href="blog-details-link.html">link post</a></li>
												<li><a href="blog-details-quote.html">quote post</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="contact.html"> Contact us </a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- Breadcrumb Area Start -->
	<div class="breadcrumb-area bg-image-3 ptb-150">
		<div class="container">
			<div class="breadcrumb-content text-center">
				<h3>Keranjang Belanja</h3>
				<ul>

				</ul>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Area End -->
	<!-- shopping-cart-area start -->
	<div class="cart-main-area ptb-100">
		<div class="container">
			<h3 class="page-title">Produk di Keranjang Belanja Anda</h3>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<form action="<?= base_url('belanja/update') ?>" method="POST">
						<div class="table-content table-responsive">
							<table>
								<thead>
									<tr>
										<th>Gambar</th>
										<th>Nama Produk</th>
										<th>Harga</th>
										<th>Qty</th>
										<th>Berat</th>
										<th>Subtotal</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php $total_berat = 0;
									$total = 0;
									foreach ($this->cart->contents() as $items) {
										$produk = $this->m_master_produk->detailprod($items['id']);
										$berat = $items['qty'] * $produk->berat;
										$total_berat = $total_berat + $berat; ?>

										<tr>
											<td class="product-thumbnail">
												<a href="#"><img src="<?= base_url('assets/produk/' . $items['picture']) ?>" alt="" width="100px"></a>
											</td>
											<td class="product-name"><a href="#"><?= $items['name'] ?> </a></td>
											<td class="product-price-cart"><span class="amount">Rp. <?= number_format($items['price']) ?></span></td>
											<td class="product-quantity">
												<div class="pro-dec-cart">
													<input class="cart-plus-minus-box" type="number" value="<?= $items['qty'] ?>" min="1" max="stok" name="<?= $i . '[qty]' ?>">
												</div>
											</td>
											<td class="product-subtotal"><?= $berat ?> Kg</td>
											<td class="product-subtotal">Rp. <?= number_format($items['subtotal']) ?></td>
											<td class="product-remove">
												<button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
												<a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
											</td>
										</tr>
										<?php $i++ ?>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="cart-shiping-update-wrapper">
									<div class="cart-shiping-update">
										<a href="<?= base_url() ?>">Belanja Lagi</a>
									</div>
									<div class="cart-clear">
										<button type="submit">Update Pesanan</button>
										<!-- <a href="#">Clear Shopping Cart</a> -->
									</div>
								</div>
							</div>
						</div>
					</form>
					<form action="<?= base_url('belanja/cekout') ?>" method="POST">
						<?php $id_pesanan = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
						<?php
						$i = 1;
						$j = 1;
						foreach ($this->cart->contents() as $items) {
							$id_detail = random_string('alnum', 5);
							echo form_hidden('qty' . $i++, $items['qty']);
							echo form_hidden('id_detail' . $j++, $id_detail);
						}
						?>
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="cart-tax">
									<div class="title-wrap">
										<h4 class="cart-bottom-title section-bg-gray">Perkiraan Pengiriman dan Biaya</h4>
									</div>
									<div class="tax-wrapper">
										<p>Pastikan Mengisi Data Dengan Benar</p>
										<div class="tax-select-wrapper">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<div class="tax-select">
															<label>
																* Provinsi
															</label>
															<select class="form-control" name="provinsi">
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<div class="tax-select">
															<label>
																* Kota
															</label>
															<select class="form-control" name="kota">
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<div class="tax-select">
															<label>
																* Expedisi
															</label>
															<select class="form-control" name="expedisi">
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<div class="tax-select">
															<label>
																* Paket
															</label>
															<select class="form-control" name="paket">
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<div class="tax-select">
															<label>
																* Zip/Postal Code
															</label>
															<input type="text" class="form-control" name="kode_post">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<div class="tax-select">
															<label>
																* No Hp
															</label>
															<input type="text" class="form-control" name="nohp_penerima">
														</div>
													</div>
												</div>
											</div>
											<div class="tax-select">
												<label>
													* Metode Bayar
												</label>
												<select class="form-control" name="metode_bayar">
													<option>---Metode Pembayaran---</option>
													<option value="1">COD</option>
													<option value="2">Transfer</option>
												</select>
											</div>
											<div class="tax-select">
												<label>
													* Detail Alamat
												</label>
												<textarea name="alamat_penerima" class="form-control"></textarea>
											</div>
											<!-- <button class="cart-btn-2" type="submit">Get A Quote</button> -->
										</div>
									</div>
								</div>
							</div>

							<input type="hidden" name="id_pesanan" value="<?= $id_pesanan ?>">
							<input type="hidden" name="estimasi">
							<input type="hidden" name="ongkir">
							<input type="hidden" name="berat" value="<?= $total_berat ?>">
							<input type="hidden" name="total_harga" value="<?= $this->cart->total() ?>">
							<input type="hidden" name="total_bayar">

							<?php $i = 1;
							foreach ($this->cart->contents() as $items) {
								echo form_hidden('qty' . $i++, $items['qty']);
							} ?>

							<?php $i = 1 ?>
							<?php $total_berat = 0;
							$total = 0;
							foreach ($this->cart->contents() as $items) {
								$produk = $this->m_master_produk->detailprod($items['id']);
								$berat = $items['qty'] * $produk->berat;
								$total_berat = $total_berat + $berat; ?>
							<?php } ?>
							<div class="col-lg-6 col-md-6">
								<div class="grand-totall">
									<div class="title-wrap">
										<h4 class="cart-bottom-title section-bg-gary-cart">Total Pesanan</h4>
									</div>
									<h5>Harga Produk <span>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></span></h5>
									<!-- <div class="total-shipping">
										<h5>Biaya Ongkir</h5>
										<ul>
											<li><span><label id="ongkir"></label></span></li>
										</ul>
									</div> -->
									<h5 class="total-shipping">Biaya Ongkir <span id="ongkir"></span></h5>
									<h4 class="grand-totall-title">Grand Total <span id="total_bayar"></span></h4>
									<!-- <a href="#">Proceed to Checkout</a> -->
									<button class="cart-btn-2" type="submit">Checkout</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer style Start -->
	<footer class="footer-area pt-75 gray-bg-3">
		<div class="footer-top gray-bg-3 pb-35">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer-widget mb-40">
							<div class="footer-title mb-25">
								<h4>Information</h4>
							</div>
							<div class="footer-content">
								<ul>
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="#">Delivery Information</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Customer Service</a></li>
									<li><a href="#">Return Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="footer-widget footer-widget-red footer-black-color mb-40">
							<div class="footer-title mb-25">
								<h4>Contact Us</h4>
							</div>
							<div class="footer-about">
								<p>Kuningan, jawabarat</p>
								<div class="footer-contact mt-20">
									<ul>
										<li>(+62) 811 102 762 123</li>
										<li>(+62) 871 182 120 127</li>
									</ul>
								</div>
								<div class="footer-contact mt-20">
									<ul>
										<li>sundaystore@gmail.com</li>
										<li>sundaystore@yahoo.com</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom pb-25 pt-25 gray-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="copyright">
							<p><a target="_blank" href="<?= base_url() ?>">Sunday Store</a></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="payment-img f-right">
							<a href="#">
								<!-- <img alt="" src="<?= base_url() ?>frontend/assets/img/icon-img/payment.png"> -->
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer style End -->
	<!-- Modal -->
	<?php
	$produk = $this->m_master_produk->produk_list();
	$gambar = $this->m_master_produk->gambar();
	?>
	<?php foreach ($produk as $key => $value) { ?>
		<div class="modal fade" id="exampleModal<?= $value->id_produk ?>" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
					</div>
					<?php echo form_open('belanja/add');
					echo form_hidden('id', $value->id_produk);
					echo form_hidden('name', $value->nama_produk);
					echo form_hidden('stock', $value->stok);
					echo form_hidden('netto', $value->berat);
					echo form_hidden('price', $value->harga - ($value->diskon / 100 * $value->harga));
					echo form_hidden('picture', $value->foto);
					echo form_hidden('qty', 1);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12">
								<!-- Thumbnail Large Image start -->
								<div class="tab-content">
									<div id="pro-1" class="tab-pane fade show active">
										<img src="<?= base_url('assets/produk/' . $value->foto) ?>" alt="">
									</div>
									<?php foreach ($gambar as $key => $img) { ?>
										<div id="pro-2" class="tab-pane fade">
											<img src="<?= base_url('assets/foto/' . $img->gambar) ?>" alt="">
										</div>
									<?php } ?>
								</div>
								<!-- Thumbnail Large Image End -->
								<!-- Thumbnail Image End -->
								<div class="product-thumbnail">
									<div class="thumb-menu owl-carousel nav nav-style" role="tablist">
										<a class="active" data-toggle="tab" href="#pro-1"><img src="<?= base_url('assets/produk/' . $value->foto) ?>" alt=""></a>
										<?php foreach ($gambar as $key => $img) { ?>
											<a data-toggle="tab" href="#pro-2"><img src="<?= base_url('assets/foto/' . $img->gambar) ?>" alt=""></a>
										<?php } ?>
									</div>
								</div>
								<!-- Thumbnail image end -->
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12">
								<div class="modal-pro-content">
									<h3><?= $value->nama_produk ?> </h3>
									<div class="product-price-wrapper">
										<?php if ($value->diskon > 1) { ?>
											<span class="valueuct-price-old">Rp. <?= number_format($value->harga), 0 ?> </span>
											<span>Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)), 0 ?> -</span>
										<?php } elseif ($value->diskon == 0) { ?>
											<span>Rp. <?= number_format($value->harga), 0 ?> -</span>
										<?php } ?>
									</div>
									<p><?= $value->deskripsi ?></p>
									<div class="product-quantity">
										<div class="cart-plus-minus">
											<input class="cart-plus-minus-box" type="number" name="qty" value="1" min="1" max="<?= $value->stok ?>">
										</div>
										<button type="submit" class="btn btn-success">Add to cart</button>
									</div>
									<?php if ($value->stok  >= 1) { ?>
										<span><i class="fa fa-check"></i>stock Kosong</span>
									<?php } elseif ($value->stok <= 1) { ?>
										<span><i class="fa fa-check"></i> In stock</span>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
		<!-- Modal end -->
	<?php } ?>


	<!-- all js here -->
	<script src="<?= base_url() ?>frontend/assets/js/vendor/jquery-1.12.0.min.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/popper.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/isotope.pkgd.min.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/ajax-mail.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/plugins.js"></script>
	<script src="<?= base_url() ?>frontend/assets/js/main.js"></script>


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