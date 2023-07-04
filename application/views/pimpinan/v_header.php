<body>
	<div class="container-scroller d-flex">
		<!-- partial:./partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
				<li class="nav-item sidebar-category">
					<p>Sunday Store</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('pimpinan') ?>">
						<i class="mdi mdi-view-quilt menu-icon"></i>
						<span class="menu-title">Dashboard</span>
						<!-- <div class="badge badge-info badge-pill">2</div> -->
					</a>
				</li>
				<li class="nav-item sidebar-category">
					<p>Master Laporan</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
						<i class="mdi mdi-barcode-scan menu-icon"></i>
						<span class="menu-title">Master Laporan</span>
						<i class="menu-arrow"></i>
					</a>
					<div class="collapse" id="ui-basic">
						<ul class="nav flex-column sub-menu">
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('master_produk/kategori') ?>">Kategori</a></li>
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('master_produk/produk') ?>">Produk</a></li>
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('master_produk/gambarproduk') ?>">Gambar</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item sidebar-category">
					<p>Analisis</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('analisis') ?>">
						<i class="mdi mdi-chart-pie menu-icon"></i>
						<span class="menu-title">Analisis K-Means</span>
					</a>
				</li>
				<li class="nav-item sidebar-category">
					<p>Logout</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('admin/logout') ?>">
						<i class="mdi mdi-arrow-left-bold-box menu-icon"></i>
						<span class="menu-title">Logout</span>
					</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="http://www.bootstrapdash.com/demo/spica/template/">
						<button class="btn bg-danger btn-sm menu-title">Upgrade to pro</button>
					</a>
				</li> -->
			</ul>
		</nav>
		<!-- partial -->