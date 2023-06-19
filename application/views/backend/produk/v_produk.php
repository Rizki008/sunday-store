<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
								Add
							</button>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>
											#
										</th>
										<th>
											Nama Produk
										</th>
										<th>
											Kategori
										</th>
										<th>
											Harga
										</th>
										<th>
											Berat
										</th>
										<th>
											Stok
										</th>
										<th>
											Deskrpsi
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($produk as $key => $value) { ?>
										<tr>
											<td class="py-1">
												<img src="<?= base_url('assets/produk/' . $value->foto) ?>" alt="image" />
											</td>
											<td>
												<?= $value->nama_produk ?>
											</td>
											<td>
												<?= $value->nama_kategori ?>
											</td>
											<td>
												<?= number_format($value->harga), 0 ?>
											</td>
											<td>
												<?= $value->berat ?>
											</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-success" role="progressbar" style="width: <?= $value->stok ?>%" aria-valuenow="<?= $value->stok ?>" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</td>
											<td>
												<?= $value->deskripsi ?>
											</td>
											<td>
												<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_produk ?>">
													Edit
												</button>
												<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $value->id_produk ?>">
													Hapus
												</button>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php $kategori = $this->m_master_produk->kategori(); ?>
				<?php echo form_open_multipart('master_produk/add_produk') ?>
				<!-- <form action="<?= base_url('master_produk/add_produk') ?>" method="POST"> -->
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" id="" class="form-control">
							<option value="">---Kategori---</option>
							<?php foreach ($kategori as $key => $values) { ?>
								<option value="<?= $values->id_kategori ?>"><?= $values->nama_kategori ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="number" name="harga" class="form-control" placeholder="Harga Produk">
					</div>
					<div class="form-group">
						<label>Berat</label>
						<input type="number" name="berat" class="form-control" placeholder="Harga Produk">
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input type="number" name="stok" class="form-control" placeholder="Stok Produk">
					</div>
					<div class="form-group">
						<label>Nama Produk</label>
						<textarea name="deskripsi" class="form-control" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<label>Foto</label>
						<input type="file" name="foto" class="form-control" placeholder="Foto Produk">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<!-- </form> -->
				<?php echo form_close() ?>
			</div>
		</div>
	</div>

	<!-- Modal edit -->
	<?php foreach ($produk as $key => $value) { ?>
		<div class="modal fade" id="edit<?= $value->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Update produk</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('master_produk/update_produk/' . $value->id_produk) ?>" enctype="multipart/form-data" accept-charset="utf-8" method="POST">
						<div class="modal-body">
							<div class="form-group">
								<label>Nama Produk</label>
								<input type="text" name="nama_produk" value="<?= $value->nama_produk ?>" class="form-control" placeholder="Nama Produk">
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select name="kategori" id="" class="form-control">
									<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
									<option value="">---Kategori---</option>
									<?php foreach ($kategori as $key => $values) { ?>
										<option value="<?= $values->id_kategori ?>"><?= $values->nama_kategori ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Harga</label>
								<input type="number" name="harga" value="<?= $value->harga ?>" class="form-control" placeholder="Harga Produk">
							</div>
							<div class="form-group">
								<label>Berat</label>
								<input type="number" name="berat" value="<?= $value->berat ?>" class="form-control" placeholder="Harga Produk">
							</div>
							<div class="form-group">
								<label>Stok</label>
								<input type="number" name="stok" value="<?= $value->stok ?>" class="form-control" placeholder="Stok Produk">
							</div>
							<div class="form-group">
								<label>Nama Produk</label>
								<textarea name="deskripsi" class="form-control" cols="30" rows="10"><?= $value->deskripsi ?></textarea>
							</div>
							<div class="form-group">
								<label>Foto</label>
								<input type="file" name="foto" value="<?= $value->foto ?>" class="form-control" placeholder="Foto Produk">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>

	<!-- Modal Hapus-->
	<?php foreach ($produk as $key => $valueas) { ?>
		<div class="modal fade" id="hapus<?= $value->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Delete produk</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Akan hapus Produk</h5>
						<h3><?= $valueas->nama_produk ?> ???</h3>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<a href="<?= base_url('master_produk/delete_produk/' . $value->id_produk) ?>" class="btn btn-primary">Save</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>