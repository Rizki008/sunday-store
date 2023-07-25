<body>
	<div class="container-scroller d-flex">
		<!-- partial:./partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
				<li class="nav-item sidebar-category">
					<p>SUNDAY STORE</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'admin' and $this->uri->segment(2) == " "
										) {
											echo "active";
										} ?>" href="<?= base_url('admin') ?>">
						<i class="mdi mdi-view-quilt menu-icon"></i>
						<span class="menu-title">Dashboard</span>
						<!-- <div class="badge badge-info badge-pill">2</div> -->
					</a>
				</li>
				<li class="nav-item sidebar-category">
					<p>Master</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
						<i class="mdi mdi-barcode-scan menu-icon"></i>
						<span class="menu-title">Master Produk</span>
						<i class="menu-arrow"></i>
					</a>
					<div class="collapse" id="ui-basic">
						<ul class="nav flex-column sub-menu">
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('master/kategori') ?>">Kategori</a></li>
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('master/produk') ?>">Produk</a></li>
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('master/gambar') ?>">Gambar</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('transaksi') ?>">
						<i class="mdi mdi-coin menu-icon"></i>
						<span class="menu-title">Transaksi</span>
					</a>
				</li>
				<li class="nav-item sidebar-category">
					<p>Pages</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'admin' and $this->uri->segment(2) == "user"
										) {
											echo "active";
										} ?>" href="<?= base_url('admin/user') ?>">
						<i class="mdi mdi-account menu-icon"></i>
						<span class="menu-title">User</span>
					</a>
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
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('master/ulasan') ?>">
						<i class="mdi mdi-message-alert-outline menu-icon"></i>
						<span class="menu-title">Ulasan</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'admin' and $this->uri->segment(2) == "setting"
										) {
											echo "active";
										} ?>" href="<?= base_url('admin/setting') ?>">
						<i class="mdi mdi-account-location menu-icon"></i>
						<span class="menu-title">Setting Lokasi</span>
					</a>
				</li>
				<li class="nav-item sidebar-category">
					<p>Logout</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if (
											$this->uri->segment(1) == 'admin' and $this->uri->segment(2) == 'logout'
										) {
											echo "active";
										} ?>" href="<?= base_url('admin/logout') ?>">
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