<<<<<<< HEAD
<!-- Navbar Start -->
<div class="container-fluid mb-5">
	<div class="row border-top px-xl-5">
		<div class="col-lg-3 d-none d-lg-block">
			<a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
				<h6 class="m-0">Categories</h6>
				<i class="fa fa-angle-down text-dark"></i>
			</a>
			<?php $kategori = $this->m_master_produk->kategori(); ?>
			<nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
				<div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
					<?php foreach ($kategori as $key => $kategoris) { ?>
						<a href="<?= base_url('home/kategori/' . $kategoris->id_kategori) ?>" class="nav-item nav-link"><?= $kategoris->nama_kategori ?></a>
					<?php } ?>
=======
<!-- Slider Start -->
<div class="slider-area">
	<div class="slider-active owl-dot-style owl-carousel">
		<div class="single-slider ptb-240 bg-img" style="background-image:url(<?= base_url() ?>frontend/assets/img/slider/slider-2.jpg);">
			<div class="container">
				<div class="slider-content slider-animated-1">
					<h1 class="animated">Selamat Datang di Website</h1>
					<h1 class="animated"><span class="theme-color">Toko Sunday Store</span></h1>
					<p>Berbagai Macam Kebutuhan Gaya Anda Ada di Toko Kami</p>
>>>>>>> 5840f3f495f81f9e33751da1d1402c0e16c12357
				</div>
			</nav>
		</div>
<<<<<<< HEAD
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
						<a href="<?= base_url('home/list_product') ?>" class="nav-item nav-link">Shop</a>
						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pesanan</a>
							<div class="dropdown-menu rounded-0 m-0">
								<a href="<?= base_url('belanja') ?>" class="dropdown-item">Shopping Cart</a>
								<?php if ($this->session->userdata('email_pelanggan') == "") { ?>
								<?php } else { ?>
									<a href="<?= base_url('pesanan') ?>" class="dropdown-item">Pesanan</a>
=======
		
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
										<button type="submit" class="btn btn-success">+ Add to cart</button>
										<!-- <a href="<?= base_url('belanja/add/' . $value->id_produk) ?>">+ Add to cart</a> -->
									</h4>
								</div>
							</div>
							<div class="product-price-wrapper">
								<?php if ($value->diskon == 0) { ?>
									<span>Rp. <?= number_format($value->harga), 0 ?> -</span>
								<?php } elseif ($value->diskon > 1) { ?>
									<span>Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)), 0 ?> -</span>
									<span class="product-price-old">Rp. <?= number_format($value->harga), 0 ?> </span>
>>>>>>> 5840f3f495f81f9e33751da1d1402c0e16c12357
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="navbar-nav ml-auto py-0">
						<?php if ($this->session->userdata('email_pelanggan') == "") { ?>
							<a href="<?= base_url('pelanggan') ?>" class="nav-item nav-link">Login</a>
							<a href="" class="nav-item nav-link">Register</a>
						<?php } else { ?>
							<a href="#" class="nav-item nav-link"><?= $this->session->userdata('nama_pelanggan') ?></a>
							<a href="<?= base_url('pelanggan/logout') ?>" class="nav-item nav-link">Logout</a>
						<?php } ?>
					</div>
				</div>
			</nav>
			<div id="header-carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" style="height: 410px;">
						<img class="img-fluid" src="<?= base_url() ?>front/img/carousel-1.jpg" alt="Image">
						<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							<div class="p-3" style="max-width: 700px;">
								<h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
								<h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
								<a href="<?= base_url('home/list_product') ?>" class="btn btn-light py-2 px-3">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="carousel-item" style="height: 410px;">
						<img class="img-fluid" src="<?= base_url() ?>front/img/carousel-2.jpg" alt="Image">
						<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							<div class="p-3" style="max-width: 700px;">
								<h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
								<h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
								<a href="<?= base_url('home/list_product') ?>" class="btn btn-light py-2 px-3">Shop Now</a>
							</div>
<<<<<<< HEAD
						</div>
=======
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

						
>>>>>>> 5840f3f495f81f9e33751da1d1402c0e16c12357
					</div>
				</div>
				<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
					<div class="btn btn-dark" style="width: 45px; height: 45px;">
						<span class="carousel-control-prev-icon mb-n2"></span>
					</div>
				</a>
				<a class="carousel-control-next" href="#header-carousel" data-slide="next">
					<div class="btn btn-dark" style="width: 45px; height: 45px;">
						<span class="carousel-control-next-icon mb-n2"></span>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Navbar End -->
