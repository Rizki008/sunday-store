<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Laporan Perhari</h4>
						<p class="card-description">
							
						</p>
						<form action="<?= base_url('Laporanfpdf/hari') ?>" method="POST" class="forms-sample">
							<div class="form-group">
								<label for="exampleInputUsername1">Tanggal</label>
								<select name="tanggal" class="form-control">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 31; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Bulan</label>
								<select name="bulan" class="form-control">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tahun</label>
								<select name="tahun" class="form-control">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Cetak</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Laporan Perbulan</h4>
						<p class="card-description">
							
						</p>
						<form class="forms-sample" action="<?= base_url('Laporanfpdf/bulan') ?>" method="POST">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bulan</label>
								<select name="bulan" class="form-control">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tahun</label>
								<select name="tahun" class="form-control">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Cetak</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Laporan Pertahun</h4>
						<p class="card-description">
							
						</p>
						<form class="forms-sample" action="<?= base_url('Laporanfpdf') ?>" method="POST">
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tahun</label>
								<select name="tahun" class="form-control">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Cetak</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>