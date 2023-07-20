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
<<<<<<< HEAD
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
<form action="<?= base_url('belanja/update') ?>" method="POST">
	<div class="container-fluid pt-5">
		<div class="row px-xl-5">
			<div class="col-lg-8 table-responsive mb-5">
				<table class="table table-bordered text-center mb-0">
					<thead class="bg-secondary text-dark">
						<tr>
							<th>Products</th>
							<th>Harga</th>
							<th>Quantity</th>
							<th>Berat</th>
							<th>SubTotal</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody class="align-middle">
						<?php $i = 1 ?>
						<?php $total_berat = 0;
						$total = 0;
						foreach ($this->cart->contents() as $items) {
							$produk = $this->m_master_produk->detailprod($items['id']);
							$berat = $items['qty'] * $produk->berat;
							$total_berat = $total_berat + $berat; ?>
							<tr>
								<td class="align-middle"><img src="<?= base_url('assets/produk/' . $items['picture']) ?>" alt="" style="width: 50px;"> <?= $items['name'] ?></td>
								<td class="align-middle">Rp. <?= number_format($items['price']) ?></td>
								<td class="align-middle">
									<div class="input-group quantity mx-auto" style="width: 100px;">
										<input class="form-control form-control-sm bg-secondary text-center" type="number" value="<?= $items['qty'] ?>" min="1" max="stok" name="<?= $i . '[qty]' ?>">
									</div>
								</td>
								<td class="align-middle"><?= $berat ?> Kg</td>
								<td class="align-middle">Rp. <?= number_format($items['subtotal']) ?></td>
								<td class="align-middle">
									<button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
									<a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
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
						<h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between mb-3 pt-1">
							<h6 class="font-weight-medium">Subtotal</h6>
							<h6 class="font-weight-medium"><?= number_format($this->cart->total(), 0) ?></h6>
=======
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
											<td class="product-price-cart"><span class="amount">Rp. <?= number_format($items['price']), 0 ?></span></td>
											<td class="product-quantity">
												<div class="pro-dec-cart">
													<input class="cart-plus-minus-box" type="number" value="<?= $items['qty'] ?>" min="1" max="stok" name="<?= $i . '[qty]' ?>">
												</div>
											</td>
											<td class="product-subtotal"><?= $berat ?> Kg</td>
											<td class="product-subtotal">Rp. <?= number_format($items['subtotal']), 0 ?></td>
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
									<div class="total-shipping">
										<h5>Biaya Ongkir</h5>
										<ul>
											<li><span><label id="ongkir"></label></span></li>
										</ul>
									</div>
									<h4 class="grand-totall-title">Grand Total <span><label id="total_bayar"></label></span></h4>
									<!-- <a href="#">Proceed to Checkout</a> -->
									<button class="cart-btn-2" type="submit">Checkout</button>
								</div>
							</div>
>>>>>>> 5840f3f495f81f9e33751da1d1402c0e16c12357
						</div>
						<div class="d-flex justify-content-between">
							<h6 class="font-weight-medium">Total Berat</h6>
							<h6 class="font-weight-medium"><?= $total_berat ?> Gr</h6>
						</div>
					</div>
					<div class="card-footer border-secondary bg-transparent">
						<div class="d-flex justify-content-between mt-2">
							<h5 class="font-weight-bold">Total</h5>
							<h5 class="font-weight-bold">Rp. <?= number_format($this->cart->total(), 0) ?></h5>
						</div>
						<a href="<?= base_url('belanja/cekout') ?>" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- Cart End -->
