<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 col-xl-12 grid-margin stretch-card">
				<div class="row w-100 flex-grow">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<p class="card-title">Grafik K-Means</p>
								<div class="row mb-3">
								</div>
								<?php
								foreach ($grafik as $key => $analisis) {
									$nama_produk[] = $analisis->nama_produk;
									$qty[] = $analisis->qty;
								}
								?>
								<canvas id="lineChart"></canvas>
								<script>
									var ctx = document.getElementById('lineChart');
									var myChart = new Chart(ctx, {
										type: 'bar',
										data: {
											labels: <?= json_encode($nama_produk) ?>,
											datasets: [{
												label: 'Analisis K-Means',
												data: <?= json_encode($qty) ?>,
												backgroundColor: [
													'rgba(255, 99, 132, 0.80)',
													'rgba(54, 162, 235, 0.80)',
													'rgba(255, 206, 86, 0.80)',
													'rgba(75, 192, 192, 0.80)',
													'rgba(153, 102, 255, 0.80)',
													'rgba(255, 159, 64, 0.80)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(255, 99, 132, 0.80)',
													'rgba(54, 162, 235, 0.80)',
													'rgba(255, 206, 86, 0.80)',
													'rgba(75, 192, 192, 0.80)',
													'rgba(153, 102, 255, 0.80)',
													'rgba(255, 159, 64, 0.80)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(255, 99, 132, 0.80)',
													'rgba(54, 162, 235, 0.80)',
													'rgba(255, 206, 86, 0.80)',
													'rgba(75, 192, 192, 0.80)',
													'rgba(153, 102, 255, 0.80)',
													'rgba(255, 159, 64, 0.80)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(54, 162, 235, 0.80)',
													'rgba(255, 206, 86, 0.80)',
													'rgba(75, 192, 192, 0.80)',
													'rgba(153, 102, 255, 0.80)',
													'rgba(255, 159, 64, 0.80)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(54, 162, 235, 0.80)',
													'rgba(255, 206, 86, 0.80)',
													'rgba(75, 192, 192, 0.80)',
													'rgba(153, 102, 255, 0.80)',
													'rgba(255, 159, 64, 0.80)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(54, 162, 235, 0.80)',
													'rgba(255, 206, 86, 0.80)',
													'rgba(75, 192, 192, 0.80)',
													'rgba(153, 102, 255, 0.80)',
													'rgba(255, 159, 64, 0.80)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',

												],
												borderColor: [
													'rgba(255, 99, 132, 1)',
													'rgba(54, 162, 235, 1)',
													'rgba(255, 206, 86, 1)',
													'rgba(75, 192, 192, 1)',
													'rgba(153, 102, 255, 1)',
													'rgba(255, 159, 64, 1)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(255, 99, 132, 1)',
													'rgba(54, 162, 235, 1)',
													'rgba(255, 206, 86, 1)',
													'rgba(75, 192, 192, 1)',
													'rgba(153, 102, 255, 1)',
													'rgba(255, 159, 64, 1)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(255, 99, 132, 1)',
													'rgba(54, 162, 235, 1)',
													'rgba(255, 206, 86, 1)',
													'rgba(75, 192, 192, 1)',
													'rgba(153, 102, 255, 1)',
													'rgba(255, 159, 64, 1)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(255, 99, 132, 1)',
													'rgba(54, 162, 235, 1)',
													'rgba(255, 206, 86, 1)',
													'rgba(75, 192, 192, 1)',
													'rgba(153, 102, 255, 1)',
													'rgba(255, 159, 64, 1)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
													'rgba(54, 162, 235, 0.80)',
													'rgba(255, 206, 86, 0.80)',
													'rgba(75, 192, 192, 0.80)',
													'rgba(153, 102, 255, 0.80)',
													'rgba(255, 159, 64, 0.80)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)', , 'rgba(54, 162, 235, 0.80)',
													'rgba(255, 206, 86, 0.80)',
													'rgba(75, 192, 192, 0.80)',
													'rgba(153, 102, 255, 0.80)',
													'rgba(255, 159, 64, 0.80)',
													'rgba(201, 76, 76, 0.3)',
													'rgba(201, 77, 77, 1)',
													'rgba(0, 140, 162, 1)',
													'rgba(158, 109, 8, 1)',
													'rgba(201, 76, 76, 0.8)',
													'rgba(0, 129, 212, 1)',
													'rgba(201, 77, 201, 1)',
													'rgba(255, 207, 207, 1)',
													'rgba(201, 77, 77, 1)',
													'rgba(128, 98, 98, 1)',
													'rgba(0, 0, 0, 1)',
													'rgba(128, 128, 128, 1)',
												],
												fill: false,
												borderWidth: 1
											}]
										},
										options: {
											scales: {
												yAxes: [{
													ticks: {
														beginAtZero: true
													}
												}]
											}
										}
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- <div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Financial management review</h4>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>
											User
										</th>
										<th>
											First name
										</th>
										<th>
											Progress
										</th>
										<th>
											Amount
										</th>
										<th>
											Deadline
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="py-1">
											<img src="images/faces/face1.jpg" alt="image" />
										</td>
										<td>
											Herman Beck
										</td>
										<td>
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>
											$ 77.99
										</td>
										<td>
											May 15, 2015
										</td>
									</tr>
									<tr>
										<td class="py-1">
											<img src="images/faces/face2.jpg" alt="image" />
										</td>
										<td>
											Messsy Adam
										</td>
										<td>
											<div class="progress">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>
											$245.30
										</td>
										<td>
											July 1, 2015
										</td>
									</tr>
									<tr>
										<td class="py-1">
											<img src="images/faces/face3.jpg" alt="image" />
										</td>
										<td>
											John Richards
										</td>
										<td>
											<div class="progress">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>
											$138.00
										</td>
										<td>
											Apr 12, 2015
										</td>
									</tr>
									<tr>
										<td class="py-1">
											<img src="images/faces/face4.jpg" alt="image" />
										</td>
										<td>
											Peter Meggik
										</td>
										<td>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>
											$ 77.99
										</td>
										<td>
											May 15, 2015
										</td>
									</tr>
									<tr>
										<td class="py-1">
											<img src="images/faces/face5.jpg" alt="image" />
										</td>
										<td>
											Edward
										</td>
										<td>
											<div class="progress">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>
											$ 160.25
										</td>
										<td>
											May 03, 2015
										</td>
									</tr>
									<tr>
										<td class="py-1">
											<img src="images/faces/face6.jpg" alt="image" />
										</td>
										<td>
											John Doe
										</td>
										<td>
											<div class="progress">
												<div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>
											$ 123.21
										</td>
										<td>
											April 05, 2015
										</td>
									</tr>
									<tr>
										<td class="py-1">
											<img src="images/faces/face7.jpg" alt="image" />
										</td>
										<td>
											Henry Tom
										</td>
										<td>
											<div class="progress">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>
											$ 150.00
										</td>
										<td>
											June 16, 2015
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<!-- row end -->
		<div class="row">
			<!-- <div class="col-md-4 grid-margin stretch-card">
				<div class="card bg-facebook d-flex align-items-center">
					<div class="card-body py-5">
						<div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
							<i class="mdi mdi-facebook text-white icon-lg"></i>
							<div class="ml-3 ml-md-0 ml-xl-3">
								<h5 class="text-white font-weight-bold">2.62 Subscribers</h5>
								<p class="mt-2 text-white card-text">You main list growing</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 grid-margin stretch-card">
				<div class="card bg-google d-flex align-items-center">
					<div class="card-body py-5">
						<div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
							<i class="mdi mdi-google-plus text-white icon-lg"></i>
							<div class="ml-3 ml-md-0 ml-xl-3">
								<h5 class="text-white font-weight-bold">3.4k Followers</h5>
								<p class="mt-2 text-white card-text">You main list growing</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 grid-margin stretch-card">
				<div class="card bg-twitter d-flex align-items-center">
					<div class="card-body py-5">
						<div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
							<i class="mdi mdi-twitter text-white icon-lg"></i>
							<div class="ml-3 ml-md-0 ml-xl-3">
								<h5 class="text-white font-weight-bold">3k followers</h5>
								<p class="mt-2 text-white card-text">You main list growing</p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<!-- row end -->
	</div>
	<!-- content-wrapper ends -->