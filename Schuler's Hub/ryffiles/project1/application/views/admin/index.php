
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-flex align-items-center justify-content-between pb-2">
						<div>
							<h4 class="mb-0 font-36 nunito_fonts">Dashboard</h4>
							<p>Welcome to Theryf, the perfect place to shape your Career!</p>
						</div>
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div>
						
					</div>
				</div>
			</div>     
			
			<div class="row">
				<div class="col-sm-6 col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="media">
								<div class="media-body">
									<h5 class="font-size-18 font-weight-400">Campus Ambasador</h5>
									<h4 class="m-0 align-self-center font-weight-700 theme_coLor"><?php echo $numrowsca;?></h4>
								</div>
								<div class="avatar-xs">
									<span class="avatar-title rounded-circle">
										<i class="dripicons-box"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="media">
								<div class="media-body">
									<h5 class="font-size-18 font-weight-400">Number of Task</h5>
									<h4 class="m-0 align-self-center font-weight-700 theme_coLor"><?php echo $numrowscatask;?></h4>
								</div>
								<div class="avatar-xs">
									<span class="avatar-title rounded-circle">
										<i class="dripicons-briefcase"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<div class="col-sm-6 col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="media">
								<div class="media-body">
									<h5 class="font-size-18 font-weight-400">Number of Actions</h5>
									<h4 class="m-0 align-self-center font-weight-700 theme_coLor"><?php echo $numrowscatakeaction ;?></h4>
								</div>
								<div class="avatar-xs">
									<span class="avatar-title rounded-circle">
										<i class="dripicons-tags"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="media">
								<div class="media-body">
									<h5 class="font-size-18 font-weight-400">Country Ambassador</h5>
									<h4 class="m-0 align-self-center font-weight-700 theme_coLor"><?php echo $numrowscountryambassador;?></h4>
								</div>
								<div class="avatar-xs">
									<span class="avatar-title rounded-circle">
										<i class="dripicons-cart"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- end row -->
			
			<div class="row">
				<div class="col-xl-8">
					<div class="card">
						<div class="card-body">
							<h4 class="header-title mb-4">Sales Analytics</h4>
							<div class="row justify-content-center">
								<div class="col-sm-4">
									<div class="text-center">
										<p>This Month</p>
										<h4>$ 46,543</h4>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="text-center">
										<p>This Week</p>
										<h4>$ 7,842</h4>
									</div>
								</div>
							</div>
							<div id="revenue-chart" class="apex-charts" dir="ltr"></div>
						</div>
					</div>
				</div>

				<div class="col-xl-4">
					<div class="card">
						<div class="card-body">
							<h4 class="header-title mb-4">Marketplaces Earning</h4>

							<div dir="ltr">
								
								<div class="slick-slider slider-for hori-timeline-desc pt-0">
									<div>
										<p class="font-size-16">Daily Task Submissions</p>
										<h4 class="mb-4">$ 1,452</h4>
										<div id="earning-day-chart" class="apex-charts"></div>
									</div>
									<div>
										<p class="font-size-16">Weekly Task Submissions</p>
										<h4 class="mb-4">$ 6,536</h4>
										<div id="earning-weekly-chart" class="apex-charts"></div>
									</div>
									<div>
										<p class="font-size-16">Monthly Task Submissions</p>
										<h4 class="mb-4">$ 24,562</h4>
										<div id="earning-monthly-chart" class="apex-charts"></div>
									</div>
									<div>
										<p class="font-size-16">Yearly Task Submissions</p>
										<h4 class="mb-4">$ 2,82,562</h4>
										<div id="earning-yearly-chart" class="apex-charts"></div>
									</div>
								</div>

								<div class="row justify-content-center mb-3">
									<div class="col-lg-11">
										<div class="slick-slider slider-nav hori-timeline-nav">
											<div class="slider-nav-item">
												<h5 class="nav-title font-size-14 mb-0">Day</h5>
											</div>
											<div class="slider-nav-item">
												<h5 class="nav-title font-size-14 mb-0">Week</h5>
											</div>
											<div class="slider-nav-item">
												<h5 class="nav-title font-size-14 mb-0">Month</h5>
											</div>
											<div class="slider-nav-item">
												<h5 class="nav-title font-size-14 mb-0">Year</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			 <div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<h4 class="header-title mb-4">Latest Transaction</h4>

							<div class="table-responsive">
								<table class="table table-centered table-nowrap mb-0">
									<thead>
										<tr>
											<th scope="col"  style="width: 50px;">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheckall">
													<label class="custom-control-label" for="customCheckall"></label>
												</div>
											</th>
											<th scope="col"  style="width: 60px;"></th>
											<th scope="col">Name of CA</th>
											<th scope="col">Date</th>
											<th scope="col">Price</th>
											<th scope="col">Quantity</th>
											<th scope="col">Amount</th>
											<th scope="col">Status</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1"></label>
												</div>
											</td>
											<td>
												<img src="assets/images/users/avatar-2.jpg" alt="user" class="avatar-xs rounded-circle" />
											</td>
											<td>
												<p class="mb-1 font-size-12">#AP1234</p>
												<h5 class="font-size-15 mb-0">David Wiley</h5>
											</td>
											<td>02 Nov, 2019</td>
											<td>$ 1,234</td>
											<td>1</td>
											
											<td>
												$ 1,234
											</td>
											<td>
												<i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
											</td>
											<td>
												<button type="button" class="btn btn-outline-success btn-sm">Approve</button>
												<button type="button" class="btn btn-outline-danger btn-sm">View</button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck2">
													<label class="custom-control-label" for="customCheck2"></label>
												</div>
											</td>
											<td>
												<div class="avatar-xs">
													<span class="avatar-title rounded-circle bg-soft-primary text-primary">
														W
													</span>
												</div>
											</td>
											<td>
												<p class="mb-1 font-size-12">#AP1235</p>
												<h5 class="font-size-15 mb-0">Walter Jones</h5>
											</td>
											<td>04 Nov, 2019</td>
											<td>$ 822</td>
											<td>2</td>
											
											<td>
												$ 1,644
											</td>
											<td>
												<i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
											</td>
											<td>
												<button type="button" class="btn btn-outline-success btn-sm">Approve</button>
												<button type="button" class="btn btn-outline-danger btn-sm">View</button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck3">
													<label class="custom-control-label" for="customCheck3"></label>
												</div>
											</td>
											<td>
												<img src="assets/images/users/avatar-3.jpg" alt="user" class="avatar-xs rounded-circle" />
											</td>
											<td>
												<p class="mb-1 font-size-12">#AP1236</p>
												<h5 class="font-size-15 mb-0">Eric Ryder</h5>
											</td>
											<td>05 Nov, 2019</td>
											<td>$ 1,153</td>
											<td>1</td>
											
											<td>
												$ 1,153
											</td>
											<td>
												<i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i> Cancel
											</td>
											<td>
												<button type="button" class="btn btn-outline-success btn-sm">Approve</button>
												<button type="button" class="btn btn-outline-danger btn-sm">View</button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck4">
													<label class="custom-control-label" for="customCheck4"></label>
												</div>
											</td>
											<td>
												<img src="assets/images/users/avatar-6.jpg" alt="user" class="avatar-xs rounded-circle" />
											</td>
											<td>
												<p class="mb-1 font-size-12">#AP1237</p>
												<h5 class="font-size-15 mb-0">Kenneth Jackson</h5>
											</td>
											<td>06 Nov, 2019</td>
											<td>$ 1,365</td>
											<td>1</td>
											
											<td>
												$ 1,365
											</td>
											<td>
												<i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
											</td>
											<td>
												<button type="button" class="btn btn-outline-success btn-sm">Approve</button>
												<button type="button" class="btn btn-outline-danger btn-sm">View</button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck5">
													<label class="custom-control-label" for="customCheck5"></label>
												</div>
											</td>
											<td>
												<div class="avatar-xs">
													<span class="avatar-title rounded-circle bg-soft-primary text-primary">
														R
													</span>
												</div>
											</td>
											<td>
												<p class="mb-1 font-size-12">#AP1238</p>
												<h5 class="font-size-15 mb-0">Ronnie Spiller</h5>
											</td>
											<td>08 Nov, 2019</td>
											<td>$ 740</td>
											<td>2</td>
											
											<td>
												$ 1,480
											</td>
											<td>
												<i class="mdi mdi-checkbox-blank-circle text-warning mr-1"></i> Pending
											</td>
											<td>
												<button type="button" class="btn btn-outline-success btn-sm">Approve</button>
												<button type="button" class="btn btn-outline-danger btn-sm">View</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
			
		</div>
	</div>