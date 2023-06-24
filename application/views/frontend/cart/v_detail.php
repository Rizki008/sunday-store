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
		<h3 class="page-title">Detail Pesanan</h3>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<form action="#">
					<div class="table-content table-responsive wishlist">
						<table>
							<thead>
								<tr>
									<th></th>
									<th>Product Name</th>
									<th>Until Price</th>
									<th>Qty</th>
									<th>Subtotal</th>
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
				</form>
			</div>
		</div>
	</div>
</div>