<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title ?></title>
	<!-- base:css -->
	<link rel="stylesheet" href="<?= base_url() ?>spica/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>spica/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url() ?>spica/css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url() ?>spica/images/favicon.png" />
</head>

<body>
	<div class="container-scroller d-flex">
		<div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<h4>Halo!</h4>
							<h6 class="font-weight-light">Login Untuk Masuk Ke Halaman Selanjutnya</h6>
							<?php if ($this->session->userdata('success')) { ?><div class="alert alert-success" role="alert"><?= $this->session->userdata('success') ?></div>
							<?php } ?>
							<?php if ($this->session->userdata('error')) { ?><div class="alert alert-danger" role="alert"><?= $this->session->userdata('error') ?></div>
							<?php } ?>
							<form class="pt-3" action="<?= base_url('admin/login') ?>" method="POST">
								<div class="form-group">
									<input type="text" name="username" value="<?= set_value('username') ?>" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
								</div>
								<div class="form-group">
									<input type="password" name="password" value="<?= set_value('password') ?>" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
								</div>
								<!-- <div class="my-2 d-flex justify-content-between align-items-center">
									<div class="form-check">
										<label class="form-check-label text-muted">
											<input type="checkbox" class="form-check-input">
											Keep me signed in
										</label>
									</div>
									<a href="#" class="auth-link text-black">Forgot password?</a>
								</div> -->
								<!-- <div class="mb-2">
									<button type="button" class="btn btn-block btn-facebook auth-form-btn">
										<i class="mdi mdi-facebook mr-2"></i>Connect using facebook
									</button>
								</div>
								<div class="text-center mt-4 font-weight-light">
									Don't have an account? <a href="register.html" class="text-primary">Create</a>
								</div> -->
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- base:js -->
	<script src="<?= base_url() ?>spica/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="<?= base_url() ?>spica/js/off-canvas.js"></script>
	<script src="<?= base_url() ?>spica/js/hoverable-collapse.js"></script>
	<script src="<?= base_url() ?>spica/js/template.js"></script>
	<!-- endinject -->
</body>

</html>