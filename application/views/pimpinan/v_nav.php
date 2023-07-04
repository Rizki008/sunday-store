<!-- partial -->
<div class="container-fluid page-body-wrapper">
	<!-- partial:./partials/_navbar.html -->
	<nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
		<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
			<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
				<span class="mdi mdi-menu"></span>
			</button>
			<div class="navbar-brand-wrapper">
				<a class="navbar-brand brand-logo" href="<?= base_url('pimpinan') ?>">
					<!-- <img src="images/logo.svg" alt="logo" /> -->
				</a>
				<a class="navbar-brand brand-logo-mini" href="<?= base_url('pimpinan') ?>">
					<!-- <img src="images/logo-mini.svg" alt="logo" /> -->
				</a>
			</div>
			<h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, <?= $this->session->userdata('username'); ?></h4>
			<ul class="navbar-nav navbar-nav-right">
				<li class="nav-item">
					<h4 class="mb-0 font-weight-bold d-none d-xl-block">
						<?php
						date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
						echo date('h:i:s a'); // menampilkan jam sekarang
						echo "<br/>";
						echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
						?>
					</h4>
				</li>
			</ul>
			<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
				<span class="mdi mdi-menu"></span>
			</button>
		</div>
		<!-- <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
			<ul class="navbar-nav mr-lg-2">
				<li class="nav-item nav-search d-none d-lg-block">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
					</div>
				</li>
			</ul>
			<ul class="navbar-nav navbar-nav-right">
				<li class="nav-item nav-profile dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
						<img src="images/faces/face5.jpg" alt="profile" />
						<span class="nav-profile-name">Eleanor Richardson</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
						<a class="dropdown-item">
							<i class="mdi mdi-settings text-primary"></i>
							Settings
						</a>
						<a class="dropdown-item">
							<i class="mdi mdi-logout text-primary"></i>
							Logout
						</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link icon-link">
						<i class="mdi mdi-plus-circle-outline"></i>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link icon-link">
						<i class="mdi mdi-web"></i>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link icon-link">
						<i class="mdi mdi-clock-outline"></i>
					</a>
				</li>
			</ul>
		</div> -->
	</nav>
	<!-- partial -->