<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
							<a href="<?= base_url('transaksi') ?>" class="btn btn-warning">Kembali</a>
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
											Diskon
										</th>
										<th>
											Berat
										</th>
										<th>
											Qty
										</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($detail as $key => $value) { ?>
										<tr>
											<td>
												<?= $no++ ?>
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
												<?= $value->diskon ?>
											</td>
											<td>
												<?= $value->berat ?>
											</td>
											<td>
												<?= $value->qty ?>
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