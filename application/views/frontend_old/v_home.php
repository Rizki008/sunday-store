<!-- Slider Start -->
<div class="slider-area">
	<div class="slider-active owl-dot-style owl-carousel">
		<div class="single-slider ptb-240 bg-img" style="background-image:url(<?= base_url() ?>frontend/assets/img/slider/slider-2.jpg);">
			<div class="container">
				<div class="slider-content slider-animated-1">
					<h1 class="animated">Selamat Datang di Website</h1>
					<h1 class="animated"><span class="theme-color">Toko Sunday Store</span></h1>
					<p>Berbagai Macam Kebutuhan Gaya Anda Ada di Toko Kami</p>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
</div>
<!-- Slider End -->
<!-- Product Area Start -->
<div class="product-area bg-image-1 pt-100 pb-95">
	<div class="container">
		<div class="featured-product-active hot-flower owl-carousel product-nav">
			<?php if (count($produk) > 0) : ?>
				<?php foreach ($produk as $value) : ?>
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
					<div class="product-wrapper">
						<div class="product-img">
							<a href="<?= base_url('home/detail/' . $value->id_produk) ?>">
								<img alt="" src="<?= base_url('assets/produk/' . $value->foto) ?>">
							</a>
							<?php if ($value->diskon == 0) { ?>
							<?php } elseif ($value->diskon > 1) { ?>
								<span>-<?= $value->diskon ?>%</span>
							<?php } ?>
							<div class="product-action">
								<a class="action-compare" href="#" data-target="#exampleModal<?= $value->id_produk ?>" data-toggle="modal" title="Quick View">
									<i class="ion-ios-search-strong"></i>
								</a>
							</div>
						</div>
						<div class="product-content text-left">
							<div class="product-hover-style">
								<div class="product-title">
									<h4>
										<a href="<?= base_url('home/detail/' . $value->id_produk) ?>"><?= $value->nama_produk ?></a>
									</h4>
								</div>
								<div class="cart-hover">
									<h4>
										<button type="submit" class="btn btn-success">+ Add To Cart</button>
										<!-- <a href="<?= base_url('belanja/add/' . $value->id_produk) ?>">+ Add to cart</a> -->
									</h4>
								</div>
							</div>
							<div class="product-price-wrapper">
								<?php if ($value->diskon == 0) { ?>
									<span>Rp. <?= number_format($value->harga) ?> -</span>
								<?php } elseif ($value->diskon > 1) { ?>
									<span>Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> -</span>
									<span class="product-price-old">Rp. <?= number_format($value->harga) ?> </span>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php echo form_close() ?>
				<?php endforeach; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Product Area End -->
<!-- Banner Start -->
<div class="banner-area pt-100 pb-70">
	<div class="container">
		<div class="banner-wrap">
			<div class="row">
				<?php foreach ($diskon as $key => $disk) { ?>
					<div class="col-lg-6 col-md-6">
						<div class="single-banner img-zoom mb-30">
							<a href="<?= base_url('home/detail/' . $disk->id_produk) ?>">
								<img src="<?= base_url("assets/produk/" . $disk->foto) ?>" alt="">
							</a>
							<div class="banner-content">
								<h4>-<?= $disk->diskon ?>% Sale</h4>
								<h5><?= $disk->nama_produk ?></h5>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->
<!-- New Products Start -->
<div class="product-area gray-bg pt-90 pb-65">
	<div class="container">
		<div class="product-top-bar section-border mb-55">
			<div class="section-title-wrap text-center">
				<h3 class="section-title">New Products</h3>
			</div>
		</div>
		<div class="tab-content jump">
			<div class="tab-pane active">
				<div class="featured-product-active owl-carousel product-nav">
					<?php if (count($produk_all) > 0) : ?>
						<?php foreach ($produk_all as $prod) : ?>
							<?php echo form_open('belanja/add');
							echo form_hidden('id', $prod->id_produk);
							echo form_hidden('name', $prod->nama_produk);
							echo form_hidden('stock', $prod->stok);
							echo form_hidden('netto', $prod->berat);
							echo form_hidden('price', $prod->harga - ($prod->diskon / 100 * $prod->harga));
							echo form_hidden('picture', $prod->foto);
							echo form_hidden('qty', 1);
							echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
							?>
							<div class="product-wrapper-single">
								<div class="product-wrapper mb-30">
									<div class="product-img">
										<a href="<?= base_url('home/detail/' . $prod->id_produk) ?>">
											<img alt="" src="<?= base_url('assets/produk/' . $prod->foto) ?>">
										</a>
										<?php if ($prod->diskon == 0) { ?>
										<?php } elseif ($prod->diskon > 1) { ?>
											<span>-<?= $prod->diskon ?>%</span>
										<?php } ?>
										<div class="product-action">
											<a class="action-compare" href="#" data-target="#exampleModal<?= $prod->id_produk ?>" data-toggle="modal" title="Quick View">
												<i class="ion-ios-search-strong"></i>
											</a>
										</div>
									</div>
									<div class="product-content text-left">
										<div class="product-hover-style">
											<div class="product-title">
												<h4>
													<a href="<?= base_url('home/detail/' . $prod->id_produk) ?>"><?= $prod->nama_produk ?></a>
												</h4>
											</div>
											<div class="cart-hover">
												<h4>
													<button type="submit" class="btn btn-success">+ Add to cart</button>
													<!-- <a href="<?= base_url('belanja/add/' . $prod->id_produk) ?>">+ Add to cart</a> -->
												</h4>
											</div>
										</div>
										<div class="product-price-wrapper">
											<?php if ($prod->diskon == 0) { ?>
												<span>Rp. <?= number_format($prod->harga) ?> -</span>
											<?php } elseif ($prod->diskon > 1) { ?>
												<span>Rp. <?= number_format($prod->harga - ($prod->diskon / 100 * $prod->harga)) ?> -</span>
												<span class="product-price-old">Rp. <?= number_format($prod->harga) ?> </span>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close() ?>
						<?php endforeach; ?>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- New Products End -->
<!-- Testimonial Area Start -->


</div>
</div>
</div>
</div>
</div>
</div>
<!-- Testimonial Area End -->