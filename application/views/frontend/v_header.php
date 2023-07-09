<body>
	<!-- header start -->
	<header class="header-area gray-bg clearfix">
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-6">
						<div class="logo">
							<a href="<?= base_url() ?>">
								<img alt="" src="<?= base_url() ?>frontend/assets/img/logo/logos.jpg">
							</a>
						</div>
					</div>

					<div class="col-lg-9 col-md-8 col-6">
						<div class="header-bottom-right">
							<div class="main-menu">
								<nav>
									<ul>
										<li>
											<div id="mc_embed_signup" class="subscribe-form">
												<form action="<?= base_url('pencarian') ?>" method="get" class="validate">
													<div class="input-group d-flex flex-row">
														<input type="text" class="form-control" name="keyword" placeholder="Masukan Produk yang Anda Cari...">
														<div class="submit-button">
															<button type="submit" value="cari" class="btn btn-warning"><i class="fa fa-search"></i>Cari</button>
															<!-- <input type="submit" value="Cari" id="mc-embedded-subscribe" class="button"> -->
														</div>
													</div>
												</form>
											</div>
										</li>
										<li class="top-hover"><a href="<?= base_url() ?>">home</a>
										</li>
										<?php $kategori = $this->m_master_produk->kategori(); ?>
										<li class="mega-menu-position top-hover"><a href="shop.html">kategori</a>
											<ul class="mega-menu">
												<?php foreach ($kategori as $key => $kategoris) { ?>
													<li>
														<ul>
															<li><a href="<?= base_url('home/kategori/' . $kategoris->id_kategori) ?>"><?= $kategoris->nama_kategori ?></a></li>
														</ul>
													</li>
												<?php } ?>
											</ul>
										</li>
										<li class="top-hover"><a href="<?= base_url('home/list_product') ?>">List Produk</a>
									</ul>
								</nav>
							</div>
							<div class="header-currency">
								<?php if ($this->session->userdata('email_pelanggan') == "") { ?>
									<span class="digit">Login/Register<i class="ti-angle-down"></i></span>
									<div class="dollar-submenu">
										<ul>
											<li><a href="<?= base_url('pelanggan') ?>">Login/Register</a></li>
										</ul>
									</div>
								<?php } else { ?>
									<span class="digit"><?= $this->session->userdata('nama_pelanggan') ?><i class="ti-angle-down"></i></span>
									<div class="dollar-submenu">
										<ul>
											<li><a href="<?= base_url('pesanan') ?>">Pesanan</a></li>
											<li><a href="<?= base_url('pelanggan/logout') ?>">Logout</a></li>
										</ul>
									</div>
								<?php } ?>
							</div>
							<?php $keranjang = $this->cart->contents();
							$jml_item = 0;
							foreach ($keranjang as $key => $values) {
								$jml_item = $jml_item + $values['qty'];
							} ?>
							<div class="header-cart">
								<a href="#">
									<div class="cart-icon">
										<i class="ti-shopping-cart">[<?= $jml_item ?>]</i>
									</div>
								</a>
								<div class="shopping-cart-content">
									<ul>
										<?php foreach ($keranjang as $key => $val) {
											$produk = $this->m_master_produk->detailprod($val['id']); ?>
											<li class="single-shopping-cart">
												<div class="shopping-cart-img">
													<a href="#"><img alt="" src="<?= base_url('assets/produk/' . $val['picture']) ?>" width="100px"></a>
												</div>
												<div class="shopping-cart-title">
													<h4><a href="#"><?= $val['name'] ?> </a></h4>
													<h6>Qty: <?= $val['qty'] ?></h6>
													<span>Rp. <?= number_format($val['price']), 0 ?></span>
												</div>
												<div class="shopping-cart-delete">
													<a href="<?= base_url('belanja/deletecart/' . $val['rowid']) ?>"><i class="ion ion-close"></i></a>
												</div>
											</li>
										<?php } ?>
									</ul>
									<div class="shopping-cart-total">
										<!-- <h4>Shipping : <span>$20.00</span></h4> -->
										<h4>Total : <span class="shop-total">Rp. <?= $this->cart->format_number($this->cart->total()); ?></span></h4>
									</div>
									<div class="shopping-cart-btn">
										<a href="<?= base_url('belanja') ?>">Lihat Keranjang</a>
										<a href="<?= base_url('belanja') ?>">Order</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-menu-area">
					<div class="mobile-menu">
						<nav id="mobile-menu-active">
							<ul class="menu-overflow">
								<li><a href="<?= base_url() ?>">HOME</a>
									<!-- <ul>
										<li><a href="index.html">home version 1</a></li>
										<li><a href="index-2.html">home version 2</a></li>
									</ul> -->
								</li>
								<li><a href="#">pages</a>
									<ul>
										<li><a href="about-us.html">about us </a></li>
										<li><a href="shop.html">shop Grid</a></li>
										<li><a href="shop-list.html">shop list</a></li>
										<li><a href="product-details.html">product details</a></li>
										<li><a href="cart-page.html">cart page</a></li>
										<li><a href="checkout.html">checkout</a></li>
										<li><a href="wishlist.html">wishlist</a></li>
										<li><a href="my-account.html">my account</a></li>
										<li><a href="login-register.html">login / register</a></li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</li>
								<li><a href="shop.html"> Shop </a>
									<ul>
										<li><a href="#">Categories 01</a>
											<ul>
												<li><a href="shop.html">Aconite</a></li>
												<li><a href="shop.html">Ageratum</a></li>
												<li><a href="shop.html">Allium</a></li>
												<li><a href="shop.html">Anemone</a></li>
												<li><a href="shop.html">Angelica</a></li>
												<li><a href="shop.html">Angelonia</a></li>
											</ul>
										</li>
										<li><a href="#">Categories 02</a>
											<ul>
												<li><a href="shop.html">Balsam</a></li>
												<li><a href="shop.html">Baneberry</a></li>
												<li><a href="shop.html">Bee Balm</a></li>
												<li><a href="shop.html">Begonia</a></li>
												<li><a href="shop.html">Bellflower</a></li>
												<li><a href="shop.html">Bergenia</a></li>
											</ul>
										</li>
										<li><a href="#">Categories 03</a>
											<ul>
												<li><a href="shop.html">Caladium</a></li>
												<li><a href="shop.html">Calendula</a></li>
												<li><a href="shop.html">Carnation</a></li>
												<li><a href="shop.html">Catmint</a></li>
												<li><a href="shop.html">Celosia</a></li>
												<li><a href="shop.html">Chives</a></li>
											</ul>
										</li>
										<li><a href="#">Categories 04</a>
											<ul>
												<li><a href="shop.html">Daffodil</a></li>
												<li><a href="shop.html">Dahlia</a></li>
												<li><a href="shop.html">Daisy</a></li>
												<li><a href="shop.html">Diascia</a></li>
												<li><a href="shop.html">Dusty Miller</a></li>
												<li><a href="shop.html">Dame’s Rocket</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">BLOG</a>
									<ul>
										<li><a href="blog-masonry.html">Blog Masonry</a></li>
										<li><a href="#">Blog Standard</a>
											<ul>
												<li><a href="blog-left-sidebar.html">left sidebar</a></li>
												<li><a href="blog-right-sidebar.html">right sidebar</a></li>
												<li><a href="blog-no-sidebar.html">no sidebar</a></li>
											</ul>
										</li>
										<li><a href="#">Post Types</a>
											<ul>
												<li><a href="blog-details-standerd.html">Standard post</a></li>
												<li><a href="blog-details-audio.html">audio post</a></li>
												<li><a href="blog-details-video.html">video post</a></li>
												<li><a href="blog-details-gallery.html">gallery post</a></li>
												<li><a href="blog-details-link.html">link post</a></li>
												<li><a href="blog-details-quote.html">quote post</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="contact.html"> Contact us </a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->