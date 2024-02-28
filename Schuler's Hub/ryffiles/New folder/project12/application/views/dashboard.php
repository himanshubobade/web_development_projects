
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-flex align-items-center justify-content-between pb-3">
						<div>
							<h4 class="mb-0 font-36 nunito_fonts text-capitalize">Hi, <?php echo $campusambasador->name; ?></h4>
							<p >Welcome to Theryf, the perfect place to shape your Career!</p>
						</div>
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div>
						
					</div>
				</div>
			</div>     
			
			<div class="card pt-2 pb-2">
				<div class="card-body">
					<div class="row">
						<div class="col-md-2 ">
							<div class="avatar-xl mb-2 mx-auto d-none d-xl-block d-lg-block d-md-block"> 
								<img src="<?= base_url() ?>assets/admin-assets/images/users/avatar-1.jpg" width="100%" class="rounded-circle">
							</div>
							<div class="avatar-xl mb-2 d-md-none">
								<img src="<?= base_url() ?>assets/admin-assets/images/users/avatar-1.jpg" width="100%" class="rounded-circle">
							</div>
						</div>
						<div class="col-md-7 mb-3">
							<h4 class="font-25 font-weight-700 text-capitalize"><?php echo $campusambasador->name; ?></h4>
							<p class="font-weight-600"><?php echo $campusambasador->college . " , " . $campusambasador->course; ?></p>
							<p class="font-weight-600"><?php echo  $campusambasador->description;  ?></p>
							<a href="<?= base_url() ?>update-campus-ambasadors" class="btn btn-primary mt-2" >Update Your Profile</a>
						</div>
						<div class="col-md-3">
							<div class="media">
								<div>
									<i class="mdi mdi-phone text-warning font-20"></i>
								</div>
								<div class="media-body ml-2 mt-1">
									<h5 class="font-16">
									<p class="font-weight-600"><?php echo  $campusambasador->mobile;  ?></p>
										<!--3690252364-->
									</h5>
								</div>
							</div>
							<div class="media">
								<div>
									<i class="mdi mdi-email-outline text-warning font-20"></i>
								</div>
								<div class="media-body ml-2 mt-1">
									<h5 class="font-16"><p class="font-weight-600"><?php echo  $campusambasador->email;  ?></p></h5>
								</div>
								<!--dk@gmail.com-->
							</div>
							<div class="media">
								<div>
									<i class="mdi mdi-map-marker text-warning font-20"></i>
								</div>
								<div class="media-body ml-2 mt-1">
									<h5 class="font-16"><p class="font-weight-600"><?php echo  $campusambasador->city ?></p></h5>
								</div>
							</div>
							<div class="media mt-3">
								<div class="avatar-xs mr-2">
									<span class="avatar-title rounded-circle" style="background-color:#3B5998">
									<a href="<?php echo  $campusambasador->facebook;  ?>"><i class="mdi mdi-facebook" style="color: white">

										</i></a>
									</span>
								</div>
								<div class="avatar-xs mr-2">
									<span class="avatar-title rounded-circle" style="background-color:#007bb5">
									<a href="<?php echo   $campusambasador->linkedin;  ?>">	<i class="mdi mdi-linkedin" style="color: white"></i>
									</span></a>
								</div>
								<div class="avatar-xs mr-2">
									<span class="avatar-title rounded-circle" style="background-color:#ff5700">
									<a href="<?php echo  $campusambasador->instagram;  ?>">	<i class="mdi mdi-instagram" style="color: white"></i>
									</span></a>
								</div>
								<div class="avatar-xs mr-2">
									<span class="avatar-title rounded-circle" style="background-color:#007bb5">
									<a href="<?php echo   $campusambasador->twitter;  ?>">	<i class="mdi mdi-twitter" style="color: white"></i>
									</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-4">
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
				
				<div class="col-sm-6 col-xl-3">
					<a href="<?= base_url() ?>catakeaction" class="btn btn-info font-16 mt-0">View</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
						</div>
					</div><!--end card-->
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div id="pie_chart" class="apex-charts" dir="ltr"></div>
						</div>
					</div><!--end card-->
				</div>
			</div>
			<div class="mb-4">
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-xl-3">
						<div class="card">
							<div>
								<img src="<?= base_url() ?>assets/admin-assets/images/small/img-1.jpg" alt="" class="img-fluid take_action_img">
								<span class="points_Num"><small class="font-12 ml-1">Point</small><br/>1000</span>
							</div>
							<div>
								<div class="p-3">
									<h4>For science, music, sport, etc, europe vocabulary.</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<hr/ class="mb-0 mt-0">
								<a href="#" class="d-block p-3 btn btn-outline-primary border-radius-0px no-border font-16 text-left">Take Action</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-xl-3">
						<div class="card">
							<div>
								<img src="<?= base_url() ?>assets/admin-assets/images/small/img-2.jpg" alt="" class="img-fluid take_action_img">
								<span class="points_Num"><small class="font-12 ml-1">Point</small><br/>1000</span>
							</div>
							<div>
								<div class="p-3">
									<h4>For science, music, sport, etc, europe vocabulary.</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<hr/ class="mb-0 mt-0">
								<a href="#" class="d-block p-3 btn btn-outline-primary border-radius-0px no-border font-16 text-left">Take Action</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-xl-3">
						<div class="card">
							<div>
								<img src="<?= base_url() ?>assets/admin-assets/images/small/img-3.jpg" alt="" class="img-fluid take_action_img">
								<span class="points_Num"><small class="font-12 ml-1">Point</small><br/>1000</span>
							</div>
							<div>
								<div class="p-3">
									<h4>For science, music, sport, etc, europe vocabulary.</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<hr/ class="mb-0 mt-0">
								<a href="#" class="d-block p-3 btn btn-outline-primary border-radius-0px no-border font-16 text-left">Take Action</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-xl-3">
						<div class="card">
							<div>
								<img src="<?= base_url() ?>assets/admin-assets/images/small/img-4.jpg" alt="" class="img-fluid take_action_img">
								<span class="points_Num"><small class="font-12 ml-1">Point</small><br/>1000</span>
							</div>
							<div>
								<div class="p-3">
									<h4>For science, music, sport, etc, europe vocabulary.</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<hr/ class="mb-0 mt-0">
								<a href="#" class="d-block p-3 btn btn-outline-primary border-radius-0px no-border font-16 text-left">Take Action</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<a href="<?= base_url() ?>catakeaction" class="btn btn-primary">View More Action</a>
					</div>
				</div>
			</div>
		</div>
	</div>