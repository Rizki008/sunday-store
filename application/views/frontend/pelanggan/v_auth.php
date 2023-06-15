<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150">
	<div class="container">
		<div class="breadcrumb-content text-center">
			<h3>LOGIN/REGISTER</h3>
			<ul>
				<li><a href="<?= base_url() ?>">Home</a></li>
				<li class="active"><?= $title ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->
<div class="login-register-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12 ml-auto mr-auto">
				<div class="login-register-wrapper">
					<div class="login-register-tab-list nav">
						<a class="active" data-toggle="tab" href="#lg1">
							<h4> login </h4>
						</a>
						<a data-toggle="tab" href="#lg2">
							<h4> register </h4>
						</a>
					</div>
					<div class="tab-content">
						<div id="lg1" class="tab-pane active">
							<div class="login-form-container">
								<div class="login-register-form">
									<?php if ($this->session->userdata('success')) { ?><div class="alert alert-success" role="alert"><?= $this->session->userdata('success') ?></div>
									<?php } ?>
									<?php if ($this->session->userdata('error')) { ?><div class="alert alert-danger" role="alert"><?= $this->session->userdata('error') ?></div>
									<?php } ?>
									<form action="<?= base_url('pelanggan/login') ?>" method="post">
										<input type="email" name="email_pelanggan" value="<?= set_value('email_pelanggan') ?>" placeholder="Email">
										<input type="password" name="password_pelanggan" value="<?= set_value('password_pelanggan') ?>" placeholder="Password">
										<div class="button-box">
											<!-- <div class="login-toggle-btn">
												<input type="checkbox">
												<label>Remember me</label>
												<a href="#">Forgot Password?</a>
											</div> -->
											<button type="submit"><span>Login</span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div id="lg2" class="tab-pane">
							<div class="login-form-container">
								<div class="login-register-form">
									<form action="<?= base_url('pelanggan/register') ?>" method="post">
										<input type="text" name="nama_pelanggan" placeholder="Nama lengkap">
										<input type="text" name="nohp_pelanggan" placeholder="No Hp">
										<input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin">
										<input type="email" name="email_pelanggan" placeholder="Email">
										<input type="password" name="password_pelanggan" placeholder="Password">
										<input type="password" name="ulangi_password_pelanggan" placeholder="Ulangi Password">
										<input type="text" name="alamat_pelanggan" placeholder="Alamat lengkap">
										<div class="button-box">
											<button type="submit"><span>Register</span></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>