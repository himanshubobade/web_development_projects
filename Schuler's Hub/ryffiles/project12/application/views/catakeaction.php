
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-flex align-items-center justify-content-between pb-3">
						<div>
							<h4 class="mb-0 font-36 nunito_fonts">Take Action</h4>
						</div>
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
								<li class="breadcrumb-item active">Take Action</li>
							</ol>
						</div>
						
					</div>
				</div>
			</div>     
			<div class="row mb-1">
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
									<h4 class="m-0 align-self-center font-weight-700 theme_coLor"><?php echo $numrowscatakeaction;?></h4>
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
			<div class="mb-4">
				<div class="row">
					<?php $x=0; foreach($details as $key){?>
					<div class="col-lg-4 col-sm-6 col-xl-3">
						<div class="card">
							
							<div>
							
								<img src="<?= base_url() ?>assets/admin-assets/images/small/img-1.jpg" alt="" class="img-fluid take_action_img">
								<span class="points_Num"><small class="font-12 ml-1">Point</small><br/><?php echo $key->point;?></span>
							</div>
							<div>
								<div class="p-3">
								<h4><?php echo $key->title;?></h4>
									<p><?php echo $key->description;?></p>
								</div>
								<hr/ class="mb-0 mt-0">
								<a href="<?php echo $key->file;?>" class="d-block p-3 btn btn-outline-primary border-radius-0px no-border font-16 text-left">Take Action</a>
									
							</div>
							
						</div>
						
					</div>
				
					<?php $x++;}?>
				 
				</div>
			</div>
		</div>
	
													</div>