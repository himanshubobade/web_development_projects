<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Submit Report</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Submit Report</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
						
						<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									
									<form method="post" action="<?= base_url() ?>submit-report/submit" enctype="multipart/form-data">
									
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Select Task</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="task">
                                                    <?php foreach ($details as $key) { ?>
                                                    <option value="<?php echo $key->id;?>"><?php echo $key->title;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Attach File</label>
                                            <div class="col-md-10">
                                                <input placeholder="Title of the Task" type="file" required class="form-control" name="userfile"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label" style="color: #e30c2c;"><?php echo $error;?></label>
                                            
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary mt-2" name="para" value="">Submit to Admin</button>
                                            </div>
                                        </div>
										
										</form>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
						
					</div>
				</div>