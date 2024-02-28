<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-36 nunito_fonts">Campus Ambasador Tasks</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Campus Ambasador Tasks</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
						
						<div class="row">
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
                                                    <th>File</th>
                                                    <th>Points</th>
                                                    <th>Created On</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody> 
                                                    <?php $x=1; foreach ($details as $key) {?>
                                                <tr>
                                                    <td><?php echo $x;?></td>
                                                    <td><?php echo $key->title;?></td>
                                                    <td><?php echo $key->description;?></td>
                                                    <td><a href="<?php echo $key->file;?>" target="_blank"><?php echo $key->file;?></a></td>
                                                    <td><?php echo $key->points;?></td>
                                                    <td><?php echo $key->created_on;?></td>
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