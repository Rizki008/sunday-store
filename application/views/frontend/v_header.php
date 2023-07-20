<body>
	<!-- Topbar Start -->
	<div class="container-fluid">
		<div class="row align-items-center py-3 px-xl-5">
			<div class="col-lg-3 d-none d-lg-block">
				<a href="" class="text-decoration-none">
					<h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">S</span>Store</h1>
				</a>
			</div>
			<div class="col-lg-6 col-6 text-left">
				<form action="<?= base_url('pencarian') ?>" method="get">
					<div class="input-group">
						<input type="text" class="form-control" name="keyword" placeholder="Search for products">
						<div class="input-group-append">
							<button type="submit" class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
			<?php $keranjang = $this->cart->contents();
			$jml_item = 0;
			foreach ($keranjang as $key => $values) {
				$jml_item = $jml_item + $values['qty'];
			} ?>
			<div class="col-lg-3 col-6 text-right">
				<a href="<?= base_url('belanja') ?>" class="btn border">
					<i class="fas fa-shopping-cart text-primary"></i>
					<span class="badge">[<?= $jml_item ?>]</span>
				</a>
			</div>
		</div>
	</div>
	<!-- Topbar End -->