<!-- Featured Start -->
<!-- <div class="container-fluid pt-5">
	<div class="row px-xl-5 pb-3">
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="d-flex align-items-center border mb-4" style="padding: 30px;">
				<h1 class="fa fa-check text-primary m-0 mr-3"></h1>
				<h5 class="font-weight-semi-bold m-0">Quality Product</h5>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="d-flex align-items-center border mb-4" style="padding: 30px;">
				<h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
				<h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="d-flex align-items-center border mb-4" style="padding: 30px;">
				<h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
				<h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="d-flex align-items-center border mb-4" style="padding: 30px;">
				<h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
				<h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
			</div>
		</div>
	</div>
</div> -->
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
	<div class="row px-xl-5 pb-3">
		<?php foreach ($kategori as $key => $gories) { ?>
			<div class="col-lg-4 col-md-6 pb-1">
				<div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
					<!-- <a href="" class="cat-img position-relative overflow-hidden mb-3">
						<img class="img-fluid" src="img/cat-1.jpg" alt="">
					</a> -->
					<h5 class="font-weight-semi-bold m-0"><?= $gories->nama_kategori ?></h5>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- Categories End -->

<!-- Products Start -->
<div class="container-fluid pt-5">
	<div class="text-center mb-4">
		<h2 class="section-title px-5"><span class="px-2">Produk Baru</span></h2>
	</div>

	<div class="row px-xl-5 pb-3">
		<?php foreach ($produk as $value) { ?>
			<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
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
				<div class="card product-item border-0 mb-4">
					<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
						<img class="img-fluid w-100" src="<?= base_url('assets/produk/' . $value->foto) ?>" width="100px" alt="">
					</div>
					<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
						<h6 class="text-truncate mb-3"><?= $value->nama_produk ?></h6>
						<div class="d-flex justify-content-center">
							<?php if ($value->diskon == 0) { ?>
								<h6>Rp. <?= number_format($value->harga) ?> -</h6>
							<?php } elseif ($value->diskon > 1) { ?>
								<h6>Rp. <?= number_format($value->harga) ?> -</h6>
								<h6 class="text-muted ml-2"><del>Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> -</del></h6>
							<?php } ?>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between bg-light border">
						<a href="<?= base_url('home/detail/' . $value->id_produk) ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
						<button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		<?php
		}
		?>
	</div>
</div>
<!-- Products End -->


<!-- Subscribe Start -->
<div class="container-fluid bg-secondary my-5">
	<div class="row justify-content-md-center py-5 px-xl-5">
		<!-- <div class="col-md-6 col-12 py-5">
			<div class="text-center mb-2 pb-2">
				<h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
				<p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
			</div>
			<form action="">
				<div class="input-group">
					<input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
					<div class="input-group-append">
						<button class="btn btn-primary px-4">Subscribe</button>
					</div>
				</div>
			</form>
		</div> -->
	</div>
</div>
<!-- Subscribe End -->


<!-- Products Start -->
<div class="container-fluid pt-5">
	<div class="text-center mb-4">
		<h2 class="section-title px-5"><span class="px-2">PRODUK DISKON</span></h2>
	</div>
	<div class="row px-xl-5 pb-3">
		<?php foreach ($diskon as $key => $disk) { ?>
			<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
				<?php echo form_open('belanja/add');
				echo form_hidden('id', $disk->id_produk);
				echo form_hidden('name', $disk->nama_produk);
				echo form_hidden('stock', $disk->stok);
				echo form_hidden('netto', $disk->berat);
				echo form_hidden('price', $disk->harga - ($disk->diskon / 100 * $disk->harga));
				echo form_hidden('picture', $disk->foto);
				echo form_hidden('qty', 1);
				echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
				?>
				<div class="card product-item border-0 mb-4">
					<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
						<img class="img-fluid w-100" src="<?= base_url("assets/produk/" . $disk->foto) ?>" alt="">
					</div>
					<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
						<h6 class="text-truncate mb-3"><?= $disk->nama_produk ?></h6>
						<div class="d-flex justify-content-center">
							<?php if ($disk->diskon == 0) { ?>
								<h6>Rp. <?= number_format($disk->harga) ?> -</h6>
							<?php } elseif ($disk->diskon > 1) { ?>
								<h6>Rp. <?= number_format($disk->harga) ?> -</h6>
								<h6 class="text-muted ml-2"><del>Rp. <?= number_format($disk->harga - ($disk->diskon / 100 * $disk->harga)) ?> -</del></h6>
							<?php } ?>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-between bg-light border">
						<a href="<?= base_url('home/detail/' . $disk->id_produk) ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
						<button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		<?php } ?>
	</div>
</div>
<!-- Products End -->
