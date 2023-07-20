<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150">
	<div class="container">
		<div class="breadcrumb-content text-center">
			<h3><?= $title ?></h3>
			<ul>
				
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->
<!-- shopping-cart-area start -->
<div class="cart-main-area ptb-100">
	<div class="container">
		<h3 class="page-title">Detail Pesanan</h3>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<!-- <form action="<?= base_url('pesanan/review/' . $value->id_pesanan) ?>" method="POST"> -->
				<div class="table-content table-responsive wishlist">
					<table>
						<thead>
							<tr>
								<th>Gambar</th>
								<th>Nama Produk</th>
								<th>Harga Satuan</th>
								<th>Qty</th>
								<th>Total Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($detail as $key => $value) { ?>
								<tr>
									<td class="product-thumbnail">
										<a href="#"><img src="<?= base_url('assets/produk/' . $value->foto) ?>" alt="" width="100px"></a>
									</td>
									<td class="product-name"><a href="#"><?= $value->nama_produk ?></a></td>
									<td class="product-price-cart"><span class="amount"><?= number_format($value->harga), 0 ?></span></td>
									<td class="product-quantity">
										<?= $value->qty ?>
									</td>
									<td class="product-subtotal">Rp. <?= number_format($value->harga * $value->qty), 0 ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php if ($value->status_order == 4 && $value->status_ulasan == 0) { ?>
					<h5 class="mtext-108 cl2 p-b-7">
						Menambahkan ulasan
					</h5>
					<?php echo form_open('pesanan/review/' . $value->id_pesanan) ?>
					<div class="row p-b-25">
						<div class="col-12 p-b-5">
							<input type="hidden" name="id_ulasan" value="<?= $value->id_ulasan ?>">
							<!-- <input name="id_produk" class="form-control" cols="30" rows="10" placeholder="isi Produk" value="<?= $value->id_produk ?>" required hidden></input> -->
							<label class="stext-102 cl3" for="review">Ulasan Anda</label>
							<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="ulasan" name="ulasan"></textarea>
						</div>
					</div>

					<button type="submit" class="btn btn-success">
						Ulasan
					</button>
					<?php echo form_close() ?>
				<?php } ?>
				<!-- </form> -->
			</div>
		</div>
	</div>
</div>