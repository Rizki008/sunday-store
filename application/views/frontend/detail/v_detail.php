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
							<a href="" class="nav-item nav-link">Register</a>
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
		<h1 class="font-weight-semi-bold text-uppercase mb-3">Detail Produk</h1>
		<div class="d-inline-flex">
			<p class="m-0"><a href="<?= base_url() ?>">Home</a></p>
			<p class="m-0 px-2">-</p>
			<p class="m-0">Detail Produk</p>
		</div>
	</div>
</div>
<!-- Page Header End -->


<!-- Shop Detail Start -->
<div class="container-fluid py-5">
	<div class="row px-xl-5">
		<div class="col-lg-5 pb-5">
			<?php echo form_open('belanja/add');
			echo form_hidden('id_produk', $produk->id_produk);
			echo form_hidden('qty', 1);
			?>
			<div id="product-carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner border">
					<div class="carousel-item active">
						<img class="w-100 h-100" src="<?= base_url('assets/produk/' . $produk->foto) ?>" alt="Image">
					</div>
					<?php foreach ($gambar as $key => $img) { ?>
						<div class="carousel-item">
							<img class="w-100 h-100" src="<?= base_url('assets/foto/' . $img->gambar) ?>" alt="Image">
						</div>
					<?php } ?>
				</div>
				<a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
					<i class="fa fa-2x fa-angle-left text-dark"></i>
				</a>
				<a class="carousel-control-next" href="#product-carousel" data-slide="next">
					<i class="fa fa-2x fa-angle-right text-dark"></i>
				</a>
			</div>
		</div>

		<div class="col-lg-7 pb-5">
			<h3 class="font-weight-semi-bold"><?= $produk->nama_produk ?></h3>
			<div class="d-flex mb-3">
				<small class="pt-1">Stock : <?= $produk->stok ?></small>
			</div>
			<h3 class="font-weight-semi-bold mb-4">Rp. <?= number_format($produk->harga - ($produk->diskon / 100 * $produk->harga)) ?></h3>
			<p class="mb-4"><?= $produk->deskripsi ?></p>
			<div class="d-flex align-items-center mb-4 pt-2">
				<div class="input-group quantity mr-3" style="width: 130px;">
					<input class="form-control" type="number" name="qty" value="1" min="1" max="<?= $produk->stok ?>">
				</div>
				<button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
	<div class="row px-xl-5">
		<div class="col">
			<?php foreach ($jml_ulasan as $key => $jml) { ?>
			<?php } ?>
			<div class="nav nav-tabs justify-content-center border-secondary mb-4">
				<a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-3">Reviews (<?= $jml->jml ?>)</a>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-pane-3">
					<div class="row">
						<div class="col-md-6">
							<?php foreach ($ulasan as $key => $ulas) { ?>
								<?php if ($ulas->status_ulasan == 1) { ?>

									<h4 class="mb-4"><?= $jml->jml ?> Ulasan Pada Produk</h4>
									<div class="media mb-4">
										<div class="media-body">
											<h6><?= $ulas->nama_pelanggan ?><small> - <i><?= $ulas->tanggal_ulasan ?></i></small></h6>

											<p><?= $ulas->ulasan ?></p>
										</div>
									</div>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Shop Detail End -->


<!-- Products Start -->
<div class="container-fluid py-5">
	<div class="text-center mb-4">
		<h2 class="section-title px-5"><span class="px-2">Mungkin Kamu Suka Produk Ini</span></h2>
	</div>
	<div class="row px-xl-5">
		<div class="col">
			<div class="owl-carousel related-carousel">
				<?php if (count($produklain) > 0) : ?>
					<?php foreach ($produklain as $product) : ?>
						<div class="card product-item border-0">
							<?php echo form_open('belanja/add');
							echo form_hidden('id_produk', $product->id_produk);
							echo form_hidden('qty', 1);
							?>
							<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
								<img class="img-fluid w-100" src="<?= base_url('assets/produk/' . $product->foto) ?>" alt="">
							</div>
							<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
								<h6 class="text-truncate mb-3"><?= $product->nama_produk ?></h6>
								<div class="d-flex justify-content-center">
									<?php if ($product->diskon == 0) { ?>
										<h6>Rp. <?= number_format($product->harga) ?> -</h6>
									<?php } elseif ($product->diskon > 1) { ?>
										<h6>Rp. <?= number_format($product->harga - ($product->diskon / 100 * $product->harga)) ?> -</h6>
										<h6 class="text-muted ml-2"><del>Rp. <?= number_format($product->harga) ?> -</del></h6>
									<?php } ?>
								</div>
							</div>
							<div class="card-footer d-flex justify-content-between bg-light border">
								<a href="<?= base_url('home/detail/' . $product->id_produk) ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
								<button type="submit" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
							</div>
							<?php echo form_close() ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- Products End -->