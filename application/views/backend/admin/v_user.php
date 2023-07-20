<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
								Tambah User
							</button>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>
											No
										</th>
										<th>
											Username
										</th>
										<th>
											Password
										</th>
										<th>
											Level
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($user as $key => $value) { ?>
										<tr>
											<td class="py-1">
												<?= $no++ ?>
											</td>
											<td>
												<?= $value->username ?>
											</td>
											<td>
												<!-- <?= $value->password ?> -->
												********
											</td>
											<td>
												<?php if ($value->level == 1) { ?>
													<span class="badge badge-primary">Admin</span>
												<?php } elseif ($value->level == 2) { ?>
													<span class="badge badge-warning">Pemilik</span>
												<?php }  ?>
											</td>
											<td>
												<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_user ?>">
													Edit
												</button>
												<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $value->id_user ?>">
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
					<h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('admin/add') ?>" method="POST">
					<div class="modal-body">
						<div class="form-group">
							<label>Nama User</label>
							<input type="text" name="username" class="form-control" placeholder="Nama User">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password User">
						</div>
						<div class="form-group">
							<label>Level User</label>
							<select name="level" id="level" class="form-control">
								<option value="1">Admin</option>
								<option value="2">Pemilik</option>
							</select>
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

	<!-- Modal edit -->
	<?php foreach ($user as $key => $value) { ?>
		<div class="modal fade" id="edit<?= $value->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('admin/update/' . $value->id_user) ?>" method="POST">
						<div class="modal-body">
							<div class="form-group">
								<label>Nama User</label>
								<input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Nama User">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" value="<?= $value->password ?>" class="form-control" placeholder="Password User">
							</div>
							<div class="form-group">
								<label>Level User</label>
								<select name="level" id="level" class="form-control">
									<option value="<?= $value->level ?>">
										<?php if ($value->level == 1) { ?>
											<p>Admin</p>
										<?php } elseif ($value->level == 2) { ?>
											<p>Pimpinan</p>
										<?php } ?>
									</option>
									<option value="1">Admin</option>
									<option value="2">Pemilik</option>
								</select>
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
	<?php foreach ($user as $key => $value) { ?>
		<div class="modal fade" id="hapus<?= $value->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Delete User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Akan Hapus User</h5>
						<h3><?= $value->username ?> ???</h3>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<a href="<?= base_url('admin/delete/' . $value->id_user) ?>" class="btn btn-primary">Save</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
