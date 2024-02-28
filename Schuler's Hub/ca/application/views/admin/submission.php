<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-36 nunito_fonts">Task Submissions</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Task Submissions</li>
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
													<h4 class="mb-15 nunito_fonts font-25 font-weight-700">Tasks</h4>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												</div>
												<a href="<?= base_url() ?>hello-admin/campus-ambasadors/add-new-campus-ambasadors" class="btn btn-info font-16">Task Submissions</a>
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
                                    <div class="card-body">
										<div class="">

                                            <div class="table-responsive">
            
                                            <table id="datatable" class="table table-bordered dt-responsive " >
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Task ID</th>
                                                    <th>File Attached</th>
                                                    <th>Subimtted On</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                    <?php $i=1; 
													foreach ($tasksubmissions as $key) {?>
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $key->name?></td>
                                                        <td><?php echo $key->email?></td>
                                                        <td><?php echo $key->mobile?></td>
                                                        <td><?php echo $key->task_id?></td>
                                                        <td><a href="<?php echo $key->file_url?>" target="_blank">Open File</a></td>
                                                        <td><?php echo $key->created_on?></td>
                                                        <td><a href="<?= base_url() ?>hello-admin/campus-ambasadors/edit-campus-ambasadors/<?php echo $key->id;?>" class="btn btn-dark waves-effect waves-light">Approve</a></td>
                                                    </tr>

                                                <?php $i++;} ?>

                                        

                                                

                                                
                                                </tbody>
                                            </table>
            
                                        </div>


										
											
                                               
                                            
										</div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
						
					</div>
				</div>