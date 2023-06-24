<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-image-3 ptb-150">
	<div class="container">
		<div class="breadcrumb-content text-center">
			<h3>PEMBAYARAN</h3>
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
							<h4> Pembayaran </h4>
						</a>
					</div>
					<div class="tab-content">
						<div id="lg1" class="tab-pane active">
							<div class="login-form-container">
								<div class="login-register-form">
									<form action="<?= base_url('pesanan/bayar/' . $detail->id_pesanan) ?>" method="post" enctype="multipart/form-data">
										<input type="text" name="atas_nama" placeholder="Atas Nama">
										<input type="file" name="bukti_bayar" placeholder="Bukti Bayar">
										<div class="button-box">
											<button type="submit"><span>Uploads</span></button>
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