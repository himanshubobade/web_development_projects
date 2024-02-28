<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-36 nunito_fonts">Add New Action</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin/ca-actions">Campus Ambasador Actions</a></li>
                                            <li class="breadcrumb-item active">Add New Action</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									
									<form method="post" action="<?= base_url() ?>hello-admin/ca-actions/add-new-ca-action/submit" enctype="multipart/form-data">
									
                                    <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Title</label>
                                            <div class="col-md-10">
                                                <input placeholder="Title of the Action" required class="form-control" name="title"/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Description of Action</label>
                                            <div class="col-md-10">
                                                <textarea placeholder="Description of Action" required class="form-control" name="description"></textarea>
                                            </div>
                                        </div>

                                       

                                        
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Attach Image</label>
                                            <div class="col-md-10">
                                                <input placeholder="Image for the Action" type="file" class="form-control" name="userfile"/>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Attach File</label>
                                            <div class="col-md-10">
                                                <input placeholder="Title of the Action" type="file" class="form-control" name="userfile"/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Link</label>
                                            <div class="col-md-10">
                                                <input placeholder="Link of the Action" type="text" class="form-control" name="link"/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Points</label>
                                            <div class="col-md-10">
                                                <input placeholder="Points of the Action" type="number" required class="form-control" name="points"/>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary mt-2" name="para" value="">Add Campus Ambasador Action</button>
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