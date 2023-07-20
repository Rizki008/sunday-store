<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						
						<form class="forms-sample" action="<?= base_url('master/add_gambar/' . $produk->id_produk) ?>" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputName1">Keterangan</label>
								<input type="text" name="keterangan" class="form-control" id="exampleInputName1" placeholder="Name">
							</div>
							<div class="form-group">
								<label>Upload File Gambar</label>
								<input type="file" name="gambar" class="form-control" id="">
							</div>
							<button type="submit" class="btn btn-primary mr-2">Simpan</button>
							<a href="<?= base_url('master/gambar') ?>" class="btn btn-warning">Batal</a>
						</form>
					</div>
					<hr>
					<div class="row">
						<?php foreach ($gambar as $key => $value) { ?>
							<div class="col-sm-3 text-center">
								<div class="form-group">
									<img src="<?= base_url('assets/foto/' . $value->gambar) ?>" id="gambar_load" width="250px" height="200px">
								</div>
								<p for="">Keterangan : <?= $value->keterangan ?></p>
								<button data-toggle="modal" data-target="#delete<?= $value->id_gambar ?>" class="btn btn-danger btn-sm btn-block"><i class="fa fa-trash"></i>Hapus Gambar</button>
							</div>
						<?php } ?>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal Hapus-->
	<?php foreach ($gambar as $key => $value) { ?>
		<div class="modal fade" id="delete<?= $value->id_gambar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Hapus Gambar</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Akan Hapus Gambar</h5>
						<h3><?= $value->keterangan ?> ???</h3>
					</div>
					<div class="modal-footer">
						<a href="<?= base_url('master/delete_gambar/' . $value->produk . '/' . $value->id_gambar) ?>" class="btn btn-primary">Hapus</a>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>