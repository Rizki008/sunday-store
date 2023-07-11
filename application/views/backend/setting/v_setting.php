<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Setting Lokasi Toko</h4>
						<p class="card-description">
							
						</p>
						<?php

						if ($this->session->flashdata('pesan')) {
							echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
							echo $this->session->flashdata('pesan');
							echo '</h5></div>';
						}
						?>
						<form class="forms-sample" accept="<?= base_url('admin/setting') ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputUsername1">Provinsi</label>
								<select name="provinsi" class="form-control"></select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Kota</label>
								<select name="kota" class="form-control">
									<option value="<?= $setting->lokasi ?>"><?= $setting->lokasi ?></option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Nama Toko</label>
								<input type="text" name="nama_toko" class="form-control" value="<?= $setting->nama_toko ?>" require>
							</div>
							<div class="form-group">
								<label for="exampleInputConfirmPassword1">Nomor Telepon</label>
								<input type="text" name="no_telpon" class="form-control" value="<?= $setting->no_telpon ?>" require>
							</div>
							<div class="form-group">
								<label for="exampleInputConfirmPassword1">Alamat Toko</label>
								<input type="text" name="alamat" class="form-control" value="<?= $setting->alamat ?>" require>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Simpan</button>
							<a href="<?= base_url('admin') ?>" class="btn btn-warning btn-sm">Batal</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>