<!-- Footer style Start -->
<footer class="footer-area pt-75 gray-bg-3">
	<div class="footer-top gray-bg-3 pb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer-widget mb-40">
						<div class="footer-title mb-25">
							<h4>Informasi</h4>
						</div>
						<div class="footer-content">
							<ul>
								<li>Alamat Toko : Jalan Raya Sidaraja, Desa Sidaraja, Kecamatan Ciawigebang, Kabupaten Kuningan, Jawa Barat</li>
								<li>Nomor Rekening Sunday Store Bank BCA. Atas Nama : Suryo</li>
								<!-- <li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Customer Service</a></li>
								<li><a href="#">Return Policy</a></li> -->
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer-widget footer-widget-red footer-black-color mb-40">
						<div class="footer-title mb-25">
							<h4>Kontak</h4>
						</div>
						<div class="footer-about">

							<div class="footer-contact mt-20">
								<ul>

									<ul>
										<li>WhatssApp : 087723346534</li>
										<li>Instagram : sundaystore</li>
										<li>Email : sundaystore@yahoo.com</li>
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
$produk = $this->m_master_produk->produk();
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
							<!-- <div class="product-thumbnail">
								<div class="thumb-menu owl-carousel nav nav-style" role="tablist">
									<a class="active" data-toggle="tab" href="#pro-1"><img src="<?= base_url('assets/produk/' . $value->foto) ?>" alt=""></a>
									<?php foreach ($gambar as $key => $img) { ?>
										<a data-toggle="tab" href="#pro-2"><img src="<?= base_url('assets/foto/' . $img->gambar) ?>" alt=""></a>
									<?php } ?>
								</div>
							</div> -->
							<!-- Thumbnail image end -->
						</div>
						<div class="col-md-7 col-sm-7 col-xs-12">
							<div class="modal-pro-content">
								<h3><?= $value->nama_produk ?> </h3>
								<div class="product-price-wrapper">
									<?php if ($value->diskon > 1) { ?>
										<span class="valueuct-price-old">Rp. <?= number_format($value->harga) ?> </span>
										<span>Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> -</span>
									<?php } elseif ($value->diskon == 0) { ?>
										<span>Rp. <?= number_format($value->harga) ?> -</span>
									<?php } ?>
								</div>
								<?php if ($value->stok  >= 1) { ?>
									<span><i class="fa fa-check"></i>In Stock</span>
								<?php } elseif ($value->stok <= 1) { ?>
									<span><i class="fa fa-check"></i>Stock Kosong</span>
								<?php } ?>
								<p><?= $value->deskripsi ?></p>
								<div class="product-quantity">
									<div class="cart-plus-minus">
										<input class="cart-plus-minus-box" type="number" name="qty" value="1" min="1" max="<?= $value->stok ?>">
									</div>
								</div>
								<button type="submit" class="btn btn-success">Add to cart</button>
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
</body>

</html>