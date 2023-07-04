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
						<div class="col-12 col-sm-12">
							<div class="card card-primary card-tabs">
								<div class="card-header p-0 pt-1">
									<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Masuk</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Proses</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Kirim</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Selesai</a>
										</li>
									</ul>
								</div>
								<div class="card-body">
									<div class="tab-content" id="custom-tabs-one-tabContent">
										<div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
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
															<td>
																<?php if ($value->metode_bayar == 1) { ?>
																	<span class="badge badge-danger">Belum Bayar</span>
																	<span class="badge badge-warning">Pembayaran COD</span>
																<?php } else { ?>
																	<span class="badge badge-danger">Belum Bayar</span>
																	<span class="badge badge-warning">Pembayaran Transfer</span>
																<?php } ?>
															</td>
															<td>
																<?php if ($value->metode_bayar == 1) { ?>
																	<a href="<?= base_url('transaksi/konfirmasi/' . $value->id_pesanan) ?>" class="btn btn-success">Konfirmaai</a>
																<?php } ?>
																<br>
																<a href="<?= base_url('transaksi/detail/' . $value->id_pesanan) ?>" class="btn btn-primary btn-sm">Detail Pesanan</a>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
										<div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
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
										<div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
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
										<div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
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
							<!-- /.card -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>