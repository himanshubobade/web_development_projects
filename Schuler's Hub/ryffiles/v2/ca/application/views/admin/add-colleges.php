<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-36 nunito_fonts">Colleges</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Colleges</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
						
						<div class="row">
                            <div class="col-12">
								<div class="card">
                                    <div class="card-body">
									<?php if(!empty($collegedetails->id)){ $method = 'update'; }else{ $method = 'submit'; }?>
									 <form method="post" action="<?= base_url() ?>hello-admin/colleges/<?php echo $method;?>">
									
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label font-20 font-weight-400">Enter college name</label>
                                            <input placeholder="Name of Colleges" required class="form-control" name="name" value="<?php if(!empty($collegedetails->id)){ echo $collegedetails->name; }?>"/>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info font-16" name="collegeid" value="<?php if(!empty($collegedetails->id)){ echo $collegedetails->id; }?>" ><?php echo ucwords($method);?></button>
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
                                                    <th>Created On</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                    <?php $x=1; foreach ($collegesarray as $key) {?>
                                                <tr>
                                                    <td><?php echo $x;?></td>
                                                    <td><?php echo $key->name;?></td> 
                                                    <td><?php echo date('d M Y',strtotime($key->created_on));?></td>
                                                    <td><a href="<?php echo base_url() ?>hello-admin/colleges/edit/<?php echo $key->id;?>" class="btn btn-success waves-effect waves-light">Edit</a> | <a onclick="return confirm('Are you sure want to delete??');" href="<?php echo base_url() ?>hello-admin/colleges/delete/<?php echo $key->id;?>" class="btn btn-danger waves-effect waves-light">Delete</a></td>
                                                </tr>

                                                <?php $x++; } ?>
  
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