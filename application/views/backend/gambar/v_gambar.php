<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?= $title ?></h4>
						<p class="card-description">
							<!-- Button trigger modal -->
							<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
								Add
							</button> -->
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>
											No
										</th>
										<th>
											Gambar Utama
										</th>
										<th>
											Nama Produk
										</th>
										<th>
											Total Gambar
										</th>
										<th>
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($gambar as $key => $value) { ?>
										<tr>
											<td>
												<?= $no++ ?>
											</td>
											<td class="py-1">
												<img src="<?= base_url('assets/produk/' . $value->foto) ?>" alt="image" />
											</td>
											<td>
												<?= $value->nama_produk ?>
											</td>
											<td>
												<?= $value->jumlah_gambar ?>
											</td>
											<td>
												<a href="<?= base_url('gambar/add_gambar/' . $value->id_produk) ?>" class="btn btn-warning">Tambah Gambar</a>
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