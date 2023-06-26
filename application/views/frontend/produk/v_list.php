<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150">
	<div class="container">
		<div class="breadcrumb-content text-center">
			<h3><?= $title ?></h3>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li class="active"><?= $title ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->
<!-- Shop Page Area Start -->
<div class="shop-page-area ptb-100">
	<div class="container">
		<div class="row flex-row-reverse">
			<div class="col-lg-12">
				<div class="shop-topbar-wrapper">
					<div class="shop-topbar-left">
						<ul class="view-mode">
							<li class="active"><a href="#product-grid" data-view="product-grid"><i class="fa fa-th"></i></a></li>
						</ul>
					</div>
					<div class="product-sorting-wrapper">
					</div>
				</div>
				<div class="grid-list-product-wrapper">
					<div class="product-grid product-view pb-20">
						<div class="row">
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
									<!-- <div class="product-width col-xl-4 "> -->
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
												<?php } ?>
											</div>
										</div>
									</div>
									<!-- </div> -->
									<?php echo form_close() ?>
								<?php endforeach; ?>
							<?php else : ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="pagination-total-pages">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Shop Page Area End -->