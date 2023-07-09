<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150">
	<div class="container">
		<div class="breadcrumb-content text-center">
			<h3>SINGLE PRODUCT</h3>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li class="active">Single Product</li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->
<!-- Product Deatils Area Start -->
<div class="product-details pt-100 pb-95">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<?php echo form_open('belanja/add');
				echo form_hidden('id', $produk->id_produk);
				echo form_hidden('name', $produk->nama_produk);
				echo form_hidden('stock', $produk->stok);
				echo form_hidden('netto', $produk->berat);
				echo form_hidden('price', $produk->harga - ($produk->diskon / 100 * $produk->harga));
				echo form_hidden('picture', $produk->foto);
				echo form_hidden('qty', 1);
				echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
				?>
				<div class="product-details-img">
					<img class="zoompro" src="<?= base_url('assets/produk/' . $produk->foto) ?>" data-zoom-image="<?= base_url('assets/produk/' . $produk->foto) ?>" alt="zoom" />
					<div id="gallery" class="mt-20 product-dec-slider owl-carousel">
						<?php foreach ($gambar as $key => $img) { ?>
							<a data-image="<?= base_url('assets/foto/' . $img->gambar) ?>" data-zoom-image="<?= base_url('assets/foto/' . $img->gambar) ?>">
								<img src="<?= base_url('assets/foto/' . $img->gambar) ?>" width="200px" alt="">
							</a>
						<?php } ?>
					</div>
					<?php if ($produk->diskon == 0) { ?>
					<?php } elseif ($produk->diskon > 0) { ?>
						<span>-<?= $produk->diskon ?>%</span>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="product-details-content">
					<h4><?= $produk->nama_produk ?></h4>
					<div class="rating-review">
						<!-- <div class="pro-dec-rating">
							<i class="ion-android-star-outline theme-star"></i>
							<i class="ion-android-star-outline theme-star"></i>
							<i class="ion-android-star-outline theme-star"></i>
							<i class="ion-android-star-outline theme-star"></i>
							<i class="ion-android-star-outline"></i>
						</div> -->
						<div class="pro-dec-review">
							<!-- <ul>
								<li>32 Reviews </li>
								<li> Add Your Reviews</li>
							</ul> -->
						</div>
					</div>
					<span>Rp. <?= number_format($produk->harga - ($produk->diskon / 100 * $produk->harga)), 0 ?></span>
					<div class="in-stock">
						<p>Available:
							<?php if ($produk->stok  <= 1) { ?>
								<span>Stock Kosong</span>
							<?php } elseif ($produk->stok > 1) { ?>
								<span>In stock</span>
							<?php } ?>
						</p>
					</div>
					<div class="pro-dec-categories">
						<ul>
							<li class="categories-title">Categories:</li>
							<li><a href="#"><?= $produk->nama_kategori ?>,</a></li>
						</ul>
					</div>
					<div class="pro-dec-feature">
					</div>
					<div class="quality-add-to-cart">
						<div class="quality">
							<label>Qty:</label>
							<input class="cart-plus-minus-box" type="number" name="qty" value="1" min="1" max="<?= $produk->stok ?>">
						</div>
						<div class="shop-list-cart-wishlist">
							<button type="submit" class="btn btn-success">
								<!-- <a title="Add To Cart" href="<?= base_url('belanja/add/' . $produk->id_produk) ?>"> -->
								<i class="ti-bag"></i>Add To Cart
							</button>
							<!-- </a> -->
							<!-- <a title="Wishlist" href="#">
								<i class="icon-heart"></i>
							</a> -->
						</div>
					</div>
					<p><?= $produk->deskripsi ?></p>
					<div class="pro-dec-categories">
					</div>
					<div class="pro-dec-social">
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div>
<!-- Product Deatils Area End -->
<div class="description-review-area pb-70">
	<div class="container">
		<div class="description-review-wrapper">
			<div class="description-review-topbar nav text-center">
				<a class="active" data-toggle="tab" href="#des-details3">Review</a>
			</div>
			<div class="tab-content description-review-bottom">
				<div id="des-details3" class="tab-pane active">
					<?php foreach ($ulasan as $key => $ulas) { ?>
						<div class="rattings-wrapper">
							<div class="sin-rattings">
								<div class="star-author-all">
									<!-- <div class="ratting-star f-left">
										<i class="ion-star theme-color"></i>
										<i class="ion-star theme-color"></i>
										<i class="ion-star theme-color"></i>
										<i class="ion-star theme-color"></i>
										<i class="ion-star theme-color"></i>
										<span>(5)</span>
									</div> -->
									<div class="ratting-author f-right">
										<h3><?= $ulas->nama_pelanggan ?></h3>
										<!-- <span>12:24</span> -->
										<span><?= $ulas->tanggal_ulasan ?></span>
									</div>
								</div>
								<p><?= $ulas->ulasan ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="product-area pb-100">
	<div class="container">
		<div class="product-top-bar section-border mb-35">
			<div class="section-title-wrap">
				<h3 class="section-title section-bg-white">Produk Lainnya</h3>
			</div>
		</div>
		<div class="featured-product-active hot-flower owl-carousel product-nav">
			<?php if (count($produklain) > 0) : ?>
				<?php foreach ($produklain as $product) : ?>
					<div class="product-wrapper">
						<div class="product-img">
							<a href="<?= base_url('home/detail/' . $product->id_produk) ?>">
								<img alt="" src="<?= base_url('assets/produk/' . $product->foto) ?>">
							</a>
							<?php if ($product->diskon == 0) { ?>
							<?php } elseif ($product->diskon > 1) { ?>
								<span>-<?= $product->diskon ?>%</span>
							<?php							} ?>
							<div class="product-action">
								<!-- <a class="action-wishlist" href="#" title="Wishlist">
									<i class="ion-android-favorite-outline"></i>
								</a>
								<a class="action-cart" href="#" title="Add To Cart">
									<i class="ion-ios-shuffle-strong"></i>
								</a> -->
								<a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
									<i class="ion-ios-search-strong"></i>
								</a>
							</div>
						</div>
						<div class="product-content text-left">
							<div class="product-hover-style">
								<div class="product-title">
									<h4>
										<a href="<?= base_url('home/detail/' . $product->id_produk) ?>"><?= $product->nama_produk ?></a>
									</h4>
								</div>
								<div class="cart-hover">
									<h4><a href="<?= base_url('home/detail/' . $product->id_produk) ?>">+ Add to cart</a></h4>
								</div>
							</div>
							<div class="product-price-wrapper">
								<?php if ($product->diskon == 0) { ?>
									<span>Rp. <?= number_format($product->harga - ($product->diskon / 100 * $product->harga)), 0 ?> -</span>
								<?php } elseif ($product->diskon > 1) { ?>
									<span>Rp. <?= number_format($product->harga - ($product->diskon / 100 * $product->harga)), 0 ?> -</span>
									<span class="product-price-old">Rp. <?= number_format($product->harga) ?> </span>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>