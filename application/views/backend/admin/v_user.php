<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
							<a href="<?= base_url('admin/add') ?>" class="btn btn-primary">Tambah user</a>
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
											Action
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
													<span class="badge badge-warning">Pimpinan</span>
												<?php }  ?>
											</td>
											<td>
												<a href="<?= base_url('admin/edit/' . $value->id_user) ?>" class="btn btn-warning">Edit</a>
												<a href="<?= base_url('admin/delete/' . $value->id_user) ?>" class="btn btn-danger">Delete</a>
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