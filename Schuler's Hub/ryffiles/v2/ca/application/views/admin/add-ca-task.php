<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-36 nunito_fonts">Add New Task</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="<?= base_url() ?>hello-admin/ca-tasks">Campus Ambasador Tasks</a></li>
                                            <li class="breadcrumb-item active">Add New Task</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
						
						<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									
									<form method="post" action="<?= base_url() ?>hello-admin/ca-tasks/add-new-ca-task/submit" enctype="multipart/form-data">
									
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Title</label>
                                            <div class="col-md-10">
                                                <input placeholder="Title of the Task" required class="form-control" name="title"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Description of Task</label>
                                            <div class="col-md-10">
                                                <textarea placeholder="Description of Task" required class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Points</label>
                                            <div class="col-md-10">
                                                <input placeholder="Title of the Task" type="number" required class="form-control" name="points"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Link</label>
                                            <div class="col-md-10">
                                                <input placeholder="Title of the Task" type="text" class="form-control" name="link"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Attach File</label>
                                            <div class="col-md-10">
                                                <input placeholder="Title of the Task" type="file" class="form-control" name="userfile"/>
                                            </div>
                                        </div>
										 <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">College</label>
                                            <div class="col-md-10">
                                              <select class="form-control select2" multiple name="college[]" >
												<option value="">Select college</option>
												<?php foreach($collegesarray as $college){?>
												<option value="<?php echo $college->id; ?>"><?php echo $college->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Course</label>
                                            <div class="col-md-10">
                                               <select class="form-control select2"  multiple name="course[]" >
												<option value="">Select course</option>
												<?php foreach($coursesarray as $course){?>
												<option value="<?php echo $course->id; ?>"><?php echo $course->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Year</label>
                                            <div class="col-md-10">
                                                <input placeholder="Year" class="form-control" name="year"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">Country</label>
                                            <div class="col-md-10">
											<select class="form-control select2" name="country[]"   multiple  id="country" >
												<option value="">Select Country</option>
												<?php foreach($countriesarray as $countries){?>
												<option value="<?php echo $countries->id; ?>" <?php if($countries->id=='101'){ echo 'selected';}?>><?php echo $countries->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">States</label>
                                            <div class="col-md-10">
											<select class="form-control select2" name="state[]"   multiple  id="state" >
												<option value="">Select State</option>
												<?php foreach($statesarray as $states){?>
												<option value="<?php echo $states->id; ?>"><?php echo $states->name; ?></option>
												<?php }?>
											</select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400">City</label>
                                            <div class="col-md-10">
											<select class="form-control select2" name="city[]"   multiple  id="city"  >
												<option value="">Select City</option>
												 
											</select>
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label font-18 font-weight-400" style="color: #e30c2c;"><?php echo $error;?></label>
                                            
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary mt-2" name="para" value="">Add Campus Ambasador Task</button>
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
				<script>
				$('#country').on('change',function(){
        var countryID = $(this).val();

        if(countryID){
            $.ajax({
                type:"POST",
                url: "<?php echo base_url();?>hello-admin/states", 
                data: {
					country : countryID
				},
                dataType: "json", 
                success:function(res){
                    if(res){
                        $("#state").empty();
                        $("#state").append('<option value="">Select State</option>');
                        $.each(res,function(key,value){
                            $("#state").append('<option value="'+key+'">'+value+'</option>');
                        }); 

                    }else{
                        $("#state").empty();
                    }
                },error:function(e)
                {
                    alert("error");
                }
            });
        }else{
            $("#state").empty(); 
        } 
    });
				$('#state').on('change',function(){
        var stateID = $(this).val();

        if(stateID){
           
            $.ajax({
                type:"POST",
                url: "<?php echo base_url();?>hello-admin/cities", 
                data: {
					state : stateID
				},
                dataType: "json", 
                success:function(res){
                    if(res){
                        $("#city").empty();
                        $("#city").append('<option value="">Select City</option>');
                        $.each(res,function(key,value){
                            $("#city").append('<option value="'+key+'">'+value+'</option>');
                        }); 
                    }else{
                       $("#city").empty();
                    }
                },
				error:function(e)
                {
                    alert("error");
                }
            });
        }else{
           $("#city").empty(); 
        } 
    });
</script>