<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150">
	<div class="container">
		<div class="breadcrumb-content text-center">
			<h3><?= $title ?></h3>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li class="active"><?= $title ?> </li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->
<!-- shopping-cart-area start -->
<div class="cart-main-area ptb-100">
	<div class="container">
		<h3 class="page-title">Pesanan Anda</h3>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<form action="#">
					<div class="table-content table-responsive wishlist">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>No Pesanan</th>
									<th>Harga Satuan</th>
									<th>Harga Ongkir</th>
									<th>Total Harga</th>
									<th>Status Produk</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($pesanan as $key => $value) { ?>
									<tr>
										<td class="product-thumbnail">
											<?= $no++ ?>
										</td>
										<td class="product-name"><a href="#"><?= $value->id_pesanan ?></a></td>
										<td class="product-price-cart"><span class="amount">Rp. <?= number_format($value->total_harga), 0 ?></span></td>
										<td class="product-price-cart"><span class="amount">Rp. <?= number_format($value->ongkir), 0 ?></span></td>
										<td class="product-subtotal">Rp. <?= number_format($value->total_bayar), 0 ?></td>
										<td class="product-quantity">
											<?php if ($value->status_order == 1 && $value->metode_bayar == 2) { ?>
												<span class="badge badge-danger">Belum Bayar</span> <br>
												<span class="badge badge-warning">Pembayaran Transfer</span>
											<?php } elseif ($value->status_order == 1 && $value->metode_bayar == 1) { ?>
												<span class="badge badge-danger">Belum Bayar</span> <br>
												<span class="badge badge-warning">Pembayaran COD</span>
												<span class="badge badge-primary">Menungu Konfirmasi Pesanan</span>
											<?php } elseif ($value->status_order == 2) { ?>
												<span class="badge badge-warning">Konfirmasi Pembayaran</span>
											<?php } elseif ($value->status_order == 3) { ?>
												<span class="badge badge-primary">Pengiriman</span>
											<?php } elseif ($value->status_order == 4) { ?>
												<span class="badge badge-success">Diterima</span>
											<?php } ?>
										</td>
										<td class="product-wishlist-cart">
											<?php if ($value->status_order == 1 && $value->metode_bayar == 2) { ?>
												<a href="<?= base_url('pesanan/detail/' . $value->id_pesanan) ?>"><i class="fa fa-dropbox"></i>Detail </a><br><br><br>
												<a href="<?= base_url('pesanan/bayar/' . $value->id_pesanan) ?>"><i class="fa fa-dollar"></i>Pembayaran</a>
											<?php } elseif ($value->status_order == 3) { ?>
												<a href="<?= base_url('pesanan/detail/' . $value->id_pesanan) ?>"><i class="fa fa-dropbox"></i>Detail </a><br><br><br>
												<a href="<?= base_url('pesanan/selesai/' . $value->id_pesanan) ?>"><i class="fa fa-send"></i>DiTerima</a>
											<?php } elseif ($value->status_order == 4 and $value->status_ulasan == 0) { ?>
												<a href="<?= base_url('pesanan/detail/' . $value->id_pesanan) ?>"><i class="fa fa-comment"></i>Ulasan</a>
												<!-- <a href="<?= base_url('pesanan/review/' . $value->id_pesanan) ?>"><i class="fa fa-comment"></i></a> -->
											<?php } ?>
										</td>

									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>