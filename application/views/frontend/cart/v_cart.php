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
	<form action="<?= base_url('belanja/update_cart') ?>" method="POST">
		<div class="row px-xl-5">
			<div class="col-lg-8 table-responsive mb-5">
				<table class="table table-bordered text-center mb-0">
					<thead class="bg-secondary text-dark">
						<tr>
							<th>Produk</th>
							<th>Harga</th>
							<th>Diskon</th>
							<th>Quantity</th>
							<th>Berat</th>
							<th>Total</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="align-middle">
						<?php
						$i = 1;
						$tot = 0;
						$total_berat = 0;
						foreach ($cart['cart'] as $key => $value) {
							$berat = $value->qty_cart * $value->berat;
							$total_berat = $total_berat + $berat;
							$tot += $value->qty_cart * ($value->harga - ($value->diskon / 100 * $value->harga));
						?>
							<tr>
								<td class="align-middle"><img src="<?= base_url('assets/produk/' . $value->foto) ?>" alt="" style="width: 50px;"> <?= $value->nama_produk ?></td>
								<td class="align-middle">Rp. <?= number_format($value->harga, 0) ?></td>
								<td class="align-middle">Rp. <?= $value->diskon ?>%</td>
								<td class="align-middle">
									<div class="input-group quantity mx-auto" style="width: 100px;">
										<input class="form-control form-control-sm bg-secondary text-center" type="number" value="<?= $value->qty_cart ?>" min="1" max="stok" name="qty<?= $i++ ?>">
									</div>
								</td>
								<td class="align-middle"><?= $value->qty_cart * $value->berat ?> Kg</td>
								<td class="align-middle">Rp. <?= number_format($value->harga * $value->qty_cart - ($value->diskon / 100 * $value->harga), 0) ?></td>
								<td class="align-middle">
									<button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
									<a href="<?= base_url('belanja/deleteCart/' . $value->id_keranjang) ?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php $i++ ?>
						<?php } ?>
					</tbody>
				</table>

			</div>
			<div class="col-lg-4">
				<div class="card border-secondary mb-5">
					<div class="card-header bg-secondary border-0">
						<h4 class="font-weight-semi-bold m-0">Rincian Pesanan</h4>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between mb-3 pt-1">
							<h6 class="font-weight-medium">Total</h6>
							<h6 class="font-weight-medium"><?= number_format($tot, 0) ?></h6>
						</div>
						<div class="d-flex justify-content-between">
							<h6 class="font-weight-medium">Total Berat</h6>
							<h6 class="font-weight-medium"><?= $total_berat ?> Kg</h6>
						</div>
					</div>
					<div class="card-footer border-secondary bg-transparent">
						<div class="d-flex justify-content-between mt-2">
							<h5 class="font-weight-bold">Subtotal</h5>
							<h5 class="font-weight-bold">Rp. <?= number_format($tot, 0) ?></h5>
						</div>
						<!-- <button class="btn btn-block btn-primary my-3 py-3" type="submit">Cekout Produk</button> -->
						<a href="<?= base_url('belanja/cekout') ?>" class="btn btn-block btn-primary my-3 py-3">Proses Untuk Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- Cart End -->