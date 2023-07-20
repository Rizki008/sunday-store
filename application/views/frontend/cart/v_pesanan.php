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
		<h1 class="font-weight-semi-bold text-uppercase mb-3"><?= $title ?></h1>
		<div class="d-inline-flex">
			<p class="m-0"><a href="<?= base_url() ?>">Home</a></p>
			<p class="m-0 px-2">-</p>
			<p class="m-0"><?= $title ?></p>
		</div>
	</div>
</div>
<!-- Page Header End -->


<!-- Cart Start -->
<div class="container-fluid pt-5">
	<div class="row px-xl-5">
		<div class="col-lg-12 table-responsive mb-5">
			<table class="table table-bordered text-center mb-0">
				<thead class="bg-secondary text-dark">
					<tr>
						<th>No</th>
						<th>No Pesanan</th>
						<th>Harga Satuan</th>
						<th>Biaya Ongkir</th>
						<th>Total Harga</th>
						<th>Status Pesanan</th>
						<th>Detail</th>
					</tr>
				</thead>
				<tbody class="align-middle">
					<?php $no = 1;
					foreach ($pesanan as $key => $value) { ?>
						<tr>
							<td class="align-middle"><?= $no++ ?></td>
							<td class="align-middle"><?= $value->id_pesanan ?></td>
							<td class="align-middle">Rp. <?= number_format($value->total_harga), 0 ?></td>
							<td class="align-middle">Rp. <?= number_format($value->ongkir), 0 ?></td>
							<td class="align-middle">Rp. <?= number_format($value->total_bayar), 0 ?></td>
							<td class="align-middle">
								<?php if ($value->status_order == 1 && $value->metode_bayar == 2) { ?>
									<span class="badge badge-danger">Belum Bayar</span> <br>
									<span class="badge badge-warning">Pembayaran Transfer</span>
								<?php } elseif ($value->status_order == 1 && $value->metode_bayar == 1) { ?>
									<span class="badge badge-danger">Belum Bayar</span> <br>
									<span class="badge badge-warning">Pembayaran COD</span><br>
									<span class="badge badge-primary">Menungu Konfirmasi Pesanan</span>
								<?php } elseif ($value->status_order == 2) { ?>
									<span class="badge badge-warning">Konfirmasi Pembayaran</span>
								<?php } elseif ($value->status_order == 3) { ?>
									<span class="badge badge-primary">Pengiriman</span>
								<?php } elseif ($value->status_order == 4) { ?>
									<span class="badge badge-success">Diterima</span>
								<?php } ?>
							</td>
							<td class="align-middle">
								<?php if ($value->status_order == 1 && $value->metode_bayar == 2) { ?>
									<a href="<?= base_url('pesanan/detail/' . $value->id_pesanan) ?>">Detail </a><br><br><br>
									<a href="<?= base_url('pesanan/bayar/' . $value->id_pesanan) ?>">Pembayaran</a>
								<?php } elseif ($value->status_order == 3) { ?>
									<a href="<?= base_url('pesanan/detail/' . $value->id_pesanan) ?>">Detail </a><br><br><br>
									<a href="<?= base_url('pesanan/selesai/' . $value->id_pesanan) ?>">Diterima</a>
								<?php } elseif ($value->status_order == 4 and $value->status_ulasan == 0) { ?>
									<a href="<?= base_url('pesanan/detail/' . $value->id_pesanan) ?>">Ulasan</a>
									<!-- <a href="<?= base_url('pesanan/review/' . $value->id_pesanan) ?>"><i class="fa fa-comment"></i></a> -->
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Cart End -->
