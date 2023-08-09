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
		<h1 class="font-weight-semi-bold text-uppercase mb-3">Registrasi Pelanggan</h1>
		<div class="d-inline-flex">
			<p class="m-0"><a href="<?= base_url() ?>">Home</a></p>
			<p class="m-0 px-2">-</p>
			<p class="m-0">Registrasi</p>
		</div>
	</div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-fluid pt-5">
	<div class="text-center mb-4">
		<h2 class="section-title px-5"><span class="px-2">Registrasi Pelanggan</span></h2>
	</div>
	<div class="row px-xl-5">
		<div class="col-lg-5 mb-5">
			<div class="contact-form">
				<div id="success"></div>
				<?php if ($this->session->userdata('success')) { ?><div class="alert alert-success" role="alert"><?= $this->session->userdata('success') ?></div>
				<?php } ?>
				<?php if ($this->session->userdata('error')) { ?><div class="alert alert-danger" role="alert"><?= $this->session->userdata('error') ?></div>
				<?php } ?>
				<form action="<?= base_url('pelanggan/register') ?>" method="post">
					<div class="control-group">
						<input type="text" name="nama_pelanggan" placeholder="Nama Lengkap" class="form-control" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="text" name="nohp_pelanggan" placeholder="No Hp" class="form-control" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="email" name="email_pelanggan" placeholder="Email" class="form-control" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="password" name="password_pelanggan" placeholder="Password" class="form-control" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="password" name="ulangi_password_pelanggan" placeholder="Ulangi Password" class="form-control" />
						<p class="help-block text-danger"></p>
					</div>
					<div class="control-group">
						<input type="text" name="alamat_pelanggan" placeholder="Alamat Lengkap" class="form-control" />
						<p class="help-block text-danger"></p>
					</div>
					<div>
						<button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">
							Registrasi
						</button>
						<a href="<?= base_url('pelanggan') ?>" class="btn btn-warning py-2 px-4">Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Contact End -->