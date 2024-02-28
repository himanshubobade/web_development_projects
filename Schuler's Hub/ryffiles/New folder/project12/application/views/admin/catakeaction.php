
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
									<h5 class="font-size-18 font-weight-400">Total Actions</h5>
									<h4 class="m-0 align-self-center font-weight-700 theme_coLor"><?php echo $numrowscaaction;?></h4>
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
									<h5 class="font-size-18 font-weight-400">CA Tasks</h5>
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
									<h5 class="font-size-18 font-weight-400">Take Actions</h5>
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
					<?php $x=0; foreach ($actionsarray as $key){?>
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


<!--<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-36 nunito_fonts">Campus Ambasador Action</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Campus Ambasador Action</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
						
						<div class="row">
							<div class="col-12">
								<div class="card">
                                    <div class="card-body p-20">
										<div class="row">
											<div class="col-md-8">
												<div class="font-16">
													<h4 class="mb-15 nunito_fonts font-25 font-weight-700">Action</h4>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												</div>
												<a href="<?= base_url() ?>hello-admin/ca-actions/add-new-ca-action" class="btn btn-info font-16">Add New Action</a>
											</div>
											<div class="col-md-4 text-center">
												<img src="<?= base_url() ?>assets/admin-assets/images/icons/news.svg" width="170px">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
                                    <div class="card-body p-20">
										<h4 class="mb-3"><i class="mdi mdi-server-network"></i> Filter</h4>
										<form>
											<div class="row">
											  <div class="form-group col-md-4">
												<label class="font-18 font-weight-400">Completed</label>
												<select class="form-control">
												  <option>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											  </div>
											  <div class="form-group col-md-4">
												<label class="font-18 font-weight-400">Panding</label>
												<select class="form-control">
												  <option>1</option>
												  <option>2</option>
												  <option>3</option>
												  <option>4</option>
												  <option>5</option>
												</select>
											  </div>
										  </div>
										</form>
									</div>
								</div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
										<div class="">

                                            <div class="table-responsive">
            
                                            <table id="datatable" class="table table-bordered dt-responsive " >
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Images</th>
                                                    <th>File</th>
                                                    <th>Points</th>
                                                    <th>Created On</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                    <?php foreach ($actionsarray as $key) {?>
                                                <tr>
                                                    <td><?php echo $key->id;?></td>
                                                    <td><?php echo $key->title;?></td>
                                                    <td><?php echo $key->description;?></td>
                                                    <td><a href="<?php echo $key->image;?>" target="_blank"><?php echo $key->image;?></a></td>
                                                    <td><a href="<?php echo $key->file;?>" target="_blank"><?php echo $key->file;?></a></td>
                                                    <td><?php echo $key->point;?></td>
                                                    <td><?php echo $key->created_on;?></td>
                                                    <td><a href="<?= base_url() ?>hello-admin/ca-actions/edit-ca-actions/<?php echo $key->id;?>" class="btn btn-dark waves-effect waves-light">Edit</a><br><br></td>
                                                </tr>

                                                <?php } ?>

                                        

                                                

                                                
                                                </tbody>
                                            </table>
            
                                        </div>


										
											
                                               
                                            
										</div>
                                    </div>
                                </div>
                            </div> #end col
                        </div> end row 
						
					</div>
				</div>
                -->