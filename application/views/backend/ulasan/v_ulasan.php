<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
						</p>
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>
											Nama Pelanggan
										</th>
										<th>
											Nama Produk
										</th>
										<th>
											Ulasan
										</th>
										<th>
											Tanggal Ulasan
										</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($ulasan as $key => $value) { ?>
										<?php if ($value->status_ulasan == 1) { ?>
											<tr>
												<td class="py-1">
													<?= $value->nama_pelanggan ?>
												</td>
												<td>
													<?= $value->nama_produk ?>
												</td>
												<td>
													<?= $value->ulasan ?>
												</td>
												<td>
													<?= $value->tanggal_ulasan ?>
												</td>
											</tr>
										<?php } elseif ($value->status_ulasan == 0) { ?>
										<?php } ?>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>