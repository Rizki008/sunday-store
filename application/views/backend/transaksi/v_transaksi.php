<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">
						<i class="fas fa-edit"></i>
						<?= $title ?>
					</h3>
				</div>
				<div class="card-body">
					<h4>Transaksi</h4>
					<div class="row">
						<div class="col-5 col-sm-3">
							<div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Masuk</a>
								<a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Proses</a>
								<a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Kirim</a>
								<a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Selesai</a>
							</div>
						</div>
						<div class="col-7 col-sm-9">
							<div class="tab-content" id="vert-tabs-tabContent">
								<div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>No Pemesanan</th>
												<th>Qty</th>
												<th>Harga Pembelian</th>
												<th>Biaya Pengiriman</th>
												<th>Total Bayar</th>
												<th>Status Pesanan</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($masuk as $key => $value) { ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $value->id_pesanan ?></td>
													<td><?= $value->qty ?></td>
													<td>Rp. <?= number_format($value->total_harga), 0 ?></td>
													<td>Rp. <?= number_format($value->ongkir), 0 ?></td>
													<td>Rp. <?= number_format($value->total_bayar), 0 ?></td>
													<td><span class="badge badge-danger">Belum Bayar</span></td>
													<td><a href="<?= base_url('transaksi/detail/' . $value->id_pesanan) ?>" class="btn btn-primary btn-sm">Detail Pesanan</a></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>No Pemesanan</th>
												<th>Harga Tiket</th>
												<th>Qty</th>
												<th>Tanggal Booking</th>
												<th>Metode Bayar</th>
												<th>Status Bayar/Pemesanan</th>
												<th>Setting</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($proses as $key => $values) { ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $values->id_pesanan ?></td>
													<td><?= $values->qty ?></td>
													<td>Rp. <?= number_format($values->total_harga), 0 ?></td>
													<td>Rp. <?= number_format($values->ongkir), 0 ?></td>
													<td>Rp. <?= number_format($values->total_bayar), 0 ?></td>
													<td><span class="badge badge-warning">Sudah Bayar</span></td>
													<td><a href="<?= base_url('transaksi/konfirmasi/' . $values->id_pesanan) ?>" class="btn btn-success">Konfirmaai</a></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>No Pemesanan</th>
												<th>Harga Tiket</th>
												<th>Qty</th>
												<th>Tanggal Booking</th>
												<th>Metode Bayar</th>
												<th>Status Bayar/Pemesanan</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($kirim as $key => $valuesa) { ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $valuesa->id_pesanan ?></td>
													<td><?= $valuesa->qty ?></td>
													<td>Rp. <?= number_format($valuesa->total_harga), 0 ?></td>
													<td>Rp. <?= number_format($valuesa->ongkir), 0 ?></td>
													<td>Rp. <?= number_format($valuesa->total_bayar), 0 ?></td>
													<td><span class="badge badge-primary">Kirim</span></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>No Pemesanan</th>
												<th>Harga Tiket</th>
												<th>Qty</th>
												<th>Tanggal Booking</th>
												<th>Metode Bayar</th>
												<th>Status Bayar/Pemesanan</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($selesai as $key => $valueda) { ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $valueda->id_pesanan ?></td>
													<td><?= $valueda->qty ?></td>
													<td>Rp. <?= number_format($valueda->total_harga), 0 ?></td>
													<td>Rp. <?= number_format($valueda->ongkir), 0 ?></td>
													<td>Rp. <?= number_format($valueda->total_bayar), 0 ?></td>
													<td><span class="badge badge-success">Selesai</span></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>