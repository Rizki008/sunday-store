<body>
	<!-- Topbar Start -->
	<div class="container-fluid">
		<div class="row bg-secondary py-2 px-xl-5">
			<div class="col-lg-6 d-none d-lg-block">
			</div>
			<div class="col-lg-6 text-center text-lg-right">
				<div class="d-inline-flex align-items-center">
					<a class="text-dark px-2" href="">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="text-dark px-2" href="https://api.whatsapp.com/send?phone=6287723346534&text=Halo%20Admin%20Saya%20Mau%20Order">
						<i class="fab fa-whatsapp"></i>
					</a>
					<a class="text-dark px-2" href="">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="row align-items-center py-3 px-xl-5">
			<div class="col-lg-3 d-none d-lg-block">
				<a href="" class="text-decoration-none">
					<h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">S</span>Store</h1>
				</a>
			</div>
			<div class="col-lg-6 col-6 text-left">
				<form action="<?= base_url('pencarian') ?>" method="get">
					<div class="input-group">
						<input type="text" class="form-control" name="keyword" placeholder="Produk Apa Yang Anda Cari ?">
						<div class="input-group-append">
							<button type="submit" class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
			<?php
			if ($this->session->userdata('id_pelanggan') != '') {
				if ($cart['jml']->jml != 0) {
			?>
					<div class="col-lg-3 col-6 text-right">
						<a href="<?= base_url('belanja') ?>" class="btn border">
							<i class="fas fa-shopping-cart text-primary"></i>
							<span class="badge">[<?= $cart['jml']->jml ?>]</span>
						</a>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>
	<!-- Topbar End -->
