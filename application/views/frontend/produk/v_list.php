<!-- Navbar Start -->
<div class="container-fluid">
	<div class="row border-top px-xl-5">
		<div class="col-lg-3 d-none d-lg-block">
			<a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
				<h6 class="m-0">Categories</h6>
				<i class="fa fa-angle-down text-dark"></i>
			</a>
			<?php $kategori = $this->m_master_produk->kategori(); ?>
			<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
				<div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
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
						<a href="<?= base_url('home/list_product') ?>" class="nav-item nav-link">Shop</a>
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
		<h1 class="font-weight-semi-bold text-uppercase mb-3"><?= $title ?></h1>
		<div class="d-inline-flex">
			<p class="m-0"><a href="<?= base_url() ?>">Home</a></p>
			<p class="m-0 px-2">-</p>
			<p class="m-0">Shop</p>
		</div>
	</div>
</div>
<!-- Page Header End -->


<!-- Shop Start -->
<div class="container-fluid pt-5">
	<div class="row px-xl-5">
		<!-- Shop Sidebar Start -->
		<!-- Shop Product Start -->
		<div class="col-lg-12 col-md-12">
			<div class="row pb-3">
				<div class="col-12 pb-1">
					<div class="d-flex align-items-center justify-content-between mb-4">
						<form action="<?= base_url('pencarian') ?>" method="get">
							<div class="input-group">
								<input type="text" class="form-control" name="keyword" placeholder="Search by name">
								<div class="input-group-append">
									<button type="submit" class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<?php if (count($produk) > 0) : ?>
					<?php foreach ($produk as $value) : ?>
						<div class="col-lg-4 col-md-6 col-sm-12 pb-1">
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
									<img class="img-fluid w-100" src="<?= base_url('assets/produk/' . $value->foto) ?>" alt="">
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3"><?= $value->nama_produk ?></h6>
									<div class="d-flex justify-content-center">
										<?php if ($value->diskon == 0) { ?>
											<span>Rp. <?= number_format($value->harga) ?> -</span>
										<?php } elseif ($value->diskon > 1) { ?>
											<span>Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?> -</span>
											<span class="product-price-old">Rp. <?= number_format($value->harga) ?> </span>
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
					<?php endforeach; ?>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
		<!-- Shop Product End -->
	</div>
</div>
<!-- Shop End -